@extends('layout.layout')

@section('title')
    Posts
@endsection



@section('main')


    @if(isset($post))

        <table>
            <tr>
                <td>{{$post-> title}}</td>
            </tr>
            <tr>
                <td>{{$post-> text}}</td>
            </tr>
        </table>
        @endif

    @if(isset($posts))
            @if(!empty(session('message')))
        <p>{{session('message').', id записи - '.session('id').', title записи - '.session('title')}}</p>
            @endif

    <table>
        @foreach($posts as $post)


            <tr>
                <td><a href="/public/post/{{$post->id}}">{{$post-> title}}</a></td>
                <td>{{$post-> desc}}</td>
                <td><a href="/public/post/edit/{{$post->id}}">редактировать</a></td>
                <td><a href="/public/post/del/{{$post->id}}">удалить</a></td>

            </tr>
        @endforeach
    </table>
    @endif
@endsection
