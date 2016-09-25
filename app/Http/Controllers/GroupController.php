<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Group;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;

class GroupController extends Controller
{
    protected $rules = [		
			'code' => 'required|max:4',
            'Group' => 'required|max:100',
            'description' => 'required',
	];
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$groups = Group::all();
		return view('groups.index', compact('groups'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('groups.create');
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
		Group::create($input);
		
		return Redirect::route('groups.index')->with('message', 'Group created');
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Group $Group
	 * @return Response
	 */
	public function show(Group $Group)
	{
		return view('groups.show', compact('Group'));
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Group $Group
	 * @return Response
	 */
	public function edit(Group $Group)
	{
		return view('groups.edit', compact('Group'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Group $Group
	 * @return Response
	 */
	public function update(Group $Group, Request $request)
	{
		$this->validate($request, $this->rules);
		
		$input = array_except(Input::all(), '_method');
		$Group->update($input);
		
		return Redirect::route('groups.show', $Group)->with('message', 'Group updated.');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Group $Group
	 * @return Response
	 */
	public function destroy(Group $Group)
	{
		$Group->delete();
		
		return Redirect::route('groups.index')->with('message', 'Group removed');;
	}
}
