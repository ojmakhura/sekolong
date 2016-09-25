<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;

class UserController extends Controller
{
    protected $rules = [		
			'code' => 'required|max:4',
            'user' => 'required|max:100',
            'description' => 'required',
	];
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users = User::all();
		return view('users.index', compact('users'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('users.create');
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
		User::create($input);
		
		return Redirect::route('users.index')->with('message', 'User created');
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\User $user
	 * @return Response
	 */
	public function show(User $user)
	{
		return view('users.show', compact('user'));
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\User $user
	 * @return Response
	 */
	public function edit(User $user)
	{
		return view('users.edit', compact('user'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\User $user
	 * @return Response
	 */
	public function update(User $user, Request $request)
	{
		$this->validate($request, $this->rules);
		
		$input = array_except(Input::all(), '_method');
		$user->update($input);
		
		return Redirect::route('users.show', $user)->with('message', 'User updated.');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\User $user
	 * @return Response
	 */
	public function destroy(User $user)
	{
		$user->delete();
		
		return Redirect::route('users.index')->with('message', 'User removed');;
	}
}
