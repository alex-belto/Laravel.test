@extends('layout.layout')
@section('title')
    Posts
@endsection



@section('main')

    @if(!empty(session('message')))
        {{session('message')}}
    @endif

    <form action="" method="POST">
        @csrf

        <input type="text" name="name" value="{{$post->name}}"><br><br>
        <input type="date" name="date" value="{{$post->date}}"><br><br>
        <textarea name="text" >{{$post->text}}</textarea><br><br>
        <input type="submit" name="submit" value="Отправить">
    </form>
@endsection
