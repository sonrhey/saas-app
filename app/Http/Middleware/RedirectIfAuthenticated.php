<?php

namespace App\Http\Middleware;

use App\Http\Constants\Roles;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Break_;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @param  string|null  ...$guards
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        $roles = new Roles();
        
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
              $route = $this->role_switch($roles->CURRENT_ROLE);
              return redirect($route);
            }
        }

        return $next($request);
    }

    private function role_switch($role) {
      $route = new Roles();

      switch ($role) {
        case Roles::ROLE_MASTER:
          return $route->CURRENT_URL;
        break;
        case Roles::ROLE_COLLEGE:
          return $route->CURRENT_URL;
        break;
        case Roles::ROLE_STUDENT:
          return $route->CURRENT_URL;
        break;
      }
    }
}
