@extends('layout')

@section('content')
<div style="text-align: center;">
    <ol>
        @foreach($users as $user)
        <li>            
            {{ $user->name }}
            {{ $user->email}}
        </li>
        @endforeach
    </ol>
</div>
@stop

