<?php

namespace App\Orchid\Layouts\Section\SectionEditPartials;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class CommonLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title = "Basic Information";

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): array
    {
        return [
            Input::make('section.title')
                ->type('text')
                ->title(__('Section title'))
                ->placeholder('Ex: Web dev')
                ->maxlength(250),

            TextArea::make('section.description')
                ->title('Description')
                ->rows(10)
                ->placeholder('Description for preview'),
        ];
    }
}
