<?php

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
            $table->timestamps();
            $table->binary('photo');
            $table->integer('role_id')->unsigned();
            $table->string('username')->unique();
            $table->string('user_id')->unique();
            $table->string('surname');
            $table->string('name');
            $table->string('middle_name');
            $table->string('email')->unique();            
            $table->string('password', 60);
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
