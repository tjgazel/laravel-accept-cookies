<?php

namespace TJGazel\Laravel\AcceptCookies\Facades;

use Illuminate\Support\Facades\Facade;
use TJGazel\Laravel\AcceptCookies\AcceptCookies as LaravelAcceptCookies;

/**
 * @method static \TJGazel\Laravel\AcceptCookies\AcceptCookies routes()
 * @method static \TJGazel\Laravel\AcceptCookies\AcceptCookies getMiddleware()
 * @method static \TJGazel\Laravel\AcceptCookies\AcceptCookies getPrefixURL()
 * @method static \TJGazel\Laravel\AcceptCookies\AcceptCookies getPrefixRouteName()
 *
 * @see TJGazel\Laravel\AcceptCookies\AcceptCookies
 */
class AcceptCookies extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return LaravelAcceptCookies::class;
    }
}
