<?php

namespace App\Services;

use App\Events\WorkAttachmentsChanged;
use App\Models\Work;
use Illuminate\Support\Facades\DB;

class WorkService
{
    public function __construct(
        private Work $work
    ){}

    public function createNewWork(array $validatedData): Work
    {
        [$newWorkData, $attachmentsIds] = $this->extractWorkInfoFromRequest($validatedData);

        $this->saveWork($newWorkData);

        $this->work->attachment()->syncWithoutDetaching($attachmentsIds);

        WorkAttachmentsChanged::dispatch($attachmentsIds, $newWorkData['type']);

        return $this->work;
    }

    public function updateWork(array $validatedData, Work $work): Work
    {
        $this->work = $work;

        [$newWorkData, $attachmentsIds] = $this->extractWorkInfoFromRequest($validatedData);

        $this->saveWork($newWorkData);

        if($this->checkIfAttachmentsChanged($attachmentsIds))
        {
            $this->work->attachment()->syncWithoutDetaching($attachmentsIds);

            WorkAttachmentsChanged::dispatch($attachmentsIds, $newWorkData['type']);
        }

        return $this->work;
    }

    public function deleteWork(Work $work): bool
    {
        try {
            DB::beginTransaction();

            // Delete work attachments
            $work->attachment->each->delete();

            $work->delete();

            DB::commit();

            return true;

        } catch (\Exception) {

            DB::rollBack();

            return false;
        }
    }

    private function extractWorkInfoFromRequest(array $validatedData): array
    {
        $newWorkData = $validatedData['work'];

        unset($newWorkData['attachment']);

        return [
            $newWorkData,
            $validatedData['work']['attachment']
        ];
    }

    private function saveWork(array $data): void
    {
        $this->work->fill($data)->save();
    }

    private function checkIfAttachmentsChanged(array $attachmentsIds): bool
    {
        return $attachmentsIds != $this->work->attachment->pluck('id')->toArray();
    }
}
