<?php

namespace App\Orchid\Layouts\Section\SectionEditPartials;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\TextArea;
use Orchid\Screen\Layouts\Rows;

class AboutUsLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title = "Extra Information";

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            Input::make('section.extra_data.title')
                ->type('text')
                ->title(__('Extra title'))
                ->placeholder('Ex: What we do?')
                ->maxlength(250),

            TextArea::make('section.extra_data.description')
                ->title('Extra description')
                ->rows(10)
                ->placeholder('Extra description for preview'),
        ];
    }
}
