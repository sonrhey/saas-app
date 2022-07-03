<?php

namespace App\Http\Requests\Auth;

use App\Http\Constants\Roles;
use Illuminate\Support\Facades\Auth;

class LoginRequest
{
  public function authenticate($request, $type) {
    $credentials = $request->validate([
      'email' => ['required', 'email'],
      'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
      $auth = Auth::user()->role->role_code;

      if ($auth != $type) {
        auth()->logout();
        return false;
      }
      
      $request->session()->regenerate();

      return true;
    }

    return false;
  }

  public function logout($request)
  {
    $role = new Roles();
    $redirectTo = $role->CURRENT_URL . '/login';
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    
    return $redirectTo;
  }
}