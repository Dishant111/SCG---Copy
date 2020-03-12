<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('admin_id')->unique();
            $table->string('fname');
            $table->string('lname')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('contact')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->primary('admin_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
