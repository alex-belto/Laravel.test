
    @extends ('layout.layout')

    @section('title')
        ShowAll
    @endsection

    @section('main')

        @foreach($categories as $key => $post)

            {{$categoryName = $post['name']}}

            @foreach($post as $key=> $product)
                <div class="info">
                    <span class="name">{{$product['name']}}</span>
                    <span class="cost">{{$product['cost']}}</span>
                    <span class="desc">{{$product['desc']}}</span>
                    <span class="category">{{$categoryName}}</span>
                    @if($product['inStock'])
                        <span class="category">{{$categoryName}}</span>
                    @endif
                </div>
            @endforeach

        @endforeach

     @endsection
