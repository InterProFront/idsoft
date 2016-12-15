@include('front.catalog.category.meta_video')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content catalog softw" itemscope="" itemtype="http://schema.org/Service">
        <h1 class="block-title">{{$seo->category_name_field}}</h1>
        <div class="advantages advantages-top">
            <div class="text-wrap">
                <div class="advantages-text">
                    <div class="soft-text">
                        Програ́ммное обеспе́чение(допустимо также произношение обеспече́ние) (ПО) — все или часть программ, процедур, правил и соответствующей документации системы обработки информации (ISO/IEC 2382-1:1993).

                        Другие определения из международных и российских стандартов:

                        ПО — компьютерные программы, процедуры и, возможно, соответствующая документация и данные, относящиеся к функционированию компьютерной системы (IEEE Std 829—2008);
                        ПО — программа или множество программ, используемых для управления компьютером (IEEE Std 829—2008);
                        ПО — совокупность программ системы обработки информации и программных документов, необходимых для эксплуатации этих программ (ГОСТ 19781-90).
                        Программное обеспечение является одним из видов обеспечения вычислительной системы, наряду с техническим (аппаратным), математическим, информационным, лингвистическим, организационным и методическим обеспечением.

                        Программное обеспечение — это то, что делает компьютеры универсальными, позволяя использовать типовую вычислительную машину для решения самых разнообразных задач.
                    </div>
                </div>
            </div>
        </div>
        <div class="category-block video">
            @foreach($category_1 as $item)
                <div class="category-item">
                    <a href="/soft/{{$item->slug_field}}">

                        <div class="image-wrap">
                            <img src="/images/{{$item->card_background_image->secondary_link}}"
                                 alt="{{$item->card_background_image->alt}}" class="static">
                            <img src="/images/{{$item->card_hover_image->secondary_link}}"
                                 alt="{{$item->card_hover_image->alt}}" class="hover">
                        </div>
                        <p class="wrap"><span>{{$item->category_name_field}}</span></p>
                    </a>
                </div>
            @endforeach
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