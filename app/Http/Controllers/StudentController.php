<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;

class StudentController extends Controller
{
    protected $rules = [		
			'code' => 'required|max:4',
            'student' => 'required|max:100',
            'description' => 'required',
	];
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$students = Student::all();
		return view('students.index', compact('students'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{		
		return view('students.create', compact('student_array'));
	}
 
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$this->validate($request, $this->rules);
		
		$input = Input::all();
		Student::create($input);
		
		return Redirect::route('students.index')->with('message', 'Student created');
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Student $student
	 * @return Response
	 */
	public function show(Student $student)
	{
		return view('students.show', compact('student'));
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Student $student
	 * @return Response
	 */
	public function edit(Student $student)
	{		
		return view('students.edit', compact('student', 'student_array'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Student $student
	 * @return Response
	 */
	public function update(Student $student, Request $request)
	{
		$this->validate($request, $this->rules);
		
		$input = array_except(Input::all(), '_method');
		$student->update($input);
		
		return Redirect::route('students.show', $student)->with('message', 'Student updated.');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Student $student
	 * @return Response
	 */
	public function destroy(Student $student)
	{
		$student->delete();
		
		return Redirect::route('students.index')->with('message', 'Student removed');;
	}
}
