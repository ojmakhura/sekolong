@extends('layouts.app')
 
@section('content')

	<div class="form-group">
		{{$student->student_id}}
	</div>
	
	<div class="form-group">
		{{$student->surname}}
	</div>
	
	<div class="form-group">
		{{$student->name}}
		{{$student->middle_name}}
	</div>
@endsection
