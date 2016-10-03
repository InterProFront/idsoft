@include('front.catalog.category.meta')
@extends('front.layout')
@section('content')
    <?php $shadow = true; ?>
    {{----}}
    <section class="content category dashed-bottom">
        <h1 class="block-title">{{$products->category_name_field}}</h1>
        <div class="product-list">
            @foreach($products->product_group as $item)
                <div class="product-item">
                    <a href="{{$products->slug_field}}/{{$item->slug_field}}">
                        <div class="img-wrap">
                            <img src="/images/{{$item->product_base_photo_image->icon_link}}" alt="{{$item->product_base_photo_image->alt}}">
                        </div>
                        <div class="text-wrap">
                            <p class="wrap"><span>{{$item->product_name_field}}</span></p>
                            <p class="about-product">{{$item->small_description_field}}</p>
                            <p class="cost">{{ number_format($item->product_cost_field,0,'',' ') }} тг @if($item->product_sale_field != 0)<span class="sale">{{ number_format($item->product_sale_field,0,'',' ') }} тг</span>@endif</p>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
@endsection
