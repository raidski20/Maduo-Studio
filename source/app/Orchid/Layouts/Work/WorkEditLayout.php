<?php

namespace App\Orchid\Layouts\Work;

use App\Enums\WorkType;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Select;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class WorkEditLayout extends Rows
{
    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            Input::make('work.title')
                ->type('text')
                ->title(__('Work title'))
                ->placeholder('Something ...')
                ->help('Use a meaningful title that visitors can understand it easily.')
                ->maxlength(250)
                ->required(),

            TextArea::make('work.description')
                ->title('Description')
                ->rows(10)
                ->placeholder('Brief description for preview')
                ->required(),

            Select::make('work.type')
                ->title('Work type')

                ->options()

                ->options(
                    ($workType = request()['type'])
                        ?  [$workType => WorkType::tryFrom($workType)->label()]
                        : WorkType::getCasesAssoc()
                )
                ->disabled(),


            Input::make('work.link')
                ->type('text')
                ->title(__('Work link'))
                ->placeholder('Ex: https://example.com')
                ->help('Provide a link -if available- of the work.')
                ->maxlength(250)
        ];
    }
}
