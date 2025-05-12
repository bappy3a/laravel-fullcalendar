<?php

namespace Bappy3a\Fullcalendar;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Bappy3a\Fullcalendar\Commands\FullcalendarCommand;

class FullcalendarServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-fullcalendar')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_fullcalendar_table')
            ->hasCommand(FullcalendarCommand::class);
    }
}
