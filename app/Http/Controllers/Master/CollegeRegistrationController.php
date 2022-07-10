<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use App\Models\College;
use Illuminate\Http\Request;

class CollegeRegistrationController extends Controller
{
  public function index() {
    return view('master.content.college-registration.index');
  }

  public function college_list() {
    return view('master.content.college-list.index');
  }
  
  public function college_form_creation() {
    return view('master.content.form-creation.index');
  }

  public function college_form_creation_student() {
    return view('master.content.form-creation.student');
  }
}
