<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonalityCareerfields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personality_careerfields', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('careerfield_id');
            $table->unsignedBigInteger('personality_type_id');
            $table->timestamps();
            $table->foreign('personality_type_id')->references('personality_type_id')->on('personality_types');
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
