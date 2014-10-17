@extends('layout')

@section('content')
    @foreach($users as $user)
    
    {{ $user->name }} -- 
    {{ $user->email}}

    @endforeach
@stop

