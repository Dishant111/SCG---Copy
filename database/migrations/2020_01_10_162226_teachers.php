<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Teachers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('teacher_id')->unique();
            $table->string('fname');
            $table->string('lname')->nullable();
            // $table->string('teacher_id')->unique();
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('contact')->unsigned()->nullable();
            // $table->rememberToken();
            $table->timestamps();
            $table->primary('teacher_id');
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
        Schema::dropIfExists('teachers');
    }
}
