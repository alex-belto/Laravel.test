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
                <td>{{$user-> role -> name}}</td>
            </tr>
{{--            <tr>--}}
{{--                <td>{{$user-> email}}</td>--}}
{{--            </tr>--}}
        </table>
    @endif

    @if(isset($users))


        <table>
            @foreach($users as $user)

                <tr>
                    <td>{{$user-> login}}</td>
                </tr>


{{--                    <tr>--}}
{{--                        <td>{{$user-> name}}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>{{$user-> surname}}</td>--}}
{{--                    </tr>--}}
{{--                    <tr>--}}
{{--                        <td>{{$user-> email}}</td>--}}
{{--                    </tr>--}}

                    @foreach($user -> roles as $role)
                            <tr>
                                <td>{{$role -> name}}</td>
                            </tr>
                    @endforeach


            @endforeach
        </table>
    @endif
@endsection
