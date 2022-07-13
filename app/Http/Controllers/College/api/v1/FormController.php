<?php

namespace App\Http\Controllers\College\api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Response\Response;
use App\Models\CollegeForm;
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
}
