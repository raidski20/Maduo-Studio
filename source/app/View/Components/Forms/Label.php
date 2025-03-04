<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Label extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $label,
        public string $field,
        public bool $required
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.label');
    }
}
