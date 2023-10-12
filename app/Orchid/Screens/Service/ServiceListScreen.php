<?php

namespace App\Orchid\Screens\Service;

use App\Models\Service;
use App\Orchid\Layouts\Service\ServiceListLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class ServiceListScreen extends Screen
{
    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(): iterable
    {
        return [
            'services' => Service::filters()->defaultSort('id')->paginate()
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Services List';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return 'A list of all services provided by Maduo-Studio.';
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Link::make('Add Service')
                ->icon('plus')
                ->route('platform.systems.services.create')
                ->canSee(true)
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
            ServiceListLayout::class,
        ];
    }

    public function remove(Request $request)
    {
        Service::findOrFail($request->get('id'))->delete();

        Toast::success(__('Service was removed'));
    }
}
