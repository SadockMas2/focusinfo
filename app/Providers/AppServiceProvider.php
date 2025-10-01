<?php

namespace App\Providers;

use App\Models\Benevole;
use App\Models\Category;
use App\Models\Domain;
use App\Models\Setting;
use App\Models\Value;
use App\Models\Partner;
use App\Models\Counter;
use App\Models\Faq;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
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
        if (Schema::hasTable('settings')) {
            $settings = Setting::first();
            $domains = Domain::get();
            $partners = Partner::get();
            $counters = Counter::get();
            $faqs = Faq::get();
            $values = Value::get();
            $categories = Category::get();
            $benevoles = Benevole::where('status', 'active')->paginate(6);
            View::share([
                'benevoles' => $benevoles,
                'categories'=>$categories,
                'settings' => $settings,
                'domains' => $domains,
                'partners' => $partners,
                'faqs' => $faqs,
                'values' => $values,
                'counters' => $counters,
            ]);
        }
    }
}
