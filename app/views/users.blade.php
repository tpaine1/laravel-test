@extends('layout')

@section('content')
<div style="text-align: center;">
    <table>
        @foreach($users as $user)
            <!--<p>-->
        <tr>
            <td></td>
            <td>
                {{ $user->id }}.
                {{ $user->name}}
            </td>
            <td>
                {{ $user->email }}
            </td>
            <td></td>
        </tr>           
        <!--</p>-->
        @endforeach
    </table>
</div>
@stop

