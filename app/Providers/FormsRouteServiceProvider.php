<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class FormsRouteServiceProvider extends ServiceProvider
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




        Route::middleware('web')->prefix('forms')->name('forms.')->group(function () {


            Route::get('elements', function () {
                SEOMeta::setTitle('Form Elements');
                return view('forms.elements');
            })->name('elements');


            Route::get('layouts', function () {
                SEOMeta::setTitle('Form Layouts');
                return view('forms.layouts');
            })->name('layouts');


            Route::get('editors', function () {
                SEOMeta::setTitle('Form Editors');
                return view('forms.editors');
            })->name('editors');


            Route::get('validation', function () {
                SEOMeta::setTitle('Form Validation');
                return view('forms.validation');
            })->name('validation');
        });
    }
}
