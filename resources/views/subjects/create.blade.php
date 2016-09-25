<!-- /resources/views/tasks/create.blade.php -->
@extends('layouts.app')
 
@section('content')
    <h2>Create Role</h2>
 
	{!! Form::model(new App\Role, ['route' => ['roles.store']]) !!}
        @include('roles/partials/_form', ['submit_text' => 'Create Role'])
    {!! Form::close() !!}
    
@endsection
 
