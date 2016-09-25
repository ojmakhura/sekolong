@extends('layouts.app')
 
@section('content')
    <h2>Levels</h2>
 
    @if ( !$levels->count() )
        No levels have been created yet.
    @else
        <ul>
            @foreach( $levels as $level )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('levels.destroy', $level->id))) !!}
                        <a href="{{ route('levels.show', $level->id) }}">{{ $level->level }}</a>
                        (
                            {!! link_to_route('levels.edit', 'Edit', array($level->id), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('levels.create', 'Create Level') !!}
    </p>
@endsection
