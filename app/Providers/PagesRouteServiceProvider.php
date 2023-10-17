<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class PagesRouteServiceProvider extends ServiceProvider
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

        Route::middleware('web')->get('/users/profile', function () {
            SEOMeta::setTitle('Home');
            return view('users.profile');
        })->name('users.profile');

        Route::middleware('web')->prefix('pages')->name('pages.')->group(function () {


            Route::get('faq', function () {
                SEOMeta::setTitle('Frequently Asked Questions');
                return view('pages.faq');
            })->name('faq');

            Route::get('contact', function () {
                SEOMeta::setTitle('Contact');
                return view('pages.contact');
            })->name('contact');

            Route::get('register', function () {
                SEOMeta::setTitle('Register');
                return view('pages.register');
            })->name('register');

            Route::get('login', function () {
                SEOMeta::setTitle('Login');
                return view('pages.login');
            })->name('login');

            Route::get('error-404', function () {
                SEOMeta::setTitle('Error 404');
                return view('pages.error-404');
            })->name('error-404');

            Route::get('blank', function () {
                SEOMeta::setTitle('Home');
                return view('pages.blank');
            })->name('blank');
        });
    }
}
