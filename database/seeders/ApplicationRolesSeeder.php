<?php

namespace Database\Seeders;

use App\Models\ApplicationRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ApplicationRolesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    ApplicationRole::insert([
      [
        'role_code' => 'MST',
        'role_name' => 'Master'
      ],
      [
        'role_code' => 'CLL',
        'role_name' => 'College'
      ],
      [
        'role_code' => 'STD',
        'role_name' => 'Student'
      ]
    ]);
  }
}
