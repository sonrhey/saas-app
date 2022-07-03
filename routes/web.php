<?php

use App\Http\Controllers\Master\DashboardController as MasterDashboard;
use App\Http\Controllers\College\DashboardController as CollegeDashboard;
use App\Http\Controllers\Student\DashboardController as StudentDashboard;
use App\Http\Controllers\Global\LogoutController;
use App\Http\Controllers\Master\CollegeRegistrationController;
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

Route::group(['middleware' => 'auth'], function() {
  Route::get('/logout', [LogoutController::class, 'logout']);

  Route::group(['middleware' => 'master'], function() {
    Route::get('/master', [MasterDashboard::class, 'index']);
    Route::get('/master/college-registration', [CollegeRegistrationController::class, 'index']);
  });

  Route::group(['middleware' => 'college'], function() {
    Route::get('/college/{college}', [CollegeDashboard::class, 'index']);
  });

  Route::group(['middleware' => 'student'], function() {
    Route::get('/student/{student}', [StudentDashboard::class, 'index']);
  });
});

require __DIR__.'/auth.php';