<?php namespace Tukecx\Base\Auth\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

use Tukecx\Base\Auth\Http\Middleware\AuthenticateAdmin;
use Tukecx\Base\Auth\Http\Middleware\GuestAdmin;

class MiddlewareServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * @var Router $router
         */
        $router = $this->app['router'];

        $router->aliasMiddleware('tukecx.auth-admin', AuthenticateAdmin::class);
        $router->aliasMiddleware('tukecx.guest-admin', GuestAdmin::class);
        $router->pushMiddlewareToGroup('web', AuthenticateAdmin::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
