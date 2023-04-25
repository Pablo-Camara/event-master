<?php

namespace App\Providers;

use App\View\Composers\HomeComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class HomeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('home', HomeComposer::class);
    }
}
