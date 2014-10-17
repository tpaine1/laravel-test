@extends('layout')

@section('content')
<table>
    @foreach($users as $user)
        <!--<p>-->
        <tr>
            <td>
                {{ $user->name}}
            </td>
            <td>
                {{ $user-email }}
            </td>
        </tr>           
        <!--</p>-->
    @endforeach
</table>
@stop

