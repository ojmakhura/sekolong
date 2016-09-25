<!-- /resources/views/tasks/edit.blade.php -->
@extends('layouts.app')
 
@section('content')
    <h2>Edit Student "{{ $student->student_id }}"</h2>
 
    {!! Form::model($student, ['method' => 'PATCH', 'route' => ['students.update', $student->id]]) !!}
        @include('students/partials/_form', ['submit_text' => 'Edit Student'])
    {!! Form::close() !!}
@endsection
