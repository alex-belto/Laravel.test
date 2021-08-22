@extends('layout.layout')

@section('title')
    Task 2 Callboard
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
                <td>{{$post->date}}</br></br></br></br></td>
            </tr>
        @endforeach
    </table><br><br><br>
@endsection

@section('footer')
    <form action="" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="date" name="date" ><br><br>
        <textarea name="text" placeholder="Text"></textarea><br><br>
        <input type="submit" name="submit" value="Отправить">
    </form>
@endsection
