# Yunior22 Laravel-Docker
A simple Docker-Compose workflow that sets up a LEMP network and services for local Laravel development. This repo is inspire by Andrew Schmelyum's [docker-compose-laravel repo](https://github.com/aschmelyun/docker-compose-laravel).

### Install
If you are interested in using Docker with an existing Laravel application, you may simply install my docker-compose file settings using the Composer package manager.

```
composer require yunior22/laravel-docker --dev
```

After package has been installed, you may run the docker:install Artisan command. This command will publish my docker-compose.yml file to the root of your application:

```
php artisan docker
```