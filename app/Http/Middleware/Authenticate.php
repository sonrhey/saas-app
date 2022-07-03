<?php

namespace App\Http\Middleware;

use App\Http\Constants\Roles;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
      if (! $request->expectsJson()) {
        $route = $this->check_prefix();
        return route($route, request()->segment(2));
      }
    }

    private function check_prefix() {
      $route = null;

      if (request()->is(Roles::MASTER_WILDCARD)) {
        $route = Roles::MASTER_LOGIN;
      } else if (request()->is(Roles::COLLEGE_WILDCARD)) {
        $route = Roles::COLLEGE_LOGIN;
      } else if (request()->is(Roles::STUDENT_WILDCARD)) {
        $route = Roles::STUDENT_LOGIN;
      }

      return $route;
    }
}
