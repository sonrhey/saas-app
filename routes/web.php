<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('template-authentication.login.index');
});

Route::get('/master-dashboard', function () {
  return view('master.content.dashboard.index');
});

Route::get('/college-dashboard', function () {
  return view('college.content.dashboard.index');
});

Route::get('/student-dashboard', function () {
  return view('student.content.dashboard.index');
});