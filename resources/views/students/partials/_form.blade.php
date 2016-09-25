<!-- /resources/views/tasks/partials/_form.blade.php -->
<div class="form-group">
    {!! Form::label('student_id', 'Student ID:') !!}
    {!! Form::text('student_id') !!}
    {!! Form::label('birth_certificate', 'Birth Certificate:') !!}
    {!! Form::text('birth_certificate') !!}
</div>
 
<div class="form-group">
    {!! Form::label('surname', 'Surname:') !!}
    {!! Form::text('surname') !!}
</div>

<div class="form-group">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! Form::text('first_name') !!}
    {!! Form::label('middle_name', 'Middle Name:') !!}
    {!! Form::text('middle_name') !!}
</div>
 
<div class="form-group">
    {!! Form::label('dob', 'DOB:') !!}
    {!! Form::date('dob') !!}
</div>

<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>
