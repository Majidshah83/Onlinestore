<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Support\Facades\Auth;
class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
   public function handle($request, Closure $next, $guard = null) {
    // dd($request->all());
    
  if (Auth::guard($guard)->check()) {
    $role = Auth::user()->role; 

    switch ($role) {
      case 'admin':
         return '/dashboard';
         break;
      case 'user':
         return '/userdashboard';
         break; 

      default:
         return '/login'; 
         break;
    }
  }
  return $next($request);
}

}