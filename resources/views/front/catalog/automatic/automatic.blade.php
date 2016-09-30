@extends('front.layout')
@include('front.catalog.automatic.meta')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = false; ?>
    {{----}}
    <section class="content automatic dashed-bottom">
        <div class="page-title-image">
            <div class="image-wrap">
                <img src="/images/{{$auto->background_image->primary_link}}" alt="">
            </div>
            <h1 class="page-title">{{$auto->page_name_field}}</h1>
        </div>
        <div class="main-content-block">
            <div class="col-1-2">
                <div class="text-block">
                    {!! $auto->content_field !!}
                </div>
            </div>
            <div class="col-1-2">
                <div class="right-menu-block">
                    <p class="menu-title">Готовые решения</p>
                    <ul class="right-menu">
                        @foreach($all as $item)
                            @if(!$item->is_iiko_field)
                                <li class="menu-item"><a href="/automatic/{{$item->slug_field}}" class="link">{{$item->page_name_field}}</a></li>
                            @endif
                        @endforeach
                        <li class="menu-item iiko-popup"><a href="/automatic/#" class="link">Автоматизация IIKO</a>
                            <div class="left-popup">
                                <ul class="popup-menu">
                                    @foreach($all as $item)
                                        @if($item->is_iiko_field)
                                            <li class="menu-item"><a href="/automatic/{{$item->slug_field}}" class="link">{{$item->page_name_field}}</a></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="capability">
                  {!! $auto->vozm_field !!}
                </div>
            </div>
        </div>
        <div class="second-content">
            <div class="col-1-2">
                <div class="text-block">
                   {!! $auto->system_features_field !!}
                </div>
            </div>
            <div class="col-1-2">
                <div class="advantages-block">
                    @foreach($auto->auto_adv_group as $item)
                        <div class="block-item">
                            <div class="img-wrap">
                                <img src="/images/{{$item->card_image->primary_link}}" alt="{{$item->card_image->alt}}">
                            </div>
                            <div class="text-wrap">
                             {!! $item->card_text_field !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="block-separator">
            <div class="separator dotted"></div>
        </div>
        <div class="equipment-block">
            <div class="block-title">
                <h2 class="sub-title">Комплектация</h2>
                <div class="products-list">
                    @foreach($prod as $item_prod)
                        @foreach($auto->auto_related_group as $rel)
                            @if($item_prod->id_field == $rel->product_field)
                                <div class="product-item">
                                    <a href="#">
                                        <div class="img-wrap">
                                            <img src="/images/{{$item_prod->product_base_photo_image->icon_link}}" alt="{{$item_prod->product_base_photo_image->alt}}">
                                        </div>
                                        <div class="text-wrap">
                                            <p>{{$rel->about_item_field}}</p>
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
        <div class="warranty">
            {!! $auto->warranty_field !!}
        </div>
        <div class="cost-block">

            <h2 class="cost">
                @if($auto->auto_sale_field > 0)
                    <span class="sale">{{ number_format($auto->auto_sale_field,0,'',' ') }} тг</span>
                @endif
                    от {{ number_format($auto->auto_cost_field,0,'',' ') }}  тенге
            </h2>
        </div>
        <div class="credit">
            {!! $auto->rassr_field !!}
        </div>
        <div class="button-wrap">
            <div class="button buy-it">Оформить заказ</div>
        </div>

    </section>
@endsection