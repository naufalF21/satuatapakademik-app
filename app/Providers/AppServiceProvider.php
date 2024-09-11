<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Program;
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
        // view()->composer('includes.navbar', function ($view) {
        //     $categories = Category::all();
        //     $view->with('categories', $categories);
        // });

        view()->composer('includes.navbar', function ($view) {
            $programs = Program::all();
            $view->with('programs', $programs);
        });

        view()->composer('includes.support', function ($view) {
            $supports = Support::all();
            $view->with('supports', $supports);
        });
    }
}
