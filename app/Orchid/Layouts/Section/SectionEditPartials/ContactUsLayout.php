<?php

namespace App\Orchid\Layouts\Section\SectionEditPartials;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Layouts\Rows;

class ContactUsLayout extends Rows
{
    /**
     * Used to create the title of a group of form elements.
     *
     * @var string|null
     */
    protected $title = "Extra Data";

    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): iterable
    {
        return [
            Input::make('section.extra_data.email')
                ->type('email')
                ->title('Email'),

            Input::make('section.extra_data.phone')
                ->type('tel')
                ->placeholder('Ex: (213) 558-66-95-67')
                ->title('Phone number'),

            Matrix::make('section.extra_data.socials')
                ->columns([
                    'Social media' => 'name',
                    'Link' => 'link'
                ]),
        ];
    }
}
