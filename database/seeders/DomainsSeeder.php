<?php

namespace Database\Seeders;

use App\Models\Domain;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DomainsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Domain::insert([
        [
          "user_id" => 1,
          "url" => "/master",
          "application_role_id" => 1,
          "slug" => ''
        ],
        [
          "user_id" => 2,
          "url" => "/college/st-therese",
          "application_role_id" => 2,
          "slug" => 'st-therese'
        ],
        [
          "user_id" => 3,
          "url" => "/student/john-doe",
          "application_role_id" => 3,
          "slug" => 'john-doe'
        ]
      ]);
    }
}
