<?php

namespace Ridrog\Dummy;

// Commands
use Ridrog\Dummy\Console\Commands\ExampleCommand;
use Ridrog\Dummy\Console\Commands\TestCommand;

// Middleware
use Ridrog\Dummy\Http\Middleware\ExampleMiddleWare;

// Events
use Illuminate\Support\Facades\Event;
use Ridrog\Dummy\Events\DummyEvent;
use Ridrog\Dummy\Listeners\DummyListener;

use Illuminate\Support\ServiceProvider;

class DummyServiceProvider extends ServiceProvider
{
    /**
     * Name of the Package
     *
     * @var string
     */
    public $packageName = 'dummy';

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->defineCommands();

        $this->publishConfig();

        $this->publishAssets();

        $this->loadRoutes();

        $this->views();

        $this->migrations();

        $this->translations();

        $this->listenForEvents();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        /*
         * This method only merges the first level of the configuration array.
         * If your users partially define a multi-dimensional configuration array, the missing options will not be merged.
         */
        $this->mergeConfigFrom(
            __DIR__.'/config.php', $this->packageName
        );

        $this->defineMiddleware();

        $this->app->bind('dummy', 'Ridrog\Dummy\Dummy');
    }

    /**
     * Define Commands
     */
    public function defineCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                ExampleCommand::class,
                TestCommand::class,
                // more
            ]);
        }
    }

    /**
     * Publish Config
     *
     */
    public function publishConfig()
    {
        $this->publishes([
            __DIR__.'/config.php' => config_path($this->packageName.'.php')
        ], $this->packageName.'-config');
    }

    /**
     * Publish Assets
     */
    public function publishAssets()
    {
        $this->publishes([
            __DIR__.'/Resources/Assets' => public_path('dummy'),
           // more folders
        ], $this->packageName.'-assets');
    }

    /**
     * Define Middleware
     */
    public function defineMiddleware()
    {
        app('router')->aliasMiddleware('example', ExampleMiddleWare::class);
    }

    /**
     * Load Routes
     */
    public function loadRoutes()
    {
        $this->loadRoutesFrom(__DIR__.'/Http/routes.php');
    }

    /**
     * Load and publish Routes
     */
    public function views()
    {
        $this->loadViewsFrom(__DIR__.'/Views', $this->packageName);

        $this->publishes([
            __DIR__.'/Views' => resource_path('views/vendor/'.$this->packageName),
        ], $this->packageName.'-views');
    }

    /**
     * Load and Publish Migrations
     */
    public function migrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/Database/Migrations');

        $this->publishes([
            __DIR__.'/Database/Migrations/' => database_path('migrations')
        ], $this->packageName.'-migrations');
    }

    /**
     * Load and Publish Translations
     */
    public function translations()
    {
        $this->loadTranslationsFrom(__DIR__.'/Resources/Lang', $this->packageName);

        $this->publishes([
            __DIR__.'/path/to/translations' => resource_path('lang/vendor/courier'),
        ], $this->packageName.'-translations');
    }

    /**
     * Listen for Events and Fire one
     */
    public function listenForEvents()
    {
        Event::listen(DummyEvent::class, DummyListener::class);

        event(new DummyEvent);
    }
}
