<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('student_id')->unique();
            $table->string('surname');
            $table->string('first_name');
            $table->string('middle_name');
            $table->date('dob');
            $table->string('birth_certificate')->unique();
            $table->string('nationality');
            $table->string('primary_language');
            $table->string('notable_features')->nullable();
            $table->date('start_date');
            $table->date('leave_date');
            $table->integer('start_level')->unsigned();
            $table->integer('end_level')->unsigned();
            $table->integer('current_level')->unsigned();
            $table->text('leave_reason');
        });
        
        
        Schema::create('levels', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('code')->unique();
            $table->string('level');
            $table->text('description');
            $table->integer('prev_level')->unsigned();
            $table->integer('next_level')->unsigned();
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
        Schema::drop('students');
        Schema::drop('levels');
    }
}
