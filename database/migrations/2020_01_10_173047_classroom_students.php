<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ClassroomStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classroom_students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_id');
            $table->unsignedBigInteger('classroom_id');
            $table->string('teacher_id');
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->foreign('classroom_id')->references('class_id')->on('classrooms');
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers')->onUpdate(’cascade’);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classroom_students');
    }
}
