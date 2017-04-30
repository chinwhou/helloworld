<?php

namespace Max\HelloWorld;

use Illuminate\Support\ServiceProvider;

class HelloWorldServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        echo 'aaaa';
        //
        echo __DIR__;
        include(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views',"helloworld");
        $this->app->make(HelloWorldController::class);
        echo 'bbb';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
