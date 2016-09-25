@extends('layouts.app')
 
@section('content')
    <h2>Roles</h2>
 
    @if ( !$roles->count() )
        You have no role
    @else
        <ul>
            @foreach( $roles as $role )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('roles.destroy', $role->id))) !!}
                        <a href="{{ route('roles.show', $role->id) }}">{{ $role->role }}</a>
                        (
                            {!! link_to_route('roles.edit', 'Edit', array($role->id), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('roles.create', 'Create Role') !!}
    </p>
@endsection
