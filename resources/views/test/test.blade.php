@extends('layout.layout')

@section('title')
    Posts
    @endsection



@section('main')

{{var_dump($employees)}}

{{--        <teble>--}}

{{--            @foreach($employees as $employee)--}}
{{--                <tr>--}}
{{--                    <td>{{$employee -> name?? ''}}</td>--}}
{{--                    <td>{{$employee -> surname?? ''}}</td>--}}
{{--                    <td>{{$employee -> position?? ''}}</td>--}}
{{--                    <td>{{$employee -> salary?? ''}}</td>--}}
{{--                    <td>{{$employee -> birthday?? ''}}</td>--}}


{{--                </tr>--}}
{{--            @endforeach--}}
{{--        </teble>--}}
@endsection
