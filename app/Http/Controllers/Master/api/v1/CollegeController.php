<?php

namespace App\Http\Controllers\Master\api\v1;

use App\Http\Constants\Messages;
use App\Http\Constants\Roles;
use App\Http\Controllers\Controller;
use App\Http\Requests\Response\Response;
use App\Models\ApplicationRole;
use App\Models\College;
use App\Models\Domain;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CollegeController extends Controller
{
  private $response;
  private $college_role;

  public function __construct()
  {
    $this->response = new Response();
    $this->college_role = ApplicationRole::where([
      'role_code' => Roles::ROLE_COLLEGE
    ])->first();
  }

  public function create_college(Request $request) {
    try {
      DB::beginTransaction();
      $details = (array) $request->college_details;
      $credentials = (array) $request->college_credentials;
    
      $user = new User();
      $user->name = $details["registered_name"];
      $user->email = $credentials["email"];
      $user->password = bcrypt($credentials["password"]);
      $user->application_role_id = $this->college_role->application_role_id;
      $user->username = $credentials["email"];
      $user->save();

      $college = new College($details);
      $college->user_id = $user->user_id;
      $college->save();

      $slug = Str::slug($details["name"], '-');

      $domain = new Domain();
      $domain->user_id = $user->user_id;
      $domain->application_role_id = $this->college_role->application_role_id;
      $domain->url = '/college/'.$slug;
      $domain->slug = $slug;
      $domain->save();

      Mail::send('master.email-template.index', ['details' => $details, 'credentials' => $credentials, 'domain' => $domain] ,function($message) use($credentials){
        $message->to($credentials['email']);
        $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
        $message->subject('College Registration Confirmation');
      });

      if (Mail::flushMacros() ) {
        DB::rollBack();
        $this->response->success = true;
        $this->response->message = 'ok';
        $this->response->data = Mail::flushMacros();
      }

      DB::commit();

      $this->response->success = true;
      $this->response->message = 'ok';
      $this->response->data = Messages::CREATE_SUCCESS;

    } catch (Exception $ex) {
      DB::rollBack();

      $this->response->success = false;
      $this->response->message = 'ok';
      $this->response->data = $ex->getMessage();
    } 

    return response()->json($this->response);
  }

  public function college_list() {
    $colleges = College::all();

    $this->response->success = true;
    $this->response->message = 'ok';
    $this->response->data = $colleges;
    
    return response()->json($this->response);
  }
}
