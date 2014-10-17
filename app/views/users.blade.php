@extends('layout')

@section('content')
<ol style="text-align: center;">
    @foreach($users as $user)
    <li style="text-align: center;">            
        {{ $user->name }} -- 
        {{ $user->email}}
    </li>
    @endforeach
</ol>
@stop

