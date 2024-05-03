<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Comprobamos primero si el usuario no es admin
        if (auth()->user()->tipus != "cap_de_departament") {
            if ($request->is('dashboard*')) {
                return redirect('dashboard-basic')->with('error', 'Error:usuari validat amb el role basic');
            }
            else if ($request->is('trebs*')) {
                return redirect('/trebs/index_basic')->with('error', 'Error:usuari validat amb el role basic');
            }
        }

        return $next($request);
    }
}
