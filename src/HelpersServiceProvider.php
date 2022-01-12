<?php

namespace RalphJSmit\Helpers;

use RalphJSmit\Helpers\Commands\HelpersCommand;
use RalphJSmit\Helpers\Laravel\Support\NamespaceManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class HelpersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-helpers')
            ->hasConfigFile();
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(NamespaceManager::class, NamespaceManager::class);
    }
}
