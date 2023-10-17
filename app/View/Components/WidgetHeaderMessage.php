<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WidgetHeaderMessage extends Component
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
        return view('components.widget-header-message', ['newMessages' => $this->getNewMessages()]);
    }


    protected function getNewMessages()
    {

        return [

            '1' => [
                'person'  => 'Maria Hudson',
                'avatar'  => 'assets/img/messages-1.jpg',
                'extract' => 'Velit asperiores et ducimus soluta repudiandae labore officia est ut...',
                'since'   => '4 hrs. ago',

            ],
            '2' => [
                'person'  => 'Anna Nelson',
                'avatar'  => 'assets/img/messages-2.jpg',
                'extract' => 'Velit asperiores et ducimus soluta repudiandae labore officia est ut...',
                'since'   => '6 hrs. ago',

            ],
            '3' => [
                'person'  => 'David Muldon',
                'avatar'  => 'assets/img/messages-3.jpg',
                'extract' => 'Velit asperiores et ducimus soluta repudiandae labore officia est ut...',
                'since'   => '8 hrs. ago',

            ],




        ];
    }
}
