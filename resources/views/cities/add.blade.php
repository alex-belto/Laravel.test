@extends('layout.layout')

@section('title')
    Task 3 Moder
@endsection



@section('main')

    <form action="" method="POST">
        @csrf

        <input type="text" name="name" placeholder="name"><br><br>
        <input type="text" name="description" value="text"><br><br>
        <input type="submit" name="submit" value="Отправить"><br><br>
    </form>

@endsection
