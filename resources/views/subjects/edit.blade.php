<!-- /resources/views/tasks/edit.blade.php -->
@extends('layouts.app')
 
@section('content')
    <h2>Edit Role "{{ $role->role }}"</h2>
 
    {!! Form::model($role, ['method' => 'PATCH', 'route' => ['roles.update', $role->id]]) !!}
        @include('roles/partials/_form', ['submit_text' => 'Edit Role'])
    {!! Form::close() !!}
@endsection
