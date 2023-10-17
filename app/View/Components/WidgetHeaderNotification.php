<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WidgetHeaderNotification extends Component
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
        return view('components.widget-header-notification', ['notifications' => $this->getNotifications()]);
    }


    protected function getNotifications()
    {

        return [

            '1' => [
                'icon'    => 'bi-exclamation-circle',
                'color'   => 'warning',
                'title'   => 'Lorem Ipsum',
                'extract' => 'Quae dolorem earum veritatis oditseno',
                'since'   => '30 min. ago',
            ],
            '2' => [
                'icon'    => 'bi-x-circle',
                'color'   => 'danger',
                'title'   => 'Atque rerum nesciunt',
                'extract' => 'Quae dolorem earum veritatis oditseno',
                'since'   => '1 hr. ago',
            ],
            '3' => [
                'icon'    => 'bi-check-circle',
                'color'   => 'success',
                'title'   => 'Sit rerum fuga',
                'extract' => 'Quae dolorem earum veritatis oditseno',
                'since'   => '2 hrs. ago',
            ],
            '4' => [
                'icon'    => 'bi-info-circle',
                'color'   => 'primary',
                'title'   => 'Dicta reprehenderit',
                'extract' => 'Quae dolorem earum veritatis oditseno',
                'since'   => '4 hrs. ago',
            ],

        ];
    }
}
