<!-- /resources/views/tasks/create.blade.php -->
@extends('layouts.app')
 
@section('content')
    <h2>Create Level</h2>
 
	{!! Form::model(new App\Level, ['route' => ['levels.store']]) !!}
        @include('levels/partials/_form', ['submit_text' => 'Create Level'])
    {!! Form::close() !!}
    
@endsection
 
