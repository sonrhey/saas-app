<?php

namespace App\Http\Controllers\College\api\v1;

use App\Http\Constants\Messages;
use App\Http\Controllers\Controller;
use App\Http\Requests\Response\Response;
use App\Models\CollegeForm;
use App\Models\CollegeInformation;
use App\Models\StudentInformation;
use Exception;
use Illuminate\Http\Request;

class FormController extends Controller
{
  private $response;

  public function __construct()
  {
    $this->response = new Response();
  }

  public function get_college_forms() {
    $forms = CollegeForm::filterByCollegeId()->get();

    $this->response->success = true;
    $this->response->message = 'ok';
    $this->response->data = $forms;

    return response()->json($this->response);
  }

  public function college_form_data(Request $request) {
    try {
      $college_information = new CollegeInformation($request->all());
      $college_information->save();

      $this->response->success = true;
      $this->response->message = 'ok';
      $this->response->data = Messages::CREATE_SUCCESS;
    } catch (Exception $ex) {
      $this->response->success = false;
      $this->response->message = 'error';
      $this->response->data = Messages::CREATE_ERROR;
    }

    return response()->json($this->response);
  }

  public function student_form_data(Request $request) {
    try {
      $student_information = new StudentInformation($request->all());
      $student_information->save();

      $this->response->success = true;
      $this->response->message = 'ok';
      $this->response->data = Messages::CREATE_SUCCESS;
    } catch (Exception $ex) {
      $this->response->success = false;
      $this->response->message = 'error';
      $this->response->data = Messages::CREATE_ERROR;
    }

    return response()->json($this->response);
  }
}
