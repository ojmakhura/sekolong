<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddConstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('users', function ($table) {
			
            $table->foreign('role_id')->references('id')->on('roles');
		});
		
        Schema::table('students', function ($table) {			
            $table->foreign('start_level')->references('id')->on('levels');
            $table->foreign('end_level')->references('id')->on('levels');
            $table->foreign('current_level')->references('id')->on('levels');
		});
		
        Schema::table('groups', function ($table) {			
            $table->foreign('type_id')->references('id')->on('group_types');
		});
				
        Schema::table('group_instances', function ($table) {			
            $table->foreign('group_id')->references('id')->on('groups');
            $table->foreign('user_id')->references('id')->on('users');
		});
				
        Schema::table('syllabi', function ($table) {
            $table->foreign('level_id')->references('id')->on('levels');
            $table->foreign('subject_id')->references('id')->on('subjects');
            $table->foreign('prev_syllabus')->references('id')->on('syllabi');
            $table->foreign('next_syllabus')->references('id')->on('syllabi');
		});
		
        Schema::table('levels', function ($table) {			
            $table->foreign('next_level')->references('id')->on('levels');
            $table->foreign('prev_level')->references('id')->on('levels');
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
