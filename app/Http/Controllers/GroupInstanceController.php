<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\GroupInstance;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;

class GroupInstanceController extends Controller
{
    protected $rules = [		
			'code' => 'required|max:4',
            'groupInstance' => 'required|max:100',
            'description' => 'required',
	];
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$group_instances = GroupInstance::all();
		return view('group_instances.index', compact('group_instances'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('group_instances.create');
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
		GroupInstance::create($input);
		
		return Redirect::route('group_instances.index')->with('message', 'GroupInstance created');
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\GroupInstance $groupInstance
	 * @return Response
	 */
	public function show(GroupInstance $groupInstance)
	{
		return view('group_instances.show', compact('groupInstance'));
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\GroupInstance $groupInstance
	 * @return Response
	 */
	public function edit(GroupInstance $groupInstance)
	{
		return view('group_instances.edit', compact('groupInstance'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\GroupInstance $groupInstance
	 * @return Response
	 */
	public function update(GroupInstance $groupInstance, Request $request)
	{
		$this->validate($request, $this->rules);
		
		$input = array_except(Input::all(), '_method');
		$groupInstance->update($input);
		
		return Redirect::route('group_instances.show', $groupInstance)->with('message', 'GroupInstance updated.');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\GroupInstance $groupInstance
	 * @return Response
	 */
	public function destroy(GroupInstance $groupInstance)
	{
		$groupInstance->delete();
		
		return Redirect::route('group_instances.index')->with('message', 'GroupInstance removed');;
	}
}
