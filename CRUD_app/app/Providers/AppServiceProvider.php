<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use App\View\Components\data_output;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
       // URL::forceScheme(scheme:'https'); <-- Only Enable, when in production mode
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
       //Blade::component('data-output', data_output::class);
    }
}
