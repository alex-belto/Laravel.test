@extends('layout.layout')


    @section('title')
        categoryList
    @endsection


    @section('main')

        @foreach($categories as $key => $category)
            <div class="info">

                <a href="/public/product/{{$key}}"><span class="name">{{$category['name']}}</span></a>
                <span class="quantity">Кол-во товара:{{count($category['products'])}}</span>

            </div>
        @endforeach


    @endsection
