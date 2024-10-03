<?php

namespace App\Providers;

use Carbon\Carbon;
use App\Models\Program;
use App\Models\SiteInformation;
use App\Models\SocialMedia;
use App\Models\Support;
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
        view()->composer('includes.footer', function ($view) {
            $data = [
                'programs' => Program::all(),
                'instagram' => SocialMedia::where('name', 'Instagram')->first(),
                'youtube' => SocialMedia::where('name', 'Youtube')->first(),
                'tiktok' => SocialMedia::where('name', 'Tiktok')->first(),
                'siteInfo' => SiteInformation::all()->first()
            ];

            $view->with('data', $data);
        });

        view()->composer('includes.navbar', function ($view) {
            $data = [
                'programs' => Program::all(),
                'instagram' => SocialMedia::where('name', 'Instagram')->first(),
                'youtube' => SocialMedia::where('name', 'Youtube')->first(),
                'tiktok' => SocialMedia::where('name', 'Tiktok')->first(),
                'siteInfo' => SiteInformation::all()->first()
            ];

            $view->with('data', $data);
        });

        view()->composer('layouts.front', function ($view) {
            $data = [
                'whatsapp' => SocialMedia::where('name', 'WhatsApp')->first(),
            ];

            $view->with('data', $data);
        });

        view()->composer('includes.support', function ($view) {
            $supports = Support::all();
            $view->with('supports', $supports);
        });

        // timezone
        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');
    }
}
