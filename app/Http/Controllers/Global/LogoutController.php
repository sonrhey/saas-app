<?php

namespace App\Http\Controllers\Global;

use App\Http\Constants\Roles;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
  public function logout(Request $request) {
    $logout = new LoginRequest();
    $redirectTo = $logout->logout($request);
    
    return redirect($redirectTo);
  }
}
