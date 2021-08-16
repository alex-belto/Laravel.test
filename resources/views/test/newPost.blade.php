@extends('layout.layout')

@section('title')
    NewPost
@endsection



@section('main')


    <form action="" method="POST">
        @csrf
        <p>title</p>
        <input name='title' type="text"><br>
        <p>desc</p>
        <input name='desc' type="text"><br>
        <p>text</p>
        <textarea name='text' ></textarea><br>
        <p>date</p>
        <input name='date' type="date"><br><br>
        <input name='submit' type="submit" value="Отправить"><br>
    </form>

@endsection
