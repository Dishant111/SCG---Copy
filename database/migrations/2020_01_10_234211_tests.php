<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Tests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->bigIncrements('test_id');
            $table->unsignedBigInteger('test_type_id');
            $table->string('name');
            $table->string('weightage');
            $table->string('level');
            $table->timestamps();
            $table->foreign('test_type_id')->references('test_type_id')->on('test_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tests');
    }
}
