<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle($request, Closure $next)
    {
        // Verifique se o usuário está autenticado e é um administrador
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        // Redirecione se o usuário não for administrador
        return redirect('/')->with('error', 'Acesso negado!');
    }
}

     

