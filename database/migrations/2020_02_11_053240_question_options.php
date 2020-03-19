<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class QuestionOptions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('question_id');
            $table->string('option');
            // $table->boolean('correct')->default(false);
            $table->unsignedBigInteger('personality_type_id')->nullable();
            $table->timestamps();
            $table->foreign('question_id')->references('id')->on('questions');
            $table->foreign('personality_type_id')->references('personality_type_id')->on('personality_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('questions');
        Schema::dropIfExists('question_options');
    }
}
