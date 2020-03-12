<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Parents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parents', function (Blueprint $table) {
            // $table->bigIncrements('id');
            $table->string('parent_id')->unique();
            $table->string('fname');
            $table->string('lname')->nullable();
            $table->string('email')->unique()->nullable();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('contact')->unsigned()->nullable();
            $table->rememberToken();
            $table->primary('parent_id');
            $table->timestamps();
            // $table->primary('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parents');
    }
}
