<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class IconsRouteServiceProvider extends ServiceProvider
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


        Route::middleware('web')->prefix('icons')->name('icons.')->group(function () {

            Route::get('bootstrap', function () {
                SEOMeta::setTitle('Icons Bootstrap');
                return view('icons.bootstrap');
            })->name('bootstrap');
            
            Route::get('boxicons', function () {
                SEOMeta::setTitle('Icons Boxicons');
                return view('icons.boxicons');
            })->name('boxicons');
            
            Route::get('remix', function () {
                SEOMeta::setTitle('Icons Remix');
                return view('icons.remix');
            })->name('remix');
        });
    }
}
