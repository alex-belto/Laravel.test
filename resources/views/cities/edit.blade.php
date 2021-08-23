@extends('layout.layout')

@section('title')
    Task 3 Moder
@endsection



@section('main')

    <form action="" method="POST">
        @csrf
        <input type="text" name="name" value="{{$edit->name}}"><br><br>
        @if(isset($edit -> description))
            <textarea type="text" name="description">{{$edit -> description}}</textarea>
        @endif
        <input type="submit" name="submit" value="Отправить"><br><br>
    </form>

@endsection

