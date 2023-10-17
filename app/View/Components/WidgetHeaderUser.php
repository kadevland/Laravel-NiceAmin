<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WidgetHeaderUser extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.widget-header-user', ['currentUser' => $this->getCurrentUser()]);
    }


    protected function getCurrentUser()
    {

        return [

            'avatar'   => 'assets/img/profile-img.jpg',
            'fullname' => 'Kevin Anderson',
            'shortname' => 'K. Anderson',
            'job'      => 'Web Designer',

        ];
    }
}
