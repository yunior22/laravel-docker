<?php

namespace Yunior22\LaravelDocker;

use Illuminate\Support\ServiceProvider;
use Yunior22\LaravelDocker\Console\Commands\DockerCommand;

class ArtisanLaravelDockerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('command.yunior22.laravel-docker', function ($app) {
            return $app['Yunior22\LaravelDocker\Console\Commands\DockerCommand'];
        });

        $this->commands('command.yunior22.laravel-docker');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                DockerCommand::class,
            ]);
        }
    }
}
