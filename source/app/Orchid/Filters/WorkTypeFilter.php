<?php

namespace App\Orchid\Filters;

use App\Enums\WorkType;
use Illuminate\Database\Eloquent\Builder;
use Orchid\Filters\Filter;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Select;

class WorkTypeFilter extends Filter
{
    /**
     * The displayable name of the filter.
     *
     * @return string
     */
    public function name(): string
    {
        return 'Work type';
    }

    /**
     * The array of matched parameters.
     *
     * @return array|null
     */
    public function parameters(): ?array
    {
        return ['type'];
    }

    /**
     * Apply to a given Eloquent query builder.
     *
     * @param Builder $builder
     *
     * @return Builder
     */
    public function run(Builder $builder): Builder
    {
        return $builder->where(
            'type', $this->request->get('type')
        );
    }

    /**
     * Get the display fields.
     *
     * @return Field[]
     */
    public function display(): iterable
    {
        return [
            Select::make('type')
                ->options(WorkType::getCasesAssoc())
                ->empty()
                ->value($this->request->get('type'))
                ->title(__('Work Types')),
        ];
    }

    public function value(): string
    {
        return $this->name() . ': ' . WorkType::tryFrom($this->request->get('type'))->label();
    }
}
