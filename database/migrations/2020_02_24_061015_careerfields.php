<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Careerfields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('careerfields', function (Blueprint $table) {
            $table->bigIncrements('careerfield_id');
            $table->string('field_name');
            $table->string('description');
            $table->unsignedBigInteger('stream_id');
            $table->unsignedBigInteger('personality_type_id');
            $table->timestamps();
            // $table->foreign('careerfield_id')->references('careerfield_id')->on('careerfields');
            $table->foreign('personality_type_id')->references('personality_type_id')->on('personality_types');
            $table->foreign('stream_id')->references('stream_id')->on('streams');

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
