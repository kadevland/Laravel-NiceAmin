<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CardImage extends Component
{

    protected $except = ['position'];

    /**
     * Create a new component instance.
     */
    public function __construct(
        public string  $src,
        public ?string $alt = null,
        public ?string $position = null,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {

        $componentImage = match ($this->position) {

            'left'       => 'card-image-left',
            'right'      => 'card-image-right',
            'top'        => 'card-image-top',
            'bottom'     => 'card-image-bottom',
            'background' => 'card-image-background',
            default      => 'card-image-left'
        };



        return view('components.card-image', ['componentImage' => $componentImage]);
    }
}
