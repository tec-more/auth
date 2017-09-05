<?php namespace Tukecx\Base\Auth\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\ServiceProvider;
use Tukecx\Base\Auth\Listeners\UserLoggedInListener;
use Tukecx\Base\Auth\Listeners\UserLoggedOutListener;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        Event::listen('Illuminate\Auth\Events\Login', UserLoggedInListener::class);
        Event::listen('Illuminate\Auth\Events\Logout', UserLoggedOutListener::class);
    }
}
