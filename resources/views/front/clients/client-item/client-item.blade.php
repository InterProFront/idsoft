@include('front.clients.client-item.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content client dashed-bottom">
        <div class="bread-crumb">
            <span class="crumb-item"><a href="/clients">Клиенты</a></span>
            <span class="crumb-separate">→</span>
            @foreach($filter->institution_group as $item)
                @if($item->id_field == $client->institution_type_field)
                    <span class="crumb-item"><a href="/clients/all/{{$client->institution_type_field}}">{{$item->seo_keywords_field}}</a></span>
                @endif
            @endforeach
        </div>
        <h1 class="block-title">{{$client->page_name_field}}</h1>
        <div class="title-image">
            <img src="/images/{{$client->background_image->primary_link}}" alt="{{$client->background_image->alt}}">
        </div>
        <div class="main-content-grid">
            <div class="col-1-2">
                <div class="text-block">
                    {!! $client->content_field !!}
                </div>
            </div>
            <div class="col-1-2">
                <div class="other-places">
                    <p class="menu-title">Другие заведения</p>
                    <ul class="places-list">
                        @foreach($all as $item)
                            @if ($item->page_name_field != $client->page_name_field)
                            <li class="item"><a href="/clients/{{$item->slug_field}}">{{$item->page_name_field}}</a></li>
                            @endif
                        @endforeach
                        @foreach($filter->institution_group as $item)
                            @if($item->id_field == $client->institution_type_field)
                                <li class="item"><a href="/clients/all/{{$item->id_field}}" class="bold">Все {{$all->count()}} {{$item->page_title_field}}</a></li>
                            @endif
                        @endforeach

                    </ul>
                </div>
                <div class="recommend-letter">
                    <a href="/images/{{$client->letter_image->primary_link}}">
                        <div class="image-wrap frame">
                            <img src="/images/{{$client->letter_image->frame_crop->link}}" alt="{{$client->letter_image->alt}}">
                        </div>
                        <p><span>Рекомендательное письмо {{$client->page_name_field}}</span></p>
                    </a>
                </div>
            </div>
        </div>
        <div class="block-separator">
            <div class="separator dashed"></div>
        </div>
        <div class="equipment-block">
            <div class="block-title">
                <h2 class="sub-title">Комплектация</h2>
                <div class="products-list">

                    @foreach($product as $item_prod)
                        @foreach($client->client_related_group as $rel)
                            @if($item_prod->id_field == $rel->product_field)
                                <div class="product-item">
                                    <a href="{{$item_prod->title_field}}">
                                        <div class="img-wrap">
                                            <img src="/images/{{$item_prod->product_base_photo_image->icon_link}}" alt="{{$item_prod->product_base_photo_image->alt}}">
                                        </div>
                                        <div class="text-wrap">
                                            <p class="wrap">
                                                <span>{{$item_prod->product_name_field}}</span>
                                            </p>
                                            <p class="cost">{{ number_format($item_prod->product_cost_field,0,'',' ') }} тг  @if($item_prod->product_sale_field != 0)<span class="sale">{{ number_format($item_prod->product_sale_field,0,'',' ') }} тг</span>@endif</p>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection