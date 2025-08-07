<?php

namespace App\Providers\Filament;

use Filament\Panel;
use Illuminate\Support\Facades\DB;
use Filament\PanelProvider;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        $settings = DB::table('settings')->first();

        return $panel
            ->brandName($settings?->site_name ?? 'Mon Admin')
            ->brandLogo(asset('storage/' . $settings?->logo ?? 'default-logo.png'))
            ->sidebarCollapsibleOnDesktop()
            ->id('admin')
            ->path('admin');
    }
}
