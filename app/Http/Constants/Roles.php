<?php

namespace App\Http\Constants;

use App\Models\Domain;
use Illuminate\Support\Facades\Auth;

class Roles {
  public const ROLE_MASTER = 'MST';
  public const ROLE_COLLEGE = 'CLL';
  public const ROLE_STUDENT = 'STD';

  public const MASTER_WILDCARD = 'master*';
  public const COLLEGE_WILDCARD = 'college*';
  public const STUDENT_WILDCARD = 'student*';

  public const MASTER_LOGIN = 'master-login';
  public const COLLEGE_LOGIN = 'college-login';
  public const STUDENT_LOGIN = 'student-login';

  public $CURRENT_ROLE = null;
  public $CURRENT_URL = null;
  public $CURRENT_ROUTE = null;

  public function __construct()
  {
    $this->CURRENT_ROLE = (Auth::check()) ? Auth::user()->role->role_code : null;
    $this->CURRENT_URL = (Auth::check()) ? Domain::findByUserId(Auth::user()->user_id)->first()->url : null;
    $this->CURRENT_ROUTE = ltrim($this->CURRENT_URL, '/');
  }
}
