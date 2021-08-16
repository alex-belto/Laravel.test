@extends('layout.layout')



@section('title')
    result
@endsection



@section('main')
    <p>Metod:</p>{{$method?? ''}}<br>
    {{$num1?? ''}}
    @if(isset($data))
        <ul>
            @foreach($data as $inp)
                <li>{{$inp}}</li>
            @endforeach
        </ul>
    @endif

@endsection
