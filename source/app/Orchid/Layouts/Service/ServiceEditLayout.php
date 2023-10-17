<?php

namespace App\Orchid\Layouts\Service;

use App\Models\Service;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class ServiceEditLayout extends Rows
{
    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): array
    {
        return [
            Input::make('service.name')
                ->type('text')
                ->title(__('Service name'))
                ->placeholder('Ex: Web dev')
                ->help('Specify a meaningful name that visitors can understand it.')
                ->maxlength(250)
                ->required(),

            TextArea::make('service.description')
                ->title('Description')
                ->rows(10)
                ->placeholder('Brief description for preview'),
        ];
    }
}
