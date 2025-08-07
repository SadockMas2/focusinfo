<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Illuminate\Support\ServiceProvider;

class FilamentServiceProvider extends ServiceProvider
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
        Filament::serving(function () {
            $settings = \App\Models\Setting::first(); // ou cache('settings') si tu les caches

            // if ($settings) {
            //     // Filament::brandLogo(asset('storage/' . $settings->logo));
            //     Filament::brandName($settings->site_name);
            //     Filament::brandIcon(asset('storage/' . $settings->favicon));
            // }
        });
    }
}
