@extends('layout.layout')

@section('title')
    Products
@endsection



@section('main')

    @if(isset($categories))
        <table>
            @foreach($categories as $category)


                <tr>
                    <td>{{$category-> name}}</td>
                </tr>
                @foreach($category -> events as $event)

                    <tr>
                        <td> {{$event -> name}}</td>

                    </tr>
{{--                    <tr>--}}
{{--                        <td>{{$category-> products -> name}}</td>--}}
{{--                    </tr>--}}
                @endforeach


            @endforeach
        </table>
    @endif

        @if(isset($products))
        <table>
            @foreach($products as $product)

                <tr>
                    <td> {{$product -> category ->name}}</td>

                </tr>



                <tr>
                    <td>{{$product-> name}}</td>
                </tr>
                <tr>
                    <td>{{$product-> price}}</td>
                </tr>
                <tr>
                    <td>{{$product-> quantity}}</td>
                </tr>
                <tr>
                    <td>{{$product-> description}}</td>
                </tr>

                @endforeach
        </table>
        @endif
@endsection
