<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SubjectResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_results', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->integer('marks')->unsigned();
            $table->foreign('subject_id')->references('subject_id')->on('subjects');
            $table->foreign('student_id')->references('student_id')->on('students');
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
        Schema::dropIfExists('subject_results');
    }
}
