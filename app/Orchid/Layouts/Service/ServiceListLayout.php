<?php

namespace App\Orchid\Layouts\Service;

use App\Models\Service;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Actions\DropDown;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class ServiceListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'services';

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
                ->render(fn (Service $service) => Link::make($service->name)
                    ->route('platform.systems.services.edit', $service)),

            TD::make('description', __('Description'))
                ->sort()
                ->cantHide()
                ->render(function (Service $service) {
                    return substr($service->description, 0, 50) . '...';
                }),

            TD::make(__('Actions'))
                ->align(TD::ALIGN_CENTER)
                ->width('100px')
                ->render(fn (Service $service) => DropDown::make()
                    ->icon('bs.three-dots-vertical')
                    ->list([

                        Link::make(__('Edit'))
                            ->route('platform.systems.services.edit', $service->id)
                            ->icon('bs.pencil'),

                        Button::make(__('Delete'))
                            ->icon('bs.trash3')
                            ->confirm(__('You can\'t revert this action. Are you sure you want to continue ?'))
                            ->method('remove', [
                                'id' => $service->id,
                            ]),
                    ])),
        ];
    }
}
