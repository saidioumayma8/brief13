<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator; // Import the correct namespace
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // Use Bootstrap 5 for pagination
        Paginator::useBootstrapFive();
    }
}
