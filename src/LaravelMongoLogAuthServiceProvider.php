<?php

namespace Elrincondeisma\LaravelMongoLogAuth;

use Illuminate\Auth\Events\Failed;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Illuminate\Auth\Events\OtherDeviceLogout;
use Illuminate\Contracts\Events\Dispatcher;
use Elrincondeisma\LaravelMongoLogAuth\Commands\PurgeAuthenticationLogCommand;
use Elrincondeisma\LaravelMongoLogAuth\Listeners\FailedLoginListener;
use Elrincondeisma\LaravelMongoLogAuth\Listeners\LoginListener;
use Elrincondeisma\LaravelMongoLogAuth\Listeners\LogoutListener;
use Elrincondeisma\LaravelMongoLogAuth\Listeners\OtherDeviceLogoutListener;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelMongoLogAuthServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-authentication-log')
            ->hasConfigFile()
            ->hasTranslations()
            ->hasViews()
            ->hasMigration('create_authentication_log_table')
            ->hasCommand(PurgeAuthenticationLogCommand::class);

        $events = $this->app->make(Dispatcher::class);
        $events->listen(config('authentication-log.events.login', Login::class), LoginListener::class);
        $events->listen(config('authentication-log.events.failed', Failed::class), FailedLoginListener::class);
        $events->listen(config('authentication-log.events.logout', Logout::class), LogoutListener::class);
        $events->listen(config('authentication-log.events.other-device-logout', OtherDeviceLogout::class), OtherDeviceLogoutListener::class);
    }
}
