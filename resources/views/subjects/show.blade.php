@extends('layouts.app')
 
@section('content')
     
    {{ $role->code }}
    {{ $role->role }}
    {{ $role->description }}
@endsection
