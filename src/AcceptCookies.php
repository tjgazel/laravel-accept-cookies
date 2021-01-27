<?php

namespace TJGazel\Laravel\AcceptCookies;

use Illuminate\Support\Facades\Route as RouteFacade;
use Illuminate\Routing\Route;

class AcceptCookies
{
    private $middleware;
    private $prefixURL;
    private $prefixRouteName;

    public function routes()
    {
        $route = config('accept-cookies.route');

        $this->middleware = $route['middleware'];
        $this->prefixURL = "/{$route['prefix']}";
        $this->prefixRouteName = "{$route['name']}";

        RouteFacade::middleware($route['middleware'])
            ->prefix($route['prefix'])
            ->name($route['name'])
            ->namespace('\TJGazel\Laravel\AcceptCookies\Http\Controllers')
            ->group(function () use ($route) {
                RouteFacade::name($route['route']['name'])->post($route['route']['url'], 'AcceptCookiesController@accept');
            });
    }

    /**
     *  Retorna o conjunto de middlewares da rota
     * @return string
     */
    public function getMiddleware()
    {
        return $this->middleware;
    }

    /**
     *  Retorna o prefixo da url da rota
     * @return string
     */
    public function getPrefixURL()
    {
        return $this->prefixURL;
    }

    /**
     *  Retorna o prefixo do nome da rota
     * @return string
     */
    public function getPrefixRouteName()
    {
        return $this->prefixRouteName;
    }
}
