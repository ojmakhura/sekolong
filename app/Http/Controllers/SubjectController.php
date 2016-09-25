<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;

class SubjectController extends Controller
{
    protected $rules = [		
			'code' => 'required|max:4',
            'subject' => 'required|max:100',
            'description' => 'required',
	];
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$subjects = Subject::all();
		return view('subjects.index', compact('subjects'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{		
		return view('subjects.create');
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
		Subject::create($input);
		
		return Redirect::route('subjects.index')->with('message', 'Subject created');
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Subject $subject
	 * @return Response
	 */
	public function show(Subject $subject)
	{
		return view('subjects.show', compact('subject'));
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Subject $subject
	 * @return Response
	 */
	public function edit(Subject $subject)
	{		
		return view('subjects.edit', compact('subject'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Subject $subject
	 * @return Response
	 */
	public function update(Subject $subject, Request $request)
	{
		$this->validate($request, $this->rules);
		
		$input = array_except(Input::all(), '_method');
		$subject->update($input);
		
		return Redirect::route('subjects.show', $subject)->with('message', 'Subject updated.');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Subject $subject
	 * @return Response
	 */
	public function destroy(Subject $subject)
	{
		$subject->delete();
		
		return Redirect::route('subjects.index')->with('message', 'Subject removed');;
	}
}
