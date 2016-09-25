<!-- /resources/views/tasks/create.blade.php -->
@extends('layouts.app')
 
@section('content')
    <h2>Create Student</h2>
 
	{!! Form::model(new App\Student, ['route' => ['students.store']]) !!}
        @include('students/partials/_form', ['submit_text' => 'Create Student'])
    {!! Form::close() !!}
    
@endsection
 
