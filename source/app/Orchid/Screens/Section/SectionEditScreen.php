<?php

namespace App\Orchid\Screens\Section;

use App\Enums\SectionType;
use App\Http\Requests\SectionRequest;
use App\Models\Section;
use App\Orchid\Layouts\Section\SectionEditPartials\CommonLayout;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Toast;

class SectionEditScreen extends Screen
{
    public $section;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(Section $section): iterable
    {
        return [
            'section' => $section
        ];
    }

    /**
     * The name of the screen displayed in the header.
     *
     * @return string|null
     */
    public function name(): ?string
    {
        return 'Edit Section';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return "Update {$this->section->name} section info.";
    }

    /**
     * The screen's action buttons.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make('Save')
            ->icon('bs.check-circle')
            ->method('save')
        ];
    }

    /**
     * The screen's layout elements.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): iterable
    {
        if(empty(SectionType::tryFrom($this->section->name)->layout())) {
            return [CommonLayout::class];
        }

        return [
            CommonLayout::class,
            SectionType::tryFrom($this->section->name)->layout()
        ];
    }

    public function save(SectionRequest $request, Section $section)
    {
        $section->fill($request->input('section'))->save();

        Toast::success(__('Section was updated'));

        return to_route('platform.systems.sections');
    }
}
