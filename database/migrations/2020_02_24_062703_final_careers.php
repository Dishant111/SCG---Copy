<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FinalCareers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('final_career', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('student_id');
            $table->unsignedBigInteger('careerfield_id');
            $table->unsignedBigInteger('personality_type_id');
            $table->timestamps();
            $table->foreign('personality_type_id')->references('personality_type_id')->on('personality_types');
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
        //
    }
}
