<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Syllabus;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;

class SyllabusController extends Controller
{
    protected $rules = [		
			'code' => 'required|max:4',
            'syllabus' => 'required|max:100',
            'description' => 'required',
	];
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$syllabi = Syllabus::all();
		return view('syllabi.index', compact('syllabi'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{		
		return view('syllabi.create');
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
		Syllabus::create($input);
		
		return Redirect::route('syllabi.index')->with('message', 'Syllabus created');
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Syllabus $syllabus
	 * @return Response
	 */
	public function show(Syllabus $syllabus)
	{
		return view('syllabi.show', compact('syllabus'));
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Syllabus $syllabus
	 * @return Response
	 */
	public function edit(Syllabus $syllabus)
	{	
		return view('syllabi.edit', compact('syllabus'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Syllabus $syllabus
	 * @return Response
	 */
	public function update(Syllabus $syllabus, Request $request)
	{
		$this->validate($request, $this->rules);
		
		$input = array_except(Input::all(), '_method');
		$syllabus->update($input);
		
		return Redirect::route('syllabi.show', $syllabus)->with('message', 'Syllabus updated.');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Syllabus $syllabus
	 * @return Response
	 */
	public function destroy(Syllabus $syllabus)
	{
		$syllabus->delete();
		
		return Redirect::route('syllabi.index')->with('message', 'Syllabus removed');;
	}
}
