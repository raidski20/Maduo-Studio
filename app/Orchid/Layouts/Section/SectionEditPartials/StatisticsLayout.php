<?php

namespace App\Orchid\Layouts\Section\SectionEditPartials;

use Orchid\Screen\Field;
use Orchid\Screen\Fields\Matrix;
use Orchid\Screen\Layouts\Rows;

class StatisticsLayout extends Rows
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
            Matrix::make('section.extra_data.entities')
                ->columns([
                    'Statistic' => 'name',
                    'Number' => 'number'
                ])

        ];
    }
}
