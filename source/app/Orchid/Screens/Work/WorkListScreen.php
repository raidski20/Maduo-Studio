<?php

namespace App\Orchid\Screens\Work;

use App\Enums\WorkType;
use App\Models\Work;
use App\Orchid\Layouts\Work\WorkListLayout;
use App\Orchid\Selections\WorkTypeSelection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Orchid\Screen\Actions\ModalToggle;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Layout;

class WorkListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'works' => Work::filters(WorkTypeSelection::class)->defaultSort('id')->paginate()
        ];
    }

    /***
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Work List';
    }

    public function description(): ?string
    {
        return "A list of all Maduo-Studio previous work.";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            ModalToggle::make('Add Work')
                ->modal('AddNewWorkModal')
                ->method('selectWorkType')
                ->icon('plus'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            Layout::modal('AddNewWorkModal',
                [
                    Layout::rows([
                        Select::make('type')
                            ->title('Work type')
                            ->empty()
                            ->options(WorkType::getCasesAssoc()),
                    ]),
                ])
                ->title('Add new work')
                ->applyButton('Create')
                ->closeButton('Close'),

            WorkTypeSelection::class,
            WorkListLayout::class,
        ];
    }

    public function selectWorkType(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'type' => [
                'required',
                Rule::in(WorkType::getCasesValues())
            ]
        ]);

        $addNewWorkLink = route('platform.systems.works.create') . '?type=' . $validated['type'];
        return redirect()->to($addNewWorkLink);
    }
}
