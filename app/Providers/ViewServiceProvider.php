<?php

namespace App\Providers;

use App\Models\Section;
use Illuminate\Support\Facades;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
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
        Facades\View::composer('global.*', function (View $view) {
            $view->with('contact_us', Section::where(['name' => 'contact-us'])->first());
        });
    }
}
