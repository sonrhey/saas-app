<?php

use App\Http\Controllers\Master\DashboardController as MasterDashboard;
use App\Http\Controllers\College\DashboardController as CollegeDashboard;
use App\Http\Controllers\Student\DashboardController as StudentDashboard;
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

Route::resource('/master', MasterDashboard::class);
Route::resource('/college', CollegeDashboard::class);
Route::resource('/student', StudentDashboard::class);