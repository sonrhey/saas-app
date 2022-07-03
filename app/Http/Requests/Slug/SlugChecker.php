<?php

namespace App\Http\Requests\Slug;

use App\Http\Constants\Roles;
use App\Models\ApplicationRole;
use App\Models\Domain;
use Exception;
use Illuminate\Support\Facades\Auth;

class SlugChecker
{
  public function slug_check($slug) {
    $role = ApplicationRole::where('role_name', request()->segment(1))->first();

    $check_if_exist = Domain::where([
      'slug' => $slug,
      'application_role_id' => $role->application_role_id
    ])->first();

    if (!$check_if_exist) {
      abort(404);
    }
  }
}