@extends('layout.layout')

@section('title')
    categories
@endsection


@section('main')

    @foreach($categories[$category_id]['products'] as $key=>$product)
        <div class="info">
            <a href="/public/product/{{$category_id}}/{{$key}}"><span class="name">{{$product['name']}}</span></a>
            <span class="cost">{{$product['cost']}}</span>
            <span class="desc">{{$product['desc']}}</span>
            @if($product['inStock'] == true)
                <span class="category">Есть в наличии</span>
            @elseif($product['inStock'] == false)
                <span class="category">Нет в наличии</span>

            @endif
        </div>
    @endforeach

@endsection
