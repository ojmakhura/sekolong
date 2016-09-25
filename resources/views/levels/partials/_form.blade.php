<!-- /resources/views/tasks/partials/_form.blade.php -->
<div class="form-group">
    {!! Form::label('code', 'Code:') !!}
    {!! Form::text('code') !!}
    {!! Form::label('level', 'Level:') !!}
    {!! Form::text('level') !!}
</div>

<div class="form-group">
	{!! Form::label('prev_level', 'Prev Level:') !!}
    {!! Form::select('prev_level', $level_array, null) !!}
    
    {!! Form::label('next_level', 'Next Level:') !!}
    {!! Form::select('next_level', $level_array, null) !!}
</div>

<div class="form-group">
	{!! Form::label('description', 'Description') !!}
</div>
<div class="form-group">
    
    {!! Form::textarea('description') !!}
</div>
 
<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>
