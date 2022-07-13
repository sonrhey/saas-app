<?php

namespace App\Http\Middleware;

use App\Http\Constants\Roles;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CollegeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
      $roles = new Roles();
      if (Str::is(Roles::COLLEGE_WILDCARD, $roles->CURRENT_ROUTE)) {
        return $next($request);
      }
      return redirect($roles->CURRENT_URL);
    }
}
