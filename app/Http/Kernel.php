<?php

protected $routeMiddleware = [
    // outros middlewares
    'isAdmin' => \App\Http\Middleware\IsAdmin::class,
];
