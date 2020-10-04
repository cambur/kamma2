<?php

namespace App\Providers;

use App\Models\TellAFriend;
use App\Observers\TellAFriendObserver;
use Illuminate\Support\ServiceProvider;

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
        TellAFriend::observe(TellAFriendObserver::class);
    }
}
