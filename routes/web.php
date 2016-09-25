<?php

use App\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * ---------------------------------------------------------------------
 * Role Routes
 * ---------------------------------------------------------------------
 */
 
Route::model('roles', 'Role');
Route::resource('roles', 'RoleController');

/**
 * ---------------------------------------------------------------------
 * Level Routes
 * ---------------------------------------------------------------------
 */
 
Route::model('levels', 'Level');
Route::resource('levels', 'LevelController');

/**
 * ---------------------------------------------------------------------
 * Group Routes
 * ---------------------------------------------------------------------
 */
 
Route::model('groups', 'Group');
Route::resource('groups', 'GroupController');

/**
 * ---------------------------------------------------------------------
 * Group Instance Routes
 * ---------------------------------------------------------------------
 */
 
Route::model('group_instances', 'GroupInstance');
Route::resource('group_instances', 'GroupInstanceController');

/**
 * ---------------------------------------------------------------------
 * Group Type Routes
 * ---------------------------------------------------------------------
 */
 
Route::model('group_types', 'GroupType');
Route::resource('group_types', 'GroupTypeController');

/**
 * ---------------------------------------------------------------------
 * Student Routes
 * ---------------------------------------------------------------------
 */
 
Route::model('students', 'Student');
Route::resource('students', 'StudentController');

/**
 * ---------------------------------------------------------------------
 * Subject Routes
 * ---------------------------------------------------------------------
 */
 
Route::model('subjects', 'Subject');
Route::resource('subjects', 'SubjectController');

/**
 * ---------------------------------------------------------------------
 * Syllabus Routes
 * ---------------------------------------------------------------------
 */
 
Route::model('syllabi', 'Syllabus');
Route::resource('syllabi', 'SyllabusController');

/**
 * ---------------------------------------------------------------------
 * User Routes
 * ---------------------------------------------------------------------
 */
 
Route::model('users', 'User');
Route::resource('users', 'UserController');
