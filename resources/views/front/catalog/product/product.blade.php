@include('front.catalog.product.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content product " itemscope="" itemtype="http://schema.org/Service">
        <div class="bread-crumb">
            <span class="crumb-item"><a href="/{{$grand->slug_field}}">{{$grand->category_name_field}}</a></span>
                <span class="crumb-separate">→</span>
                <span class="crumb-item"><a href="/{{$grand->slug_field}}/{{$parent->slug_field}}">{{$parent->category_name_field}}</a></span>
        </div>
        <h1 class="block-title">{{$product->product_name_field}}</h1>

        <div class="product-grid">
            <div class="col-1-2">
                <div class="preview-block">
                    <div class="big-picture">
                        <img src="/images/{{$product->product_base_photo_image->title_crop->link}}"
                             class="zoom"
                             data-zoom-image="/images/{{$product->product_base_photo_image->zoom_crop->link}}" alt="{{$product->product_base_photo_image->alt}}">
                    </div>

                    <div class="pictures-row" id="gallery_01">
                        @if($product->product_image_group->count() > 0)
                        <a href="#" data-image="/images/{{$product->product_base_photo_image->title_crop->link}}"
                           data-zoom-image="/images/{{$product->product_base_photo_image->zoom_crop->link}}">
                            <img id="img_01" src="/images/{{$product->product_base_photo_image->preview_crop->link}}" alt="{{$product->product_base_photo_image->alt}}"/>
                        </a>
                        @foreach($product->product_image_group as $item)
                            <a href="#" data-image="/images/{{$item->product_image->title_crop->link}}"
                               data-zoom-image="/images/{{$item->product_image->zoom_crop->link}}">
                                <img id="img_01" src="/images/{{$item->product_image->preview_crop->link}}" alt="{{$item->product_image->alt}}"/>
                            </a>
                        @endforeach
                        @endif

                    </div>
                </div>
                @if( $product->soft_related_group->count() > 0  || $product->product_auto_group->count() > 0)
                <div class="automatic-block">
                    <ul class="automatic-list">
                        @if($product->soft_related_group->count() > 0 )
                        <li class="item-link"><p class="automatic-title">Программное обеспечение</p></li>
                        @foreach($soft as $item)
                            @foreach($product->soft_related_group as $soft_item)
                                @if($item->id_field == $soft_item->soft_field )
                                    <li class="item-link"><a href="/soft/programmnoe-obespechenie/{{$item->slug_field}}" class="link">{{$item->product_name_field}}</a></li>
                                @endif
                            @endforeach
                        @endforeach
                        @endif
                    </ul>
                    <ul class="automatic-list">
                        @if($product->product_auto_group->count() > 0 )
                        <li class="item-link"><p class="automatic-title">Применяется в автоматизации</p></li>
                        @foreach($auto as $item)
                            @foreach($product->product_auto_group as $auto_item)
                                @if($item->id_field == $auto_item->auto_field )
                                    <li class="item-link"><a href="/automatic/{{$item->slug_field}}" class="link">{{$item->page_name_field}}</a></li>
                                @endif
                            @endforeach
                        @endforeach
                        @endif
                    </ul>
                </div>
                @endif
            </div>
            <div class="col-1-2">
                <div class="buy-button-block">
                    <div class="row-1-2">
                        <div class="col-1-2">
                            @if($product->product_sale_field != 0)
                                <p class="sale">{{ number_format($product->product_sale_field,0,'',' ') }} тг</p>
                            @endif
                            @if($product->product_cost_field != '0' && $product->product_cost_field != '')
                                <p class="cost">{{ number_format($product->product_cost_field,0,'',' ') }} тг</p>
                            @else
                                <p class="mes">Цену уточняйте</p>
                            @endif
                        </div>
                        <div class="col-1-2">
                            <p class="text">При заказе свыше 5 позиций действуют скидки.</p>
                        </div>
                    </div>
                    <div class="row-1-2">
                        <div class="col-1-2">
                            <button class="button buy-it" id="buy" href="#order">Заказать</button>
                        </div>
                        <div class="col-1-2">
                            <p class="text">Возможна рассрочка и аренда оборудования.</p>
                        </div>
                    </div>
                </div>
                <div class="product-description-block text-block">
                    @if($product->product_description_field != '')
                        <h4>Описание</h4>
                        {!! $product->product_description_field !!}
                        <br>
                    @endif
                    @if($product->builder_field != '')
                        <h4>Производитель</h4>
                        {!! $product->builder_field !!}
                            <br>
                    @endif
                    @if($product->why_apply_field != '')
                        <h4>Для чего применяется</h4>
                        {!! $product->why_apply_field !!}
                            <br>
                    @endif
                </div>
                @if($product->product_reviews_group->count() > 0 )
                    <div class="reviews">
                        <h4 class="reviews__title">Отзывы</h4>
                        @foreach($product->product_reviews_group as $review)
                            <ul class="reviews__list">
                                <li class="reviews__item">
                                    <div class="reviews__text text-block">{!! $review->review_text_field !!}</div>
                                    <p class="reviews__person-name">{{ $review->person_name_field }}</p>
                                    <p class="reviews__person-position">{{ $review->person_position_field }}</p>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        @if ($product->product_features_group->count() > 0 )
        <div class="block-separator">
            <div class="separator"></div>
        </div>
        <div class="technical-parameters">
            <div class="title-block">
                <h2 class="sub-title">Технические характеристики</h2>
                <span class="open-close-button"><a href="#" class="close">Свернуть</a></span>
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
        @endif
        @if($product->product_related_group->count() > 0 )
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
                                <a href="{{$item_prod->title_field}}">
                                    <div class="img-wrap">
                                        <img src="/images/{{$item_prod->product_base_photo_image->catalog_crop->link}}" alt="{{$item_prod->product_base_photo_image->alt}}">
                                    </div>
                                    <div class="text-wrap">
                                        <p class="wrap">
                                            <span>{{$item_prod->product_name_field}}</span>
                                        </p>
                                        @if($item_prod->product_cost_field != '0' && $item_prod->product_cost_field != '')
                                            <p class="cost">{{ number_format($item_prod->product_cost_field,0,'',' ') }} тг  @if($item_prod->product_sale_field != 0)<span class="sale">{{ number_format($item_prod->product_sale_field,0,'',' ') }} тг</span>@endif</p>
                                        @endif
                                    </div>
                                </a>
                            </div>
                        @endif
                    @endforeach
                @endforeach


            </div>
        </div>
        @endif
        @include('front.social_buttons')
        <div class="form-outer sp-popup-outer sp-force-hide"> <style id="subscribe-form-style" class="">.sp-force-hide { display: none;
                }
                .sp-form[sp-id="79789"] { display: block; background: #fad41d; padding: 40px; width: 390px; max-width: 100%; border-radius: 3px; -moz-border-radius: 3px; -webkit-border-radius: 3px; border-color: #dddddd; border-style: solid; border-width: 1px; font-family: "Segoe UI", Segoe, "Open Sans", sans-serif;
                }
                .sp-form[sp-id="79789"] .sp-form-control { background: #ffffff; border-color: #ffffff; border-style: solid; border-width: 1px; font-size: 15px; padding-left: 8.75px; padding-right: 8.75px; border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; height: 35px; width: 100%;
                }
                .sp-form[sp-id="79789"] .sp-field label { color: #ffffff; font-size: 16px; font-style: normal; font-weight: bold;
                }
                .sp-form[sp-id="79789"] .sp-button { border-radius: 4px; -moz-border-radius: 4px; -webkit-border-radius: 4px; background-color: #0273B2; color: #ffffff; width: 100%; font-weight: bold; font-style: normal; font-family: Arial, "Helvetica Neue", sans-serif; box-shadow: none; -moz-box-shadow: none; -webkit-box-shadow: none; background: linear-gradient(to top, #014c75 , #039aef);
                }
                .sp-form[sp-id="79789"] .sp-button-container { text-align: left;
                }
            </style> <div id="sp-form-79789" sp-id="79789" sp-hash="132f13f4ac3f1423a80df561735d8cdbd47fd9c28984551f1aacae88662336be" sp-lang="ru" class="sp-form sp-form-regular sp-form-popup" sp-show-options="%7B%22amd%22%3Afalse%2C%22condition%22%3A%22onEnter%22%2C%22delay%22%3A10%2C%22repeat%22%3A3%2C%22background%22%3A%22dark%22%2C%22position%22%3A%22bottom-center%22%7D"> <button class="sp-btn-close " >&nbsp;</button> <div class="sp-message"> <div></div> </div> <div id="droppableArea" class="sp-element-container ui-sortable ui-droppable sp-lg sp-field-nolabel" ><div class="sp-field " sp-id="sp-16565401-adea-4047-b110-6ced59a365cc" > <div class=" " style="font-family: inherit; line-height: 1.2;"><p style="text-align: center;"><span style="font-size: 24px; color: #000000;">Подписка на рассылку</span></p>
                            <p style="text-align: center;"><span style="font-size: 16px; color: #000000;">Новости сайта на email</span></p></div> </div><div class="sp-field " sp-id="sp-c64e07d1-5b2e-4b14-8b14-f390b3276244" style=""> <label class="sp-control-label "> <span class="">Имя</span> </label> <input type="text" sp-type="name" name="sform[0LjQvNGP]" class="sp-form-control " placeholder="Фамилия, имя" sp-tips="%7B%7D"> </div><div class="sp-field " sp-id="sp-08ddbc92-e923-46bb-aa90-b5f3a93965dd" > <label class="sp-control-label "> <span class="">Email</span> <strong class="">*</strong> </label> <input type="email" sp-type="email" name="sform[email]" class="sp-form-control " placeholder="username@gmail.com" sp-tips="%7B%22required%22%3A%22%D0%9E%D0%B1%D1%8F%D0%B7%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D0%B5%20%D0%BF%D0%BE%D0%BB%D0%B5%22%2C%22wrong%22%3A%22%D0%9D%D0%B5%D0%B2%D0%B5%D1%80%D0%BD%D1%8B%D0%B9%20email-%D0%B0%D0%B4%D1%80%D0%B5%D1%81%22%7D" required="required" style=""> </div></div> <div class="sp-field sp-button-container sp-lg" sp-id="sp-95cf4fe0-a1b0-430d-911f-dc453f91c8a8" > <button id="sp-95cf4fe0-a1b0-430d-911f-dc453f91c8a8" class="sp-button "> Подписаться </button> </div> <div class="sp-link-wrapper sp-brandname__left " style=""> </div> </div> <script type="text/javascript" src="//login.sendpulse.com/apps/fc3/build/default-handler.js"></script></div>
        <div class="rating">
            <span class="head-reiting">Оцените нашу страницу</span>
            <div class="raiting-star" data-entity="news" data-id="1177">
                <ul class="star-rating-default" style="width:125px">
                    <li class="current-rating" style="width:{{$rating['percent']}}%;">{{$rating['middle']}}</li>
                    <li class="star">
                        <a class="star-link" data-raiting="1" title="1/5" style="width:20%;z-index:6"
                           rel="nofollow">1</a>
                    </li>
                    <li class="star">
                        <a class="star-link" data-raiting="2" title="2/5" style="width:40%;z-index:5"
                           rel="nofollow">2</a>
                    </li>
                    <li class="star">
                        <a class="star-link" data-raiting="3" title="3/5" style="width:60%;z-index:4"
                           rel="nofollow">3</a>
                    </li>
                    <li class="star">
                        <a class="star-link" data-raiting="4" title="4/5" style="width:80%;z-index:3"
                           rel="nofollow">4</a>
                    </li>
                    <li class="star">
                        <a class="star-link" data-raiting="5" title="5/5" style="width:100%;z-index:2"
                           rel="nofollow">5</a>
                    </li>
                </ul>
            </div>
            <span class="totalvotes" itemprop="aggregateRating" itemscope="itemscope"
                  itemtype="http://schema.org/AggregateRating">
                    <meta itemprop="ratingValue" content="{{$rating['middle']}}">Текущий рейтинг — {{$rating['middle']}}
                <meta itemprop="bestRating" content="5">
                    <meta itemprop="ratingCount" content="{{$rating['count']}}"> ({{$rating['count']}} человек)
                    </span>
        </div>
    </section>
@endsection
