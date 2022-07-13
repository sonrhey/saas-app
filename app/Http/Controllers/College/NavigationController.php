<?php

namespace App\Http\Controllers\College;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
  public function index() {
    return view('college.content.my-forms.index');
  }
}
