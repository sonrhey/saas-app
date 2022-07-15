<?php

namespace App\Http\Controllers\College;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
  public function index() {
    return view('college.content.my-forms.index');
  }

  public function student_registration() {
    return view('college.content.student-registration.index');
  }

  public function student_list() {
    return view('college.content.student-list.index');
  }
}
