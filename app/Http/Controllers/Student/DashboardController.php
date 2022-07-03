<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\Slug\SlugChecker;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
  public function __construct()
  {
    $slug_check = new SlugChecker();
    $slug_check = $slug_check->slug_check(request()->segment(2));
  }

  public function index() {
    return view('student.content.dashboard.index');
  }
}
