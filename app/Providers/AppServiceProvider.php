<?php

namespace App\Providers;

use App\Models\OwnedVenue;
use App\Observers\OwnedVenueObserver;
use Illuminate\Support\ServiceProvider;

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
        OwnedVenue::observe(OwnedVenueObserver::class);
    }
}
