<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $thumbnail,
        public string $title,
        public string $caption,
        public string $style,
        public string $href,
    ) {
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
