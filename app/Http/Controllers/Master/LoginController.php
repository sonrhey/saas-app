<?php

namespace App\Http\Controllers\Master;

use App\Http\Constants\Roles;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthChecker;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\ApplicationRole;
use App\Models\Domain;
use ErrorException;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function index() {
    $role = ApplicationRole::where('role_code', Roles::ROLE_MASTER)->first()->role_name;
    return view('template-authentication.login.index', compact('role'));
  }

  public function authenticate(Request $request, LoginRequest $login_request, AuthChecker $auth_checker) {
    $auth = $login_request->authenticate($request, Roles::ROLE_MASTER);
    $redirectTo = $auth_checker->auth_proceed($auth);
    if (!is_string($redirectTo)) {
      return redirect()->back();
    }
    $user = Auth::user();
    $token = $user->createToken('token')->plainTextToken;
    $request->session()->put('token', $token);
    return redirect($redirectTo);
  }
}
