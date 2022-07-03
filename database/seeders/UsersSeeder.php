<?php

namespace Database\Seeders;

use App\Models\ApplicationRole;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
      User::insert([
        [
          'name' => 'Administrator',
          'email' => 'administrator@saas-app.com',
          'username' => 'admin',
          'password' => bcrypt('Default@123'),
          'application_role_id'=> ApplicationRole::where('role_code', 'MST')->first()->application_role_id
        ],
        [
          'name' => 'St. Therese College',
          'email' => 'stherese@college.com',
          'username' => 'stherese',
          'password' => bcrypt('Default@123'),
          'application_role_id'=> ApplicationRole::where('role_code', 'CLL')->first()->application_role_id
        ],
        [
          'name' => 'John Doe',
          'email' => 'jdoe@student.com',
          'username' => 'jdoe',
          'password' => bcrypt('Default@123'),
          'application_role_id'=> ApplicationRole::where('role_code', 'STD')->first()->application_role_id
        ]
      ]);
  }
}
