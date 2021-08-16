@extends('layout.layout')

@section('title')
    Posts
@endsection



@section('main')


    @if(isset($user))

        <table>
            <tr>
                <td>{{$user-> name}}</td>
            </tr>
            <tr>
                <td>{{$user-> surname}}</td>
            </tr>
            <tr>
                <td>{{$user-> email}}</td>
            </tr>
        </table>
    @endif

    @if(isset($users))
        @if(!empty(session('message')))
            <p>{{session('message').', id записи - '.session('id').', title записи - '.session('title')}}</p>
        @endif

        <table>
            @foreach($users as $user)
            {{var_dump($user)}}


                    <tr>
                        <td>{{$user-> name}}</td>
                    </tr>
                    <tr>
                        <td>{{$user-> surname}}</td>
                    </tr>
                    <tr>
                        <td>{{$user-> email}}</td>
                    </tr>

            @endforeach
        </table>
    @endif
@endsection
