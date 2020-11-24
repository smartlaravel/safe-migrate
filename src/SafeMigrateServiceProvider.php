<?php

namespace SmartLaravel\SafeMigrate;

use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Database\Migrations\Migrator;
use SmartLaravel\SafeMigrate\Console\Commands\Seeds\SafeSeedCommand;
use SmartLaravel\SafeMigrate\Console\Commands\Migrations\SafeWipeCommand;
use SmartLaravel\SafeMigrate\Console\Commands\Migrations\SafeFreshCommand;
use SmartLaravel\SafeMigrate\Console\Commands\Migrations\SafeResetCommand;
use SmartLaravel\SafeMigrate\Console\Commands\Migrations\SafeMigrateCommand;
use SmartLaravel\SafeMigrate\Console\Commands\Migrations\SafeRefreshCommand;
use SmartLaravel\SafeMigrate\Console\Commands\Migrations\SafeRollbackCommand;

class SafeMigrateServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * In order to extend the default Laravel migration commands to add safety
         * checks the Migrator class must be bound and accessible to the application.
         */
        $this->app->singleton(Migrator::class, function ($app) {
            return $app['migrator'];
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->extend('command.migrate.fresh', function ($command, $app) {
            return new SafeFreshCommand;
        });

        $this->app->extend('command.migrate', function ($command, $app) {
            return new SafeMigrateCommand($app['migrator'], $app[Dispatcher::class]);
        });

        $this->app->extend('command.migrate.refresh', function ($command, $app) {
            return new SafeRefreshCommand;
        });

        $this->app->extend('command.migrate.reset', function ($command, $app) {
            return new SafeResetCommand($app['migrator']);
        });

        $this->app->extend('command.migrate.rollback', function ($command, $app) {
            return new SafeRollbackCommand($app['migrator']);
        });

        $this->app->extend('command.db.wipe', function ($command, $app) {
            return new SafeWipeCommand;
        });

        $this->app->extend('command.seed', function ($command, $app) {
            return new SafeSeedCommand($app['db']);
        });
    }
}
