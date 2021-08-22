@extends('layout.layout')

@section('title')
    Task 2 Callboard
@endsection



@section('main')

    @if(!empty(session('message')))
        {{session('message')}}
    @endif

    <table>
        @foreach($ads as $ad)
            <tr>
                <td>{{$ad->text}}</br></td>
            </tr>
            <tr>
                <td>{{$ad->name}}</br></td>
            </tr>
            <tr>
                <td>{{$ad->date}}</br></br></td>
            </tr>

        @endforeach
    </table><br><br><br>
@endsection

@section('footer')
    <form action="" method="POST">
        @csrf
        <textarea name="text" placeholder="Text"></textarea><br><br>
        <input type="text" name="name" placeholder="name"><br><br>
        <input type="date" name="date" ><br><br>
        <input type="submit" name="submit" value="Отправить">
    </form>
@endsection
