<?php

namespace App\Orchid\Layouts\Section;

use App\Models\Section;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class SectionListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'sections';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [
            TD::make('name', __('Name'))
                ->sort()
                ->filter(Input::make())
                ->cantHide()
                ->render(fn (Section $section) => Link::make($section->name)
                    ->route('platform.systems.sections.edit', $section)),

            TD::make('title', __('Title'))
                ->sort()
                ->filter(Input::make())
                ->cantHide(),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Section $section) => Link::make(__('Edit'))
                            ->route('platform.systems.sections.edit', $section->id)
                            ->icon('bs.pencil'),
                    ),
        ];
    }
}
