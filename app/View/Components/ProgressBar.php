<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ProgressBar extends Component
{

    protected $defaultValueMin = 0;
    protected $defaultValueMax = 100;

    /**
     * Create a new component instance.
     */
    public function __construct(
        public int|float $value,
        public ?string $color = null,
        public bool $striped = \false,
        public bool $animated = \false,
        public bool $label    = \false,
        public ?string $size  = null,
        public int|float|null $max = null,
        public int|float|null $min = null,

    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.progress-bar');
    }

    public function getClass(): array
    {
        $cssClass = ['progress-bar'];

        if ($color = $this->getColor()) {

            $cssClass[] = \sprintf('bg-%s', $color);
        }

        if ($this->striped) {

            $cssClass[] = 'progress-bar-striped';
        }

        if ($this->animated) {

            $cssClass[] = 'progress-bar-animated';
        }


        return $cssClass;
    }

    public function getStyle(): string
    {

        return \sprintf('width:%s%%', $this->getRatioValue());
    }

    public function getStyleWrapper(): string
    {

        if (!\is_null($this->size)) {


            $size = match ($this->size) {

                'sm'   => '10px',
                'lg'   => '22px',
                'xlg'  => '28px',
                default => $this->size
            };

            return \sprintf('height:%s', $size);
        }

        return '';
    }

    public function getValueMin(): int|float
    {

        return $this->min ?? $this->defaultValueMin;
    }

    public function getValueMax(): int|float
    {

        return $this->max ?? $this->defaultValueMax;
    }

    public function getRatioValue()
    {

        $valueMin = $this->getValueMin();
        $valueMax = $this->getValueMax();

        $range = \abs($valueMax - $valueMin);

        if ($range == 0) {

            return 100;
        }

        return $range == 0 ? 100 : round(((abs($this->value) / $range) * 100), 2, PHP_ROUND_HALF_UP);
    }

    public function getColor(): ?string
    {

        $colors = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark'];

        $color = $this->color ? Str::lower($this->color) :  null;

        return \in_array($color, $colors) ? $color : null;
    }
}
