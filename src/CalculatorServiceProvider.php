<?php

namespace AR\Calculator;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . "/routes/web.php");

        $this->loadViewsFrom(__DIR__ . "/views", "calculator");

        $this->publishes([
            __DIR__.'/views/calculator.blade.php' => resource_path('views/calculator/calculator.blade.php')
        ]);

        $this->publishes([
            __DIR__.'/Controllers/CalculatorController.php' => app_path("Http/Controllers/CalculatorController.php")
        ]);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
