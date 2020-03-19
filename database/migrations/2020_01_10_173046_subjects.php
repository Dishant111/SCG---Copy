<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Subjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->bigIncrements('subject_id');
            $table->string('name', 255);
            $table->unsignedBigInteger('classes_id');
            // $table->unsignedBigInteger('stream_id');
            $table->string('description', 255)->nullable();
            $table->foreign('classes_id')->references('classes_id')->on('classes');
            // $table->foreign('stream_id')->references('stream_id')->on('streams');
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
        Schema::dropIfExists('subjects');
    }
}
