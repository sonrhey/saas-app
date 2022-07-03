<?php

namespace App\Http\Controllers\Student;

use App\Http\Constants\Roles;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AuthChecker;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Slug\SlugChecker;
use App\Models\ApplicationRole;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function __construct()
  {
    $slug_check = new SlugChecker();
    $slug_check = $slug_check->slug_check(request()->segment(2));
  }

  public function index($slug) {
    $role = ApplicationRole::where('role_code', Roles::ROLE_STUDENT)->first()->role_name;
    return view('template-authentication.login.index', compact('role'));
  }

  public function authenticate(Request $request, LoginRequest $login_request, AuthChecker $auth_checker) {
    $auth = $login_request->authenticate($request, Roles::ROLE_STUDENT);
    $redirectTo = $auth_checker->auth_proceed($auth);
    if (!is_string($redirectTo)) {
      return redirect()->back();
    }
    return redirect($redirectTo);
  }
}
