<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Classrooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classrooms', function (Blueprint $table) {
            $table->bigIncrements('classroom_id');
            $table->year('year');
            $table->unsignedBigInteger('classes_id');
            // $table->unsignedBigInteger('subject_id');
            // $table->string('teacher_id');
            // $table->foreign('teacher_id')->references('teacher_id')->on('teachers');
            $table->foreign('classes_id')->references('classes_id')->on('classes');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classrooms');
    }
}
