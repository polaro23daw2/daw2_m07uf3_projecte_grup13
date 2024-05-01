<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Middleware global que se ejecuta en todas las solicitudes
        \App\Http\Middleware\AdminAuth::class,
        \App\Http\Middleware\CheckAdmin::class,
    ];

    protected $middlewareGroups = [
        //
    ];

    protected $routeMiddleware = [
        'adminAuth' => \App\Http\Middleware\AdminAuth::class, 
        'checkadmin' => \App\Http\Middleware\CheckAdmin::class,

    ];
}
