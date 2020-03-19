<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TestResults extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_results', function (Blueprint $table) {
            $table->bigIncrements('test_result_id');
            $table->string('student_id');
            $table->unsignedBigInteger('test_type_id');
            $table->string('score');
            $table->date('date');
            $table->unsignedBigInteger('careerfield_id')->nullable();
            $table->timestamps();
            $table->foreign('test_type_id')->references('test_type_id')->on('test_types');
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->foreign('careerfield_id')->references('careerfield_id')->on('careerfields');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test_results');
    }
}
