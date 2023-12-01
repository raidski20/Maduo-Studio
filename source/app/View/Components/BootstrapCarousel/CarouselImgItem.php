<?php

namespace app\View\Components\BootstrapCarousel;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class carouselImgItem extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $imgUrl,
        public bool $isActive
    ){}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bootstrap-carousel.carousel-img-item');
    }
}
