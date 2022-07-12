<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('colleges', function (Blueprint $table) {
        $table->renameColumn('is_form_created','is_college_form_created');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('colleges', function (Blueprint $table) {
        $table->renameColumn('is_college_form_created','is_form_created');
      });
    }
};
