@extends('layout.layout')

@section('title')
    Task 3 Citites
@endsection



@section('main')
    <table>
        @foreach($cities as $city)
            <tr>
                <td><a href="/public/sights/{{$city -> id}}">{{$city -> name}}</a></td>
            </tr>
        @endforeach
    </table>
@endsection

