@extends('layout.layout')

@section('title')
    Task 3 Citites
@endsection



@section('main')
    <table>
        @foreach($sights as $sight)
            <tr>
                <td><a href="/public/sight/{{$sight -> id}}">{{$sight -> name}}</a></td>
            </tr>
        @endforeach
    </table>
@endsection
