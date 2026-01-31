<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (str_contains(config('app.url'), 'https://')) {
            URL::forceScheme('https');
        }

        // Auto-detect locale based on URL prefix for 404 pages and early booting
        if (request()->is('en') || request()->is('en/*')) {
            app()->setLocale('en');
        } else {
            app()->setLocale('lv');
        }
    }
}
