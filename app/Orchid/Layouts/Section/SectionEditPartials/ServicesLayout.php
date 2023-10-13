<?php

namespace App\Orchid\Layouts\Section\SectionEditPartials;

use App\Models\Service;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Layouts\Rows;

class ServicesLayout extends Rows
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
        $note =
            <<<MSG
                <ul>
                    <li>Choose top 4 services to be displayed in the home page.</li>
                    <li>Selected services must be in the correct order.</li>
                </ul>
            MSG;


        return [
            Relation::make('section.extra_data.services')
                ->fromModel(Service::class, 'name')
                ->multiple()
                ->title('Choose a service')
                ->help($note)

        ];
    }
}
