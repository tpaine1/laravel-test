@extends('layout')

@section('content')
<table>
    @foreach($users as $user)
        <!--<p>-->
        <tr>
            <td style="width: 50%;">
                {{ $user->name}}
            </td>
            <td style="width: 50%;">
                {{ $user->email }}
            </td>
        </tr>           
        <!--</p>-->
    @endforeach
</table>
@stop

