@extends('layout')

@section('content')
<table>
    @foreach($users as $user)
        <!--<p>-->
        <tr>
            <td style="width: 100px;">
                {{ $user->name}}
            </td>
            <td style="width: 100px;">
                {{ $user->email }}
            </td>
        </tr>           
        <!--</p>-->
    @endforeach
</table>
@stop

