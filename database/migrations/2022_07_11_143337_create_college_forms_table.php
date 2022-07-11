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
        Schema::create('college_forms', function (Blueprint $table) {
            $table->bigIncrements("college_form_id");
            $table->unsignedBigInteger('college_id');
            $table->json('form_data');
            $table->string('type');
            $table->timestamps();

            $table->foreign('college_id')
            ->references('college_id')
            ->on('colleges')
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
        Schema::dropIfExists('college_forms');
    }
};
