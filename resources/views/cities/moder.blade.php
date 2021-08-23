@extends('layout.layout')

@section('title')
    Task 3 Moder
@endsection



@section('main')
    {{--   {{ dump($with)}}--}}
    <table>
        @foreach($countries as $country)
            <tr>
                <td>{{$country -> name}}</td>
                <td><a href="/public/moderation/edit/country/{{$country -> id}}/">редактировать</a></td>
                <td><a href="/public/moderation/add/city/{{$country -> id}}/">добавить город к стране</a></td>
                <td><a href="/public/moderation/dell/country/{{$country -> id}}/">удалить</a></td>
            </tr>

            @foreach($country-> cities as $city)
                <tr>
                    <td>{{$city -> name}}</td>
                    <td><a href="/public/moderation/edit/city/{{$city -> id}}/">редактировать</a></td>
                    <td><a href="/public/moderation/add/sight/{{$city -> id}}/">добавить достопримеч к городу</a></td>
                    <td><a href="/public/moderation/dell/city/{{$city -> id}}/">удалить</a></td>
                </tr>
                @foreach($country -> sights as $sight)
                    @if($sight -> city_id == $city -> id)
                    <tr>
                        <td>{{$sight -> name}}</td>
                        <td><a href="/public/moderation/edit/sight/{{$sight -> id}}/">редактировать</a></td>
                        <td><a href="/public/moderation/dell/sight/{{$sight -> id}}/">удалить</a></td>
                    </tr>
                    @endif
                @endforeach
            @endforeach


        @endforeach
    </table><br>


@endsection
