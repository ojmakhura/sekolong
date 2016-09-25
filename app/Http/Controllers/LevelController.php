<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Level;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Redirect;

class LevelController extends Controller
{
    protected $rules = [		
			'code' => 'required|max:4',
            'level' => 'required|max:100',
            'description' => 'required',
	];
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$levels = Level::all();
		return view('levels.index', compact('levels'));
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		$level_list = Level::all();
		$level_array[null] = 'Select';
		
		foreach ($level_list as $lv) {
			$level_array[$lv->id] = $lv->level;
		}
		
		return view('levels.create', compact('level_array'));
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
		Level::create($input);
		
		return Redirect::route('levels.index')->with('message', 'Level created');
	}
 
	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Level $level
	 * @return Response
	 */
	public function show(Level $level)
	{
		return view('levels.show', compact('level'));
	}
 
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Level $level
	 * @return Response
	 */
	public function edit(Level $level)
	{
		$level_list = Level::all();
		$level_array;//[0] = 'Select';
		
		foreach ($level_list as $lv) {
			$level_array[$lv->id] = $lv->level;
		}
		
		return view('levels.edit', compact('level', 'level_array'));
	}
 
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \App\Level $level
	 * @return Response
	 */
	public function update(Level $level, Request $request)
	{
		$this->validate($request, $this->rules);
		
		$input = array_except(Input::all(), '_method');
		$level->update($input);
		
		return Redirect::route('levels.show', $level)->with('message', 'Level updated.');
	}
 
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Level $level
	 * @return Response
	 */
	public function destroy(Level $level)
	{
		$level->delete();
		
		return Redirect::route('levels.index')->with('message', 'Level removed');;
	}
}
