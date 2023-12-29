<?php

namespace App\Providers;

use App\Services\OpenServiceWeatherMapService;
use App\Services\WeatherReportServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(WeatherReportServiceInterface::class, function($app){
            return new OpenServiceWeatherMapService(config('services.openweathermap.api_key'));
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
