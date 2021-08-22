@extends('layout.layout')

@section('title')
    Posts
@endsection



@section('main')

    @if(!empty(session('message')))
        {{session('message')}}
    @endif

    <table>
        @foreach($categories as $category)
            <tr>
                <td><a href="/public/board/ads/{{$category->id}}">{{$category->name}}</a></td>
            </tr>

        @endforeach
    </table><br><br><br>
@endsection

