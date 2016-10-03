@include('front.clients.client-item.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content clients dashed-bottom">
        <?php $i = 0; ?>
        @if($counts[$i]->count() % 10 == 1)
            <h1 class="block-title"> {{$counts[$i]->count()}} счастливый клиент</h1>
        @else
            <h1 class="block-title"> {{$counts[$i]->count()}} счастливых клиентов</h1>
        @endif

        <div class="shop-type">
            <ul class="type-menu">
                @foreach($filter->institution_group as $item)
                    <?php
                    $i++;
                    $count = $counts[$i]->count();
                    ?>
                    @if($count % 10 == 1)
                        <li class="item"><a href="/clients/{{$item->slug_field}}"
                                            class="link">{{$count}} {{$item->page_name_field}}</a></li>
                    @else
                        <li class="item"><a href="/clients/{{$item->slug_field}}"
                                            class="link">{{$count}} {{$item->page_title_field}}</a></li>
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
                @foreach($all as $item)
                    <?php
                        $i++;
                        $img_type++;
                    ?>
                    @if($i <= 2 )
                            <div class="col-1-3">
                                <a href="/clients/{{$item->slug_field}}" class="client-link">
                                    <div class="image-wrap">
                                        @if($img_type == 1)
                                            <img src="/images/{{$item->background_image->primary_link}}" alt="{{$item->background_image->alt}}">
                                        @elseif($img_type == 2)
                                            <img src="/images/{{$item->background_image->secondary_link}}" alt="{{$item->background_image->alt}}">
                                        @elseif($img_type == 3)
                                            <img src="/images/{{$item->background_image->preview_link}}" alt="{{$item->background_image->alt}}">
                                        @endif
                                    </div>
                                    <div class="about-wrap">
                                        <p class="name-wrap">
                                            <span>{{$item->page_name_field}}</span>
                                        </p>
                                        <p class="about">{{$item->small_descr_field}}</p>
                                        <p class="city">Алматы</p>
                                    </div>
                                </a>
                            </div>
                    @endif

                @endforeach
                <div class="col-1-3">
                    <div class="city-change-menu">
                        <p class="menu-title">По городам</p>
                        <ul class="city-menu">
                            <li class="item"><a href="#">Алматы</a>45</li>
                            <li class="item"><a href="#">Астана</a>22</li>
                            <li class="item"><a href="#">Караганда</a>12</li>
                            <li class="item"><a href="#">Атырау</a>5</li>
                            <li class="item"><a href="#">Актау</a>7</li>
                            <li class="item"><a href="#" class="no_bold">Все города</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @for($j = 0; $j < 3; $j++)
                <div class="clients-row">
                    <div class="col-1-3">
                        <a href="/clients" class="client-link">
                            <div class="image-wrap">
                                <img src="/img/client-big.jpg" alt="">
                            </div>
                            <div class="about-wrap">
                                <p class="name-wrap">
                                    <span>La Tartine</span>
                                </p>
                                <p class="about">Французская выпечка, казахстанская система учета</p>
                                <p class="city">Алматы</p>
                            </div>

                        </a>
                    </div>
                    <div class="col-1-3">
                        <a href="/clients" class="client-link">
                            <div class="image-wrap">
                                <img src="/img/client-medium.jpg" alt="">
                            </div>
                            <div class="about-wrap">
                                <p class="name-wrap">
                                    <span>La Tartine</span>
                                </p>
                                <p class="about">Французская выпечка, казахстанская система учета</p>
                                <p class="city">Алматы</p>
                            </div>

                        </a>
                    </div>
                    <div class="col-1-3">
                        <a href="/clients" class="client-link">
                            <div class="image-wrap">
                                <img src="/img/client-small.jpg" alt="">
                            </div>
                            <div class="about-wrap">
                                <p class="name-wrap">
                                    <span>La Tartine</span>
                                </p>
                                <p class="about">Французская выпечка, казахстанская система учета</p>
                                <p class="city">Алматы</p>
                            </div>

                        </a>
                    </div>
                </div>
            @endfor

        </div>
    </section>
@endsection