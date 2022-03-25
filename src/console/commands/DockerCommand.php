<?php

namespace Yunior22\LaravelDocker\Console\Commands;

use Illuminate\Console\Command;

class DockerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install Docker development enviroment with Docker Compose file.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $dockerCompose = file_get_contents(__DIR__ . '/../../../stubs/docker-compose.stub');

        file_put_contents($this->laravel->basePath('docker-compose.yml'), $dockerCompose);

        $environment = file_get_contents($this->laravel->basePath('.env'));

        $environment = str_replace('DB_HOST=127.0.0.1', "DB_HOST=mysql", $environment);

        $environment = str_replace('DB_USERNAME=root', "DB_USERNAME=laravel", $environment);

        $environment = preg_replace("/DB_PASSWORD=(.*)/", "DB_PASSWORD=secret", $environment);

        $environment = str_replace('REDIS_HOST=127.0.0.1', 'REDIS_HOST=redis', $environment);

        file_put_contents($this->laravel->basePath('.env'), $environment);

        $this->info('Docker scaffolding installed successfully.');
    }
}
