<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Icon extends Component
{

    protected $except = ['name', 'color'];
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public ?string $color = null,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.icon', ['icon' => trim($this->iconClass() . ' ' . $this->getColorClass())]);
    }

    private function iconClass()
    {

        $classNames = \explode(' ', $this->name);

        if ($this->isBootstrapicons($classNames)) {


            return $this->addPrefixClass('bi', $classNames);
        }

        if ($this->isRemixicons($classNames)) {

            return \implode(' ', $classNames);
        }


        if ($this->isBoxicons($classNames)) {


            return $this->addPrefixClass('bx', $classNames);
        }

        return \implode(' ', $classNames);
    }

    protected function isBootstrapicons(array $classNames)
    {

        return  count(\array_filter($classNames, function ($className) {
            return str_starts_with($className, 'bi-');
        }));
    }

    protected function isRemixicons(array $classNames)
    {

        return  count(\array_filter($classNames, function ($className) {
            return str_starts_with($className, 'bi-');
        }));
    }

    protected function isBoxicons(array $classNames)
    {

        return  count(\array_filter($classNames, function ($className) {
            return str_starts_with($className, 'bxl-') || str_starts_with($className, 'bxs-') || str_starts_with($className, 'bx-');
        }));
    }

    protected function addPrefixClass(string $prefix, array $classNames): string
    {
        return \implode(' ', \array_unique([$prefix, ...$classNames]));
    }

    protected function getColorClass(): string
    {

        if (empty($this->color)) {

            return '';
        }

        $colors = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark', 'link'];

        $color = Str::lower($this->color);

        return \in_array($color, $colors) ? 'text-' . $color : '';
    }
}
