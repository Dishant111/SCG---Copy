<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestsAnswers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_answers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_id');
            $table->unsignedBigInteger('test_type_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('option_id')->nullable();
            $table->integer('std_answer')->nullable();
            $table->timestamps();
            $table->foreign('test_type_id')->references('test_type_id')->on('test_types');
            $table->foreign('student_id')->references('student_id')->on('students');
            // $table->foreign('test_id')->references('test_id')->on('tests');
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('option_id')->references('id')->on('question_options');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_asnwers');
    }
}
