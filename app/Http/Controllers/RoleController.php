<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;

class RoleController extends Controller
{
	protected $rules = [		
			'code' => 'required|max:4',
            'role' => 'required|max:100',
            'description' => 'required',
	];
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$roles = Role::all();
		return view('roles.index', compact('roles'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('roles.create');
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
		Role::create($input);
		
		return Redirect::route('roles.index')->with('message', 'Role created');
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function show(Role $role)
	{
		return view('roles.show', compact('role'));
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Role $role
	 * @return Response
	 */
	public function edit(Role $role)
	{
		return view('roles.edit', compact('role'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\ole $role
	 * @return Response
	 */
	public function update(Role $role, Request $request)
	{
		$this->validate($request, $this->rules);
		
		$input = array_except(Input::all(), '_method');
		$role->update($input);
		
		return Redirect::route('roles.show', $role)->with('message', 'Role updated.');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Project $project
	 * @return Response
	 */
	public function destroy(Role $role)
	{
		$role->delete();
		
		return Redirect::route('roles.index')->with('message', 'Role removed');;
	}
}
