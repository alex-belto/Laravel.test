@extends('layout.layout')

@section('title')
    Task 3 Citites
@endsection



@section('main')

    <table>
        @foreach($countries as $country)
            <tr>
                <td><a href="/public/cities/{{$country -> id}}">{{$country -> name}}</a></td>
            </tr>
        @endforeach
    </table>
@endsection
