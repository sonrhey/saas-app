<?php

namespace App\Http\Controllers\College\api\v1;

use App\Http\Constants\Messages;
use App\Http\Constants\Roles;
use App\Http\Controllers\Controller;
use App\Http\Requests\Response\Response;
use App\Models\ApplicationRole;
use App\Models\Domain;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentController extends Controller
{
  private $response;
  private $student_role;

  public function __construct()
  {
    $this->response = new Response();
    $this->student_role = ApplicationRole::where([
      'role_code' => Roles::ROLE_STUDENT
    ])->first();
  }

  public function register_student(Request $request) {
    try {
      DB::beginTransaction();
        $user = new User((array) $request->studentCredentials);
        $creds = (object) $request->studentCredentials;
        $user->name = $request->studentDetails["name"];
        $user->password = bcrypt($creds->password);
        $user->application_role_id = $this->student_role->application_role_id;
        $user->save();

        $student = new Student((array) $request->studentDetails);
        $student->college_id = Auth::user()->college->college_id;
        $student->user_id = $user->user_id;
        $student->save();

        $slug = Str::slug($request->studentDetails["name"], '-');

        $domain = new Domain();
        $domain->user_id = $user->user_id;
        $domain->application_role_id = $this->student_role->application_role_id;
        $domain->url = '/student/'.$slug;
        $domain->slug = $slug;
        $domain->save();
      DB::commit();

      $this->response->success = true;
      $this->response->message = 'ok';
      $this->response->data = Messages::CREATE_SUCCESS;
    } catch (Exception $ex) {
      DB::rollBack();
      $this->response->success = false;
      $this->response->message = 'ok';
      $this->response->data = Messages::CREATE_ERROR;
    }
    return response()->json($this->response);
  }

  public function student_list() {
    $student_list = Student::findByCollegeId()->get();

    $this->response->success = true;
    $this->response->message = 'ok';
    $this->response->data = $student_list;
    return response()->json($this->response);
  }
}
