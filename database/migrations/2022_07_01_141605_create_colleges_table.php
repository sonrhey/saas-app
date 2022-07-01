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
        Schema::create('colleges', function (Blueprint $table) {
          $table->bigIncrements('college_id');
          $table->string('name');
          $table->string('address');
          $table->string('registered_name');
          $table->string('owner');
          $table->unsignedBigInteger('user_id');
          $table->timestamps();

          $table->foreign('user_id')
          ->references('user_id')
          ->on('users')
          ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colleges');
    }
};
