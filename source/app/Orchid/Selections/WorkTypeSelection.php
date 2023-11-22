<?php

namespace App\Orchid\Selections;

use App\Orchid\Filters\WorkTypeFilter;
use Orchid\Filters\Filter;
use Orchid\Screen\Layouts\Selection;

class WorkTypeSelection extends Selection
{
    /**
     * @return Filter[]
     */
    public function filters(): iterable
    {
        return [
            WorkTypeFilter::class
        ];
    }
}
