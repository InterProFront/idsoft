@include('front.catalog.product.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content product dashed-bottom">
        <div class="bread-crumb">
            <span class="crumb-item"><a href="/">Каталог оборудования</a></span>
            <span class="crumb-separate">→</span>
            <span class="crumb-item"><a href="/">POS-системы</a></span>
        </div>
        <h1 class="block-title">{{$product->product_name_field}}</h1>

        <div class="product-grid">
            <div class="col-1-2">
                <div class="preview-block">
                    <div class="big-picture">
                        <img src="/images/{{$product->product_base_photo_image->secondary_link}}"
                             class="zoom"
                             data-zoom-image="/images/{{$product->product_base_photo_image->primary_link}}">
                    </div>
                    <div class="pictures-row" id="gallery_01">
                        <a href="#" data-image="/images/{{$product->product_base_photo_image->secondary_link}}"
                           data-zoom-image="/images/{{$product->product_base_photo_image->primary_link}}">
                            <img id="img_01" src="/images/{{$product->product_base_photo_image->preview_link}}"/>
                        </a>
                        @foreach($product->product_image_group as $item)
                            <a href="#" data-image="/images/{{$item->product_image->secondary_link}}"
                               data-zoom-image="/images/{{$item->product_image->primary_link}}">
                                <img id="img_01" src="/images/{{$item->product_image->preview_link}}"/>
                            </a>
                        @endforeach


                    </div>
                </div>
                <div class="automatic-block">
                    <ul class="automatic-list">

                        <li class="item-link"><p class="automatic-title">Программное обеспечение</p></li>
                        @foreach($soft as $item)
                            @foreach($product->soft_related_group as $soft_item)
                                @if($item->id_field == $soft_item->soft_field )
                                    <li class="item-link"><a href="/soft/{{$item->slug_field}}" class="link">{{$item->product_name_field}}</a></li>
                                @endif
                            @endforeach
                        @endforeach
                    </ul>
                    <ul class="automatic-list">
                        <li class="item-link"><p class="automatic-title">Применяется в автоматизации</p></li>
                        @foreach($auto as $item)
                            @foreach($product->product_auto_group as $auto_item)
                                @if($item->id_field == $auto_item->auto_field )
                                    <li class="item-link"><a href="/automatic/{{$item->slug_field}}" class="link">{{$item->page_name_field}}</a></li>
                                @endif
                            @endforeach
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-1-2">
                <div class="buy-button-block">
                    <div class="row-1-2">
                        <div class="col-1-2">
                            @if($product->product_sale_field != 0)
                                <p class="sale">{{ number_format($product->product_sale_field,0,'',' ') }} тг</p>
                            @endif
                            <p class="cost">{{ number_format($product->product_cost_field,0,'',' ') }}  тг</p>
                        </div>
                        <div class="col-1-2">
                            <p class="text">При заказе свыше 5 позиций действуют скидки.</p>
                        </div>
                    </div>
                    <div class="row-1-2">
                        <div class="col-1-2">
                            <button class="button buy-it">Заказать</button>
                        </div>
                        <div class="col-1-2">
                            <p class="text">Возможна рассрочка и аренда оборудования.</p>
                        </div>
                    </div>
                </div>
                <div class="product-description-block text-block">
                  {!! $product->product_description_field !!}
                </div>
            </div>
        </div>
        <div class="block-separator">
            <div class="separator"></div>
        </div>
        <div class="technical-parameters">
            <div class="title-block">
                <h2 class="sub-title">Технические характеристики</h2>
                <span class="open-close-button"><a href="#">Свернуть</a></span>
            </div>
            <div class="parameters-block">
                @foreach($product->product_features_group as $item)
                    <div class="param-row">
                        <div class="col-30">
                            <p>{{$item->feat_name_field}}</p>
                        </div>
                        <div class="col-70">
                            <p>{{$item->feat_value_field}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="block-separator">
            <div class="separator black"></div>
        </div>
        <div class="product-related">
            <div class="title-block">
                <h2 class="sub-title">Сопутствующие товары</h2>
            </div>
            <div class="products-list">
                @foreach($prod as $item_prod)
                    @foreach($product->product_related_group as $rel)
                        @if($item_prod->id_field == $rel->related_field)
                            <div class="product-item">
                                <a href="#">
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
    </section>
@endsection