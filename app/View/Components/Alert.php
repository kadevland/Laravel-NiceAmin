<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Alert extends Component
{
    protected $defaultColor = 'primary';

    protected $patternClassDefault = 'alert alert-:color alert-dismissible fade show';

    protected $patternClassOutline = 'alert border-:color alert-dismissible fade show';

    protected $patternClassSolid = 'alert alert-:color bg-:color border-0 alert-dismissible fade show';

    protected $patternClassSolidTextLight = 'alert alert-:color bg-:color text-light border-0 alert-dismissible fade show';

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
        return view('components.alert', ['classAlert' => $this->getClassAlert()]);
    }


    protected function getClassAlert(): string
    {


        return Str::replace(':color', $this->getColor(), $this->getPatternClass());
    }


    protected function getPatternClass(): string
    {

        if ($this->isSolid()) {

            return  $this->hasTextLight() ? $this->patternClassSolidTextLight  : $this->patternClassSolid;
        }

        if ($this->isOutline()) {

            return $this->patternClassOutline;
        }

        return  $this->patternClassDefault;
    }


    protected function getColor(): string
    {

        $colors = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];

        $color = $this->color ? Str::lower($this->color) :  $this->defaultColor;

        return \in_array($color, $colors) ? $color : $this->defaultColor;
    }

    protected function isOutline(): bool
    {

        $style = !\is_null($this->style) ?  Str::lower($this->style) : null;
        return \in_array($style, ['outline', 'line']);
    }


    protected function isSolid(): bool
    {

        $style = !\is_null($this->style) ?  Str::lower($this->style) : null;
        return \in_array($style, ['solid', 'bg']);
    }

    protected function hasTextLight(): bool
    {

        $colors = ['primary', 'secondary', 'success', 'danger', 'dark'];


        return \in_array($this->getColor(), $colors);
    }
}
