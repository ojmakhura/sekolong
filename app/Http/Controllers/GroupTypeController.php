<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\GroupType;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;

class GroupTypeController extends Controller
{
    protected $rules = [		
			'code' => 'required|max:4',
            'groupType' => 'required|max:100',
            'description' => 'required',
	];
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$groupTypes = GroupType::all();
		return view('group_types.index', compact('groupTypes'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('group_types.create');
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
		GroupType::create($input);
		
		return Redirect::route('group_types.index')->with('message', 'GroupType created');
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\GroupType $groupType
	 * @return Response
	 */
	public function show(GroupType $groupType)
	{
		return view('group_types.show', compact('groupType'));
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\GroupType $groupType
	 * @return Response
	 */
	public function edit(GroupType $groupType)
	{
		return view('group_types.edit', compact('groupType'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\GroupType $groupType
	 * @return Response
	 */
	public function update(GroupType $groupType, Request $request)
	{
		$this->validate($request, $this->rules);
		
		$input = array_except(Input::all(), '_method');
		$groupType->update($input);
		
		return Redirect::route('group_types.show', $groupType)->with('message', 'GroupType updated.');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\GroupType $groupType
	 * @return Response
	 */
	public function destroy(GroupType $groupType)
	{
		$groupType->delete();
		
		return Redirect::route('group_types.index')->with('message', 'GroupType removed');;
	}
}
