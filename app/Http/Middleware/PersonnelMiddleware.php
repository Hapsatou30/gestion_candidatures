<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PersonnelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        // Vérifiez si l'utilisateur est authentifié en tant que personnel via les sessions
        if ($request->session()->has('personnel') && $request->session()->get('personnel') === true) {
            return $next($request);
        }

        // Si l'utilisateur n'est pas authentifié en tant que personnel, redirigez-le vers la page de connexion
        return redirect('/connexionPersonnel');
    }
}
