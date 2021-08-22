@extends('layout.layout')

@section('title')
    Posts
@endsection



@section('main')

    @if(!empty(session('message')))
        {{session('message')}}
    @endif

    <table>
        @foreach($posts as $post)
            <tr>
                <td>{{$post->text}}</td>
            </tr>
            <tr>
                <td>{{$post->name}}</td>
            </tr>
            <tr>
                <td>{{$post->date}}</td>
            </tr>
            <tr>
                <td><a href="/public/wall/delete/{{$post->id}}">Удалить</a></td>
            </tr>
            <tr>
                <td><a href="/public/wall/edit/{{$post->id}}">Редактировать</a><br><br><br><br></td>
            </tr>
        @endforeach
    </table><br><br><br>
@endsection



