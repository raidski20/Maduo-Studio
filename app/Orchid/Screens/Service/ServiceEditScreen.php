<?php

namespace App\Orchid\Screens\Service;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Orchid\Layouts\Service\ServiceEditLayout;
use Illuminate\Http\Request;
use Orchid\Platform\Models\User;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class ServiceEditScreen extends Screen
{
    public $service;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Service $service): array
    {
        return [
            'service' => $service
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return $this->service->exists ? 'Edit service' : 'Create a new service';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return $this->service->exists ? 'Edit service details' : '';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Save changes'))
                ->icon('bs.check-circle')
                ->canSee($this->service->exists)
                ->method('update'),

            Button::make(__('Create post'))
                ->icon('bs.plus-circle')
                ->canSee(!$this->service->exists)
                ->method('create'),
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        return [
            ServiceEditLayout::class
        ];
    }

    public function create(ServiceRequest $request)
    {
        $service = Service::create($request->validated()['service']);

        Toast::success(__('Service was created'));

        return to_route('platform.systems.services');
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $service->fill($request->validated()['service'])->save();

        Toast::success(__('Service was updated'));

        return to_route('platform.systems.services');
    }
}
