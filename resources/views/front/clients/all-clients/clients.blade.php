@include('front.clients.all-clients.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content clients " itemscope="" itemtype="http://schema.org/Service">
        <?php $i = 0;
        $all_count = $counts[$i]->count();
        $d10 = $all_count % 10;
        $d100 = ($all_count % 100 < 5) || ($all_count % 100 > 20);
        ?>
        @if ($d100 && ($d10 == 1))
            <h1 class="block-title"> {{$all_count}} автоматизированный клиент</h1>
        @elseif ($d100 && ($d10 > 1) && ($d10 < 5))
            <h1 class="block-title"> {{$all_count}} автоматизированных клиента</h1>
        @else
            <h1 class="block-title"> {{$all_count}} автоматизированных клиентов</h1>
        @endif

        <div class="shop-type">
            <ul class="type-menu">
                @foreach($filter->institution_group as $item)
                    <?php
                    $i++;
                    $count = $counts[$i];
                    ?>
                    @if($count % 10 == 1)
                        <li class="item"><a href="/clients/{{$city}}/{{$item->id_field}}"
                                            class="link client-filter">{{$count}} {{$item->page_name_field}}</a></li>
                    @else
                        <li class="item"><a href="/clients/{{$city}}/{{$item->id_field}}"
                                            class="link client-filter">{{$count}} {{$item->page_title_field}}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
        <div class="clients-block">
            <div class="clients-row">
                <?php
                $img_type = 0;
                $i = 0;
                ?>
                @foreach($all_c as $item)
                    <?php
                    $i++;
                    $img_type++;
                    ?>
                    @if($i <= 2 )
                        <div class="col-1-3">
                            <a href="/clients/{{$item->slug_field}}" class="client-link">
                                <div class="image-wrap">
                                    @if($img_type == 1)
                                        <img src="/images/{{$item->background_image->big_crop->link}}"
                                             alt="{{$item->background_image->alt}}">
                                    @elseif($img_type == 2)
                                        <img src="/images/{{$item->background_image->medium_crop->link}}"
                                             alt="{{$item->background_image->alt}}">
                                    @elseif($img_type == 3)
                                        <img src="/images/{{$item->background_image->small_crop->link}}"
                                             alt="{{$item->background_image->alt}}">
                                    @endif
                                    <img src="/images/{{$item->background_image->medium_crop->link}}"
                                         alt="{{$item->background_image->alt}}" class="for-mobile">

                                    <img src="/images/{{$item->background_image->big_crop->link}}"
                                         alt="{{$item->background_image->alt}}" class="medium">
                                </div>
                                <div class="about-wrap">
                                    <p class="name-wrap">
                                        <span>{{$item->page_name_field}}</span>
                                    </p>
                                    <p class="about">{{$item->small_descr_field}}</p>
                                    @foreach($filter->city_group as $item_c)
                                        @if($item_c->id_field == $item->city_name_field)
                                            <p class="city">{{$item_c->city_name_field}}</p>
                                        @endif
                                    @endforeach
                                </div>
                            </a>
                        </div>
                    @endif

                @endforeach
                <div class="col-1-3">
                    <div class="city-change-menu">
                        <p class="menu-title">По городам</p>
                        <ul class="city-menu">
                            <?php $i = 0 ?>
                            @foreach($filter->city_group as $item_c)
                                @foreach($all_all as $item)
                                    @if($item->city_name_field == $item_c->id_field)
                                        <?php $i++ ?>
                                    @endif
                                @endforeach
                                <li class="item">
                                    <div class="orange-wrap"><a class="client-filter"
                                                                href="/clients/{{$item_c->id_field}}/{{$inst}}">{{$item_c->city_name_field}}</a>{{$i}}
                                    </div>
                                </li>
                                <?php $i = 0?>
                            @endforeach
                            <li class="item"><div class="orange-wrap"><a href="/clients/all/{{$inst}}" class="no_bold">Все города</a></div></li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php
            $j = 0;
            $i = 0;
            $img_type = 0;
            $first_two = 0;
            ?>
            <div class="clients-row">
                @foreach($all_c as $item)
                    <?php $first_two++;?>
                    @if($first_two > 2)
                        <?php
                        $i++;
                        $img_type++;
                        ?>
                        @if($i <= 3)
                            <div class="col-1-3">
                                <a href="/clients/{{$item->slug_field}}" class="client-link">
                                    <div class="image-wrap">
                                        @if($img_type == 1)
                                            <img src="/images/{{$item->background_image->big_crop->link}}"
                                                 alt="{{$item->background_image->alt}}">
                                        @elseif($img_type == 2)
                                            <img src="/images/{{$item->background_image->medium_crop->link}}"
                                                 alt="{{$item->background_image->alt}}">
                                        @elseif($img_type == 3)
                                            <img src="/images/{{$item->background_image->small_crop->link}}"
                                                 alt="{{$item->background_image->alt}}">
                                        @endif
                                        <img src="/images/{{$item->background_image->medium_crop->link}}"
                                             alt="{{$item->background_image->alt}}" class="for-mobile">
                                        <img src="/images/{{$item->background_image->big_crop->link}}"
                                             alt="{{$item->background_image->alt}}" class="medium">
                                    </div>
                                    <div class="about-wrap">
                                        <p class="name-wrap">
                                            <span>{{$item->page_name_field}}</span>
                                        </p>
                                        <p class="about">{{$item->small_descr_field}}</p>
                                        @foreach($filter->city_group as $item_c)
                                            @if($item_c->id_field == $item->city_name_field)
                                                <p class="city">{{$item_c->city_name_field}}</p>
                                            @endif
                                        @endforeach
                                    </div>
                                </a>
                            </div>
                        @endif
                        @if($i == 3)
                            <?php
                            $i = 0;
                            $img_type = 0;
                            ?>
            </div>
            <div class="clients-row">
                @endif
                @endif
                @endforeach
            </div>

        </div>
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