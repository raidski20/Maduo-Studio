<?php

namespace App\Orchid\Screens\Work;

use App\Enums\WorkType;
use App\Events\WorkAttachmentsChanged;
use App\Models\Work;
use App\Orchid\Layouts\Work\WorkEditLayout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class WorkEditScreen extends Screen
{
    public $work;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Work $work): iterable
    {
        // If $work is empty it means we are going to create new Work
        if(empty($work))
        {
            $workType = request()['type'];

            // Check that the $workType param being passed is valid
            if(! in_array($workType, WorkType::getCasesValues(),true)) {
                abort(404);
            }
        }

        $work->load('attachment');

        return [
            'work' => $work
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->work->exists ? 'Edit work details' : 'Create a new work';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {

        return 'Al fields with * are required';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Save changes'))
                ->icon('bs.check-circle')
                ->canSee($this->work->exists)
                ->method('update'),

            Button::make(__('Create work'))
                ->icon('bs.plus-circle')
                ->canSee(!$this->work->exists)
                ->method('create'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]attachments
     */
    public function layout(): iterable
    {
        return [
            WorkEditLayout::class
        ];
    }

    public function create(Request $request): RedirectResponse
    {
        [$newWorkData, $attachmentsIds] = $this->extractWorkInfoFromRequest($request);

        $this->saveWork($newWorkData);

        $this->work->attachment()->syncWithoutDetaching($attachmentsIds);

        WorkAttachmentsChanged::dispatch($attachmentsIds, $newWorkData['type']);

        Toast::success(__('Work was added'));

        return to_route("platform.systems.works");
    }

    public function update(Request $request): RedirectResponse
    {
        [$newWorkData, $attachmentsIds] = $this->extractWorkInfoFromRequest($request);

        $this->saveWork($newWorkData);

        if($this->checkIfAttachmentsChanged($attachmentsIds))
        {
            $this->work->attachment()->syncWithoutDetaching($attachmentsIds);

            WorkAttachmentsChanged::dispatch($attachmentsIds, $newWorkData['type']);
        }

        Toast::success(__('Work was updated'));

        return to_route("platform.systems.works");
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
