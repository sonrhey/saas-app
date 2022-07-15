<?php

use App\Http\Controllers\College\api\v1\FormController;
use App\Http\Controllers\College\api\v1\StudentController;
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
  Route::get('/v1/master/college/no-form-created-colleges', [CollegeController::class, 'no_form_created_colleges']);
  Route::post('/v1/master/college/college-form', [CollegeController::class, 'college_form']);

  Route::get('/v1/college/get-forms', [FormController::class, 'get_college_forms']);
  Route::post('/v1/college/register-student', [StudentController::class, 'register_student']);
});
