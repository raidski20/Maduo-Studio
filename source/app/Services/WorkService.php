<?php

namespace App\Services;

use App\Events\WorkAttachmentsChanged;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkService
{
    public function __construct(
        private Work $work
    ){}

    public function createNewWork(Request $request): Work
    {
        [$newWorkData, $attachmentsIds] = $this->extractWorkInfoFromRequest($request);

        $this->saveWork($newWorkData);

        $this->work->attachment()->syncWithoutDetaching($attachmentsIds);

        WorkAttachmentsChanged::dispatch($attachmentsIds, $newWorkData['type']);

        return $this->work;
    }

    public function updateWork(Request $request, Work $work): Work
    {
        $this->work = $work;

        [$newWorkData, $attachmentsIds] = $this->extractWorkInfoFromRequest($request);

        $this->saveWork($newWorkData);

        if($this->checkIfAttachmentsChanged($attachmentsIds))
        {
            $this->work->attachment()->syncWithoutDetaching($attachmentsIds);

            WorkAttachmentsChanged::dispatch($attachmentsIds, $newWorkData['type']);
        }

        return $this->work;
    }

    private function extractWorkInfoFromRequest(Request $request): array
    {
        $newWorkData = $request->get('work');

        unset($newWorkData['attachment']);

        return [
            $newWorkData,
            $request->input('work.attachment')
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
