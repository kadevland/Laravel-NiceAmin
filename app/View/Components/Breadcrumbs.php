<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Breadcrumbs extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string|array|null $parts = null,
        public ?string $position = null,
        public ?string $divider = null,

    ) {
        $this->parts = Arr::wrap($this->parts);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.breadcrumbs');
    }

    public function navClass()
    {

        if (empty($this->position)) {

            return;
        }

        $position = Str::lower($this->position);

        if (\in_array($position, ['centered', 'center', 'middle'])) {

            return 'd-flex justify-content-center';
        }

        if (\in_array($position, ['right', 'end'])) {

            return 'd-flex justify-content-end';
        }

        return;
    }
}
