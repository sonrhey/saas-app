<?php

namespace App\Http\Controllers\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollegeRegistrationController extends Controller
{
  public function index() {
    return view('master.content.college-registration.index');
  }
}
