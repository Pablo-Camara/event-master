<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FrontendTranslationsViewComposerServiceProvider extends ServiceProvider
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
        view()->composer('layouts.app', function ($view) {
            $translations = json_decode(
                file_get_contents(
                    resource_path("lang/" . app()->getLocale() . ".json")
                ),
                true
            );

            $view->with('translations', $translations);
        });
    }
}
