<?php

namespace App\Orchid\Layouts\Work;

use App\Enums\WorkType;
use App\Models\Work;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class WorkListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'works';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): iterable
    {
        return [

            TD::make('title', __('Title'))
                ->sort()
                ->filter(Input::make())
                ->cantHide(),

            TD::make('description', __('Description'))
                ->cantHide()
                ->render(function (Work $work) {
                    return substr($work->description, 0, 50) . ' ...';
                }),

            TD::make('type', __('Type'))
                ->sort()
                ->cantHide()
                ->render(function (Work $work) {
                    return WorkType::tryFrom($work->type)->label();
                }),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->render(fn (Work $work) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.systems.works.edit', $work->id)
                            ->icon('bs.pencil'),

                        Button::make(__('Delete'))
                            ->icon('bs.trash3')
                            ->confirm(__('You can\'t revert this action. Are you sure you want to continue ?'))
                            ->method('remove', [
                                'id' => $work->id,
                            ]),
                    ])),
        ];
    }
}
