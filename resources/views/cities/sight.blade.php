@extends('layout.layout')

@section('title')
    Task 3 Citites
@endsection



@section('main')
    <table>
            <tr>
                <td>{{$sight -> name}}</td>
            </tr>
            <tr>
                <td>{{$sight -> description}}</td>
            </tr>
    </table>
@endsection
