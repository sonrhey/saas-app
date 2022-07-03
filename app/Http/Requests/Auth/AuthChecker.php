<?php

namespace App\Http\Requests\Auth;

use App\Http\Constants\Roles;
use Illuminate\Support\Facades\Auth;

class AuthChecker
{
  public function auth_proceed($auth) {
    if (!$auth) {
      return redirect()->back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
      ])->onlyInput('email');
    }

    $redirectTo = new Roles();
    return $redirectTo->CURRENT_URL;
  }
}