<!-- /resources/views/tasks/partials/_form.blade.php -->
<div class="form-group">
    {!! Form::label('code', 'Code:') !!}
    {!! Form::text('code') !!}
    {!! Form::label('role', 'Role:') !!}
    {!! Form::text('role') !!}
</div>
  
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}
</div>
 
<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>
