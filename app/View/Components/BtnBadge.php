<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BtnBadge extends Component
{
    protected $defaultColor = 'primary';

    protected $except = ['color', 'number'];

    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $color = null,
        public int $number = 0,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.btn-badge', ['color' => $this->getColor(),'bgColor'=>$this->getBgColor(),'number' => $this->number]);
    }


    public function getColor(): string
    {

        $colors = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];

        $color = $this->color ? Str::lower($this->color) :  $this->defaultColor;

        return \in_array($color, $colors) ? $color : $this->defaultColor;
    }

    public function getBgColor(){

        $colors = ['light'];

        return \in_array($this->getColor(), $colors) ? 'secondary' : 'white';
    }
}
