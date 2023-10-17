<?php

namespace App\View\Components\Site;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use Illuminate\View\Component;

class Sidebar extends Component
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
        return view('components.site.sidebar', ['sidebarMenu' => $this->openActiveSubmenu($this->getSidebarMenu())]);
    }

    protected function getSidebarMenu(): array
    {
        $routeName = Route::currentRouteName();

        return [

            'Dashboard'     => [
                'label'     => 'Dashboard',
                'icon'      => 'bi-grid',
                'href'      => route('index'),
                'isOpen'    => $routeName == 'index',                
            ],

            'Components'      => $this->getComponentsMenu($routeName),
            'Forms'           => $this->getFormsMenu($routeName),
            'Tables'          => $this->getTablesMenu($routeName),
            'Charts'          => $this->getChartsMenu($routeName),
            'Icons'           => $this->getIconsMenu($routeName),
            'Pages'           => [
                'label'       => 'Pages',
                'isHeading'   => true,
            ],
            'Profile'     => [
                'label'     => 'Profile',
                'icon'      => 'bi-person',
                'href'      => route('users.profile'),
                'isOpen'    => $routeName == 'users.profile',
            ],
            'F.A.Q'     => [
                'label'     => 'F.A.Q',
                'icon'      => 'bi-question-circle',
                'href'      => route('pages.faq'),
                'isOpen'    => $routeName == 'pages.faq',
            ],
            'Contact'     => [
                'label'     => 'Contact',
                'icon'      => 'bi-envelope',
                'href'      => route('pages.contact'),
                'isOpen'    => $routeName == 'pages.contact',
            ],
            'Register'     => [
                'label'     => 'Register',
                'icon'      => 'bi-card-list',
                'href'      => route('pages.register'),
                'isOpen'    => $routeName == 'pages.register',
            ],
            'Login'     => [
                'label'     => 'Login',
                'icon'      => 'bi-box-arrow-in-right',
                'href'      => route('pages.login'),
                'isOpen'    => $routeName == 'pages.login',
            ],
            'Error 404'     => [
                'label'     => 'Error 404',
                'icon'      => 'bi-dash-circle',
                'href'      => route('pages.error-404'),
                'isOpen'    => $routeName == 'pages.error-404',
            ],
            'Blank'     => [
                'label'     => 'Blank',
                'icon'      => 'bi-file-earmark',
                'href'      => route('pages.blank'),
                'isOpen'    => $routeName == 'pages.blank',
            ],
            'Blank'     => [
                'label'     => 'Licence',
                'icon'      => 'bi-award',
                'href'      => 'https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/',
                'isOpen'    =>  \false,
            ],

        ];
    }

    protected function getComponentsMenu(string $routeName): array
    {


        return [
            'label'     => 'Components',
            'icon'      => 'bi-menu-button-wide',
            'href'      => '#',
            'bs-target' => '#components-nav',
            'isOpen'    => \false,
            'submenu'   => [

                [
                    'label'     => 'Alerts',
                    'href'      => route('theme-components.alerts'),
                    'isActive'  => $routeName == 'theme-components.alerts',
                ],
                [
                    'label'     => 'Accordion',
                    'href'      => route('theme-components.accordion'),
                    'isActive'  => $routeName == 'theme-components.accordion',
                ],
                [
                    'label'     => 'Badges',
                    'href'      => route('theme-components.badges'),
                    'isActive'  => $routeName == 'theme-components.badges',
                ],
                [
                    'label'     => 'Breadcrumbs',
                    'href'      => route('theme-components.breadcrumbs'),
                    'isActive'  => $routeName == 'theme-components.breadcrumbs',
                ],
                [
                    'label'     => 'Buttons',
                    'href'      => route('theme-components.buttons'),
                    'isActive'  => $routeName == 'theme-components.buttons',
                ],
                [
                    'label'     => 'Cards',
                    'href'      => route('theme-components.cards'),
                    'isActive'  => $routeName == 'theme-components.cards',
                ],
                [
                    'label'     => 'Carousel',
                    'href'      => route('theme-components.carousel'),
                    'isActive'  => $routeName == 'theme-components.carousel',
                ],
                [
                    'label'     => 'List group',
                    'href'      => route('theme-components.list-group'),
                    'isActive'  => $routeName == 'theme-components.list-group',
                ],
                [
                    'label'     => 'Modal',
                    'href'      => route('theme-components.modal'),
                    'isActive'  => $routeName == 'theme-components.modal',
                ],
                [
                    'label'     => 'Tabs',
                    'href'      => route('theme-components.tabs'),
                    'isActive'  => $routeName == 'theme-components.tabs',
                ],
                [
                    'label'     => 'Pagination',
                    'href'      => route('theme-components.pagination'),
                    'isActive'  => $routeName == 'theme-components.pagination',
                ],
                [
                    'label'     => 'Progress',
                    'href'      => route('theme-components.progress'),
                    'isActive'  => $routeName == 'theme-components.progress',
                ],
                [
                    'label'     => 'Spinners',
                    'href'      => route('theme-components.spinners'),
                    'isActive'  => $routeName == 'theme-components.spinners',
                ],
                [
                    'label'     => 'Tooltips',
                    'href'      => route('theme-components.tooltips'),
                    'isActive'  => $routeName == 'theme-components.tooltips',
                ],

            ],
        ];
    }

    protected function getFormsMenu(string $routeName): array
    {
        return [


            'label'     => 'Forms',
            'icon'      => 'bi-journal-text',
            'href'      => '#',
            'bs-target' => '#forms-nav',
            'isOpen'    => \false,
            'submenu'   => [

                [
                    'label'     => 'Form Elements',
                    'href'      => route('forms.elements'),
                    'isActive'  => $routeName == 'forms.elements',
                ],
                [
                    'label'     => 'Form Layouts',
                    'href'      => route('forms.layouts'),
                    'isActive'  => $routeName == 'forms.layouts',
                ],
                [
                    'label'     => 'Form Editors',
                    'href'      => route('forms.editors'),
                    'isActive'  => $routeName == 'forms.editors',
                ],
                [
                    'label'     => 'Form Validation',
                    'href'      => route('forms.validation'),
                    'isActive'  => $routeName == 'forms.validation',
                ],
            ]
        ];
    }
    protected function getTablesMenu(string $routeName): array
    {
        return [


            'label'     => 'Tables',
            'icon'      => 'bi-layout-text-window-reverse',
            'href'      => '#',
            'bs-target' => '#tables-nav',
            'isOpen'    => \false,
            'submenu'   => [

                [
                    'label'     => 'General Tables',
                    'href'      => route('tables.general'),
                    'isActive'  => $routeName == 'tables.general',
                ],
                [
                    'label'     => 'Data Tables',
                    'href'      => route('tables.data'),
                    'isActive'  => $routeName == 'tables.data',
                ],
            ]
        ];
    }
    protected function getChartsMenu(string $routeName): array
    {
        return [


            'label'     => 'Charts',
            'icon'      => 'bi-bar-chart',
            'href'      => '#',
            'bs-target' => '#charts-nav',
            'isOpen'    => \false,
            'submenu'   => [

                [
                    'label'     => 'Chart.js',
                    'href'      => route('charts.chartjs'),
                    'isActive'  => $routeName == 'charts.chartjs',
                ],
                [
                    'label'     => 'ApexCharts',
                    'href'      => route('charts.apexcharts'),
                    'isActive'  => $routeName == 'charts.apexcharts',
                ],
                [
                    'label'     => 'ECharts',
                    'href'      => route('charts.echarts'),
                    'isActive'  => $routeName == 'charts.echarts',
                ],
            ]
        ];
    }
    protected function getIconsMenu(string $routeName): array
    {
        return [


            'label'     => 'Icons',
            'icon'      => 'bi-gem',
            'href'      => '#',
            'bs-target' => '#icons-nav',
            'isOpen'    => \false,
            'submenu'   => [

                [
                    'label'     => 'Bootstrap Icons',
                    'href'      => route('icons.bootstrap'),
                    'isActive'  => $routeName == 'icons.bootstrap',
                ],
                [
                    'label'     => 'Remix Icons',
                    'href'      => route('icons.remix'),
                    'isActive'  => $routeName == 'icons.remix',
                ],
                [
                    'label'     => 'Boxicons',
                    'href'      => route('icons.boxicons'),
                    'isActive'  => $routeName == 'icons.boxicons',
                ],
            ]
        ];
    }

    protected function openActiveSubmenu(array $sidebarMenu): array
    {

        return \collect($sidebarMenu)->map(function ($menu) {


            if (empty($menu['submenu'])) {

                return $menu;
            }

            if (count(\array_filter($menu['submenu'], fn ($submenu) => $submenu['isActive']))) {

                $menu['isOpen'] = true;
            }

            return $menu;
        })->toArray();
    }
}
