@extends('layout')

@section('content')
<table style="width: 100%; text-align: center;">
    @foreach($users as $user)
        <!--<p>-->
    <tr>
        <td style="width: 25%;"></td>
        <td style="width: 25%;">
            {{ $user->id }}.
            {{ $user->name}}
        </td>
        <td style="width: 25%;">
            {{ $user->email }}
        </td>
        <td style="width: 25%;"></td>
    </tr>           
    <!--</p>-->
    @endforeach
</table>
@stop

