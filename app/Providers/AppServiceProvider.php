<?php

namespace App\Providers;

use App\Services\NewsFetcherPool;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //test featured
        $this->app->singleton(NewsFetcherPool::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         Schema::defaultStringLength(191);
    }
}
