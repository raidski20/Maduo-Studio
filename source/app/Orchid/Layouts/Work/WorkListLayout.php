<?php

namespace App\Orchid\Layouts\Work;

use App\Enums\WorkType;
use App\Models\Work;
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
        ];
    }
}
