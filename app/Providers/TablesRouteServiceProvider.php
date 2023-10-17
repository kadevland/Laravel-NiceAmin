<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class TablesRouteServiceProvider extends ServiceProvider
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


        Route::middleware('web')->prefix('tables')->name('tables.')->group(function () {


            Route::get('general', function () {
                SEOMeta::setTitle('General Tables');
                return view('tables.general');
            })->name('general');


            Route::get('data', function () {
                SEOMeta::setTitle('Data Tables');

                return view('tables.data');
            })->name('data');
        });
    }
}
