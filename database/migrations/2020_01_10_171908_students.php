<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Students extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('student_id')->unique();
            $table->string('parent_id');
            $table->string('fname');
            $table->string('lname')->nullable();

            $table->string('email')->unique()->nullable();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('DOB')->nullable();
            $table->integer('contact')->unsigned()->nullable();
            // $table->rememberToken();
            $table->timestamps();
            $table->primary('student_id');
            $table->foreign('parent_id')->references('parent_id')->on('parents')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
