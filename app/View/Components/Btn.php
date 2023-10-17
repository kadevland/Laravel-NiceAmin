<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Btn extends Component
{

    protected $defaultType  = 'button';
    protected $defaultColor = 'primary';


    /**
     * Create a new component instance.
     */
    public function __construct(
        public ?string $href = null,
        public ?string $type = null,
        public ?string $color = null,
        public ?string $style = null,
        public ?string $size = null,
        public ?string $icon = null,


    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.btn', ['classBtn' => $this->getClassBtn(), 'typeBtn' => $this->getTypeBtn()]);
    }

    protected function getClassBtn()
    {

        return \implode(' ', \array_filter([
            'btn',
            $this->getColorClass(),
            $this->isRounded() ? 'rounded-pill' : null,
            $this->getSizeClass(),

        ]));
    }

    protected function getColorClass(): string
    {
        $pattern = $this->isOutline() ? 'btn-outline-%s' : 'btn-%s';
        return \sprintf($pattern, $this->getColor());
    }

    protected function getSizeClass(): ?string
    {

        if ($this->isSmall()) {

            return 'btn-sm';
        }

        if ($this->isLarge()) {

            return 'btn-lg';
        }

        return null;
    }


    protected function getTypeBtn(): ?string
    {

        return $this->type ?? $this->defaultType;
    }

    protected function getColor(): string
    {

        $colors = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark', 'link'];

        $color = $this->color ? Str::lower($this->color) :  $this->defaultColor;

        return \in_array($color, $colors) ? $color : $this->defaultColor;
    }

    protected function isRounded(): bool
    {

        $style = !\is_null($this->style) ?  Str::lower($this->style) : null;
        return \in_array($style, ['rounded', 'round']);
    }

    protected function isOutline(): bool
    {

        $style = !\is_null($this->style) ?  Str::lower($this->style) : null;
        return \in_array($style, ['outline', 'line']);
    }

    protected function isSmall(): bool
    {

        $size = !\is_null($this->size) ?  Str::lower($this->size) : null;
        return \in_array($size, ['sm', 'small']);
    }

    protected function isLarge(): bool
    {
        $size = !\is_null($this->size) ?  Str::lower($this->size) : null;
        return \in_array($size, ['lg', 'large']);
    }
}
