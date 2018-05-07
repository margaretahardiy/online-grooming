<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email',320);
            $table->string('password');
            $table->string('mobile_number')->nullable();
            $table->string('address')->nullable();
            $table->string('home_number')->nullable();
            $table->string('work_number')->nullable();
            $table->timestamps();
        });

        Schema::create('dogs', function (Blueprint$table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('breed');
            $table->string('photo')->nullable();
            $table->date('date_of_birth');
            $table->timestamps();
        });

        Schema::table('dogs', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });     
        
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->string('comment')->nullable();
            $table->datetime('date_time')->nullable();
            $table->tinyInteger('send_reminder');
        });


        Schema::table('appointments', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedInteger('dog_id');
            $table->foreign('dog_id')->references('id')->on('dogs');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
