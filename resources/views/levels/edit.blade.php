<!-- /resources/views/tasks/edit.blade.php -->
@extends('layouts.app')
 
@section('content')
    <h2>Edit Level "{{ $level->level }}"</h2>
 
	{!! Form::model($level, ['method' => 'PATCH', 'route' => ['levels.update', $level->id]]) !!}
        @include('levels/partials/_form', ['submit_text' => 'Edit Level'])
    {!! Form::close() !!}
    
@endsection
