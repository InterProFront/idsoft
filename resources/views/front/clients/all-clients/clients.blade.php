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

            <?php
                $j = 0;
                $i = 0;
                $img_type = 0;
            ?>
            <div class="clients-row">
            @foreach($all_c as $item)
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
                @else
                    <?php
                        $i = 0;
                        $img_type = 0;
                    ?>
                    </div>
                    <div class="clients-row">
                @endif
            @endforeach
                    </div>

        </div>
    </section>
@endsection