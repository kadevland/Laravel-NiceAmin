<?php

namespace App\View\Components;

use Closure;
use Illuminate\Support\Str;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Spinner extends Component
{

    protected $defaultText  = 'Loading...';
    protected $defaultColor = '';
    protected $typeBorder   = 'border';
    protected $typeGrowing  = 'grow';


    protected $except = ['text'];

    /**
     * Create a new component instance.
     */
    public function __construct(

        public ?string $color = null,
        public ?string $type  = null,
        public ?string $size  = null,
        public bool    $small = \false,
        public ?string $text  = null,

    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view(
            'components.spinner',
            [

                'classSpinner' => $this->getClassSpinner(),
                'text' => $this->text ?? $this->defaultText,
                'styleSize' => $this->getStyleSize(),
            ]

        );
    }


    protected function getClassSpinner(): string
    {
        $type   = $this->isGrowing() ? $this->typeGrowing : $this->typeBorder;
        $color  = $this->getColor();

        $listClassSpinner = [
            Str::replace(':type', $type, 'spinner-:type'),
            $this->small ? Str::replace(':type', $type, 'spinner-:type-sm') : '',
            !empty($color) ?  Str::replace(':color', $color, 'text-:color') : '',
        ];

        return trim(\implode(' ', $listClassSpinner));
    }

    protected function getStyleSize(): string
    {

        return !empty($this->size) ?  Str::replace(':size', $this->size, 'width: :size; height: :size;') : '';
    }


    protected function getColor(): string
    {

        $colors = ['primary', 'secondary', 'success', 'danger', 'warning', 'info', 'light', 'dark', 'link'];

        $color = $this->color ? Str::lower($this->color) :  $this->defaultColor;

        return \in_array($color, $colors) ? $color : $this->defaultColor;
    }

    protected function isGrowing(): bool
    {

        $type = !\is_null($this->type) ?  Str::lower($this->type) : null;
        return \in_array($type, ['grow', 'growind']);
    }
}
