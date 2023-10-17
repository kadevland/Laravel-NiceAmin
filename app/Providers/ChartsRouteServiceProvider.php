<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class ChartsRouteServiceProvider extends ServiceProvider
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


        Route::middleware('web')->prefix('charts')->name('charts.')->group(function () {
            Route::get('/apexcharts', function () {
                SEOMeta::setTitle('ApexCharts');
                return view('charts.apexcharts');
            })->name('apexcharts');

            Route::get('chartjs', function () {
                SEOMeta::setTitle('Chartjs');
                return view('charts.chartjs');
            })->name('chartjs');

            Route::get('echarts', function () {
                SEOMeta::setTitle('Echarts');
                return view('charts.echarts');
            })->name('echarts');
        });
    }
}
