<?php

namespace Yunior22;

use Illuminate\Support\ServiceProvider;

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
            return $app['Yunior22\Commands\DockerCommand'];
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
        return 0;
    }
}
