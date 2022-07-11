<?php

use App\Http\Controllers\Master\api\v1\CollegeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->group(function () {
  Route::post('/v1/master/college/create', [CollegeController::class, 'create_college']);
  Route::get('/v1/master/college/college-list', [CollegeController::class, 'college_list']);
  Route::post('/v1/master/college/college-form', [CollegeController::class, 'college_form']);
});
