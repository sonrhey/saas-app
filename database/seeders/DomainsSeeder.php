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
        ]
      ]);
    }
}
