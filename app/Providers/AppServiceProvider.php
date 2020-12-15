<?php

namespace App\Providers;

use App\Http\View\Composers\Notification;
use App\Http\View\Composers\RdvAccepted;
use App\Proposition;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


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
        $this->app->bind('App\Services\Contracts\AdminInterface', 'App\Services\AdminService');

        View::composer(['professionnels.*', 'layouts.front.professionnel.*'], RdvAccepted::class);
        View::composer(['demandeurs.*', 'layouts.front.demandeurs.*'], Notification::class);
    }
}
