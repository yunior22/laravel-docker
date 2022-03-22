# Laravel-Docker
A simple Docker-Compose workflow that sets up a LEMP network and services for local Laravel development. This repo is inspire by Andrew Schmelyum's [docker-compose-laravel repo](https://github.com/aschmelyun/docker-compose-laravel).

## How to install?
If you are interested in using Docker with an existing Laravel application, you may simply install my docker-compose file settings using the Composer package manager.

```bash
composer require yunior22/laravel-docker --dev
```

After package has been installed, you may run the docker:install Artisan command. This command will publish my docker-compose.yml file to the root of your application:

```bash
php artisan docker
```

## Common Commands
Here is a list of docker commands.

```bash
# Build and run docker.
docker-compose up nginx --build

# stop docker
docker-compose down

# Run docker detached
docker-compose up -d nginx --build

# Run standard laravel artisan commands
docker-compose run --rm artisan ...

# Run standard composer commands
docker-compose run --rm composer ...

# Run standard node(npm) commands
docker-compose run --rm npm ...

# or yarn
docker-compose run --rm yarn ...
```

I like to create some aliases to shorten the commands abit, add the following to your `.zshrc` or `.bashrc` file:

```bash
# Docker-Compose aliases
alias dc="docker-compose "
alias dcr="docker-compose run --rm "
alias dce="docker-compose exect "
alias dcb="docker-compose build"
alias dcu="docker-compose up -d --build"
alias dcd="docker-compose down"
alias dcps="docker-compose ps"
```

## What's included?

This is a simple laravel develoment enviroment. It includes:

- PHP 8.1
- MySQL 8.0
- Nginx
- Redis (latest)

Services:
- NodeJS (latest)
- Composer
- Artisan

## Requirement and suported systems
This package assumes that php and composer are install locally on your system.

Docker is also require, and currently only works on Windows, Mac and Linux.

> Windows requires running Hyper-V.  Using Git Bash (MINGW64) and WSL are supported.  Native
  Windows is still under development.

| Mac                                                                      |                                              Linux                                              |                                     Windows                                      |
| ------------------------------------------------------------------------ | :---------------------------------------------------------------------------------------------: | :------------------------------------------------------------------------------: |
| Install Docker on [Mac](https://docs.docker.com/docker-for-mac/install/) | Install Docker on [Debian](https://docs.docker.com/engine/installation/linux/docker-ce/debian/) | Install Docker on [Windows](https://docs.docker.com/docker-for-windows/install/) |
|                                                                          | Install Docker on [Ubuntu](https://docs.docker.com/engine/installation/linux/docker-ce/ubuntu/) |                                                                                  |
|                                                                          | Install Docker on [CentOS](https://docs.docker.com/engine/installation/linux/docker-ce/centos/) |                                                                                  |
