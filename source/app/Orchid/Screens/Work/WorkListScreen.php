<?php

namespace App\Orchid\Screens\Work;

use App\Models\Work;
use App\Orchid\Layouts\Work\WorkListLayout;
use App\Orchid\Selections\WorkTypeSelection;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;

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
            Link::make('Add Work')
                ->icon('plus')
                ->route('platform.systems.services.create')
                ->canSee(true)
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
            WorkTypeSelection::class,
            WorkListLayout::class
        ];
    }
}
