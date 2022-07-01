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
        Schema::create('student_documents', function (Blueprint $table) {
          $table->bigIncrements('student_document_id');
          $table->unsignedBigInteger('document_id');
          $table->unsignedBigInteger('student_id');
          $table->unsignedBigInteger('status_id');
          $table->timestamps();

          $table->foreign('document_id')
          ->references('document_id')
          ->on('documents')
          ->onDelete('cascade');

          $table->foreign('student_id')
          ->references('student_id')
          ->on('students')
          ->onDelete('cascade');

          $table->foreign('status_id')
          ->references('status_id')
          ->on('statuses')
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
        Schema::dropIfExists('student_documents');
    }
};
