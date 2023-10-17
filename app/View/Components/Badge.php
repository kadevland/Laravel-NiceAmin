<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Badge extends Component
{

    protected $defaultColor = 'primary';


    protected $patternClassDefault = 'badge bg-:color';

    protected $patternClassPill = 'badge rounded-pill bg-:color';

    protected $patternClassBorder = 'badge border-secondary border-1 text-:color';

    protected $classTextDark = 'text-dark';
    
    protected $classTextDarkAlt = 'text-black-50';

    /**
     * Create a new component instance.
     */
    public function __construct(

        public ?string $color = null,
        public ?string $style = null,
        public ?string $icon = null
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.badge', ['classBadge' => $this->getClassBadge()]);
    }

    protected function getClassBadge(): string
    {

        return Str::replace(':color', $this->getColor(), $this->getPatternClass() . ' ' . $this->getClassTextDark());
    }


    protected function getPatternClass(): string
    {

        if ($this->isPill()) {

            return $this->patternClassPill;
        }

        if ($this->isBorder()) {

            return $this->patternClassBorder;
        }

        return   $this->patternClassDefault;
    }



    protected function getColor(): string
    {

        $colors = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];

        $color = $this->color ? Str::lower($this->color) :  $this->defaultColor;

        return \in_array($color, $colors) ? $color : $this->defaultColor;
    }

    protected function isPill(): bool
    {

        $style = !\is_null($this->style) ?  Str::lower($this->style) : null;
        return \in_array($style, ['pill', 'rounded', 'round']);
    }

    protected function isBorder(): bool
    {

        $style = !\is_null($this->style) ?  Str::lower($this->style) : null;
        return \in_array($style, ['border']);
    }



    protected function getClassTextDark(): string
    {

        $color = $this->getColor();

        if ($this->isBorder()) {
            if (\in_array($color, ['light', 'dark'])) {


                return $color == 'light' ? $this->classTextDarkAlt : $this->classTextDark;
            }

            return '';
        }

        if (\in_array($color, ['warning', 'info', 'light'])) {
            return $this->classTextDark;
        }

        return '';
    }
}
