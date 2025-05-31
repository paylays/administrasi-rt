<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
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
        view()->composer('*', function ($view) {
            if (Auth::check()) {
                $bgColors = ['bg-primary', 'bg-info', 'bg-success', 'bg-warning', 'bg-danger'];
                if (!Session::has('userAvatarBg')) {
                    Session::put('userAvatarBg', $bgColors[array_rand($bgColors)]);
                }
            }
        });

        Carbon::setLocale('id');
    }
}
