@extends('layout')

@section('content')
<ol style="text-align: center;">
    @foreach($users as $user)
    <li>            
        {{ $user->name }} -- 
        {{ $user->email}}
    </li>
    @endforeach
</ol>
@stop

