<?php

namespace Vikasrinvi\LaravelPackageSkelaton;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Vikasrinvi\LaravelPackageSkelaton\Commands\LaravelPackageSkelatonCommand;
use Vikasrinvi\LaravelPackageSkelaton\ErrorEmailNotifier;

class LaravelPackageSkelatonServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-package-skelaton')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-package-skelaton_table')
            ->hasCommand(LaravelPackageSkelatonCommand::class);
    }

    public function packageRegistered()
    {
        $this->app->singleton('error-email-notifier', function () {
            return new ErrorEmailNotifier();
        });

    }
}
