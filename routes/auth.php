<?php

use App\Http\Controllers\Master\LoginController as MasterLogin;
use App\Http\Controllers\College\LoginController as CollegeLogin;
use App\Http\Controllers\Student\LoginController as StudentLogin;
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
    return redirect('/master/login');
});

Route::group(['middleware' => 'guest'], function() {
  Route::get('/master/login', [MasterLogin::class, 'index'])->name('master-login');
  Route::post('/master/login', [MasterLogin::class, 'authenticate']);


  Route::get('/college/{college}/login', [CollegeLogin::class, 'index'])->name('college-login');
  Route::post('/college/{college}/login', [CollegeLogin::class, 'authenticate']);

  Route::get('/student/{student}/login', [StudentLogin::class, 'index'])->name('student-login');
  Route::post('/student/{student}/login', [StudentLogin::class, 'authenticate']);
});