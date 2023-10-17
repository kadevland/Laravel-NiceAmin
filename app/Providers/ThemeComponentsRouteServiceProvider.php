<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class ThemeComponentsRouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        parent::boot();


        Route::prefix('theme-components')->name('theme-components.')->group(function () {

            Route::get('/alerts', function () {
                SEOMeta::setTitle('Alerts');
                return view('theme-components.alerts');
            })->name('alerts');

            Route::get('/accordion', function () {
                SEOMeta::setTitle('Accordion');
                return view('theme-components.accordion');
            })->name('accordion');


            Route::get('/badges', function () {
                SEOMeta::setTitle('Badges');
                return view('theme-components.badges');
            })->name('badges');

            Route::get('/breadcrumbs', function () {
                SEOMeta::setTitle('Breadcrumbs');
                return view('theme-components.breadcrumbs');
            })->name('breadcrumbs');

            Route::get('/buttons', function () {
                SEOMeta::setTitle('Buttons');
                return view('theme-components.buttons');
            })->name('buttons');

            Route::get('/cards', function () {
                SEOMeta::setTitle('Cards');
                return view('theme-components.cards');
            })->name('cards');

            Route::get('/carousel', function () {
                SEOMeta::setTitle('Carousel');
                return view('theme-components.carousel');
            })->name('carousel');

            Route::get('/list-group', function () {
                SEOMeta::setTitle('List Group');
                return view('theme-components.list-group');
            })->name('list-group');

            Route::get('/modal', function () {
                SEOMeta::setTitle('Modal');
                return view('theme-components.modal');
            })->name('modal');

            Route::get('/tabs', function () {
                SEOMeta::setTitle('Tabs');
                return view('theme-components.tabs');
            })->name('tabs');

            Route::get('/pagination', function () {
                SEOMeta::setTitle('Pagination');
                return view('theme-components.pagination');
            })->name('pagination');

            Route::get('/progress', function () {
                SEOMeta::setTitle('Progress');
                return view('theme-components.progress');
            })->name('progress');

            Route::get('/spinners', function () {
                SEOMeta::setTitle('Spinners');
                return view('theme-components.spinners');
            })->name('spinners');

            Route::get('/tooltips', function () {
                SEOMeta::setTitle('Tooltips');
                return view('theme-components.tooltips');
            })->name('tooltips');
        });
    }
}
