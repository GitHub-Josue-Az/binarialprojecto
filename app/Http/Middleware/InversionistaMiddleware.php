<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class InversionistaMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        if (!$request->user()->isInversionista) {
            auth()->logout();
            return redirect()->route('login')->withMessage('No tiene permiso para acceder a esta sección.'); 
        }
        
        return $next($request);
    }}
