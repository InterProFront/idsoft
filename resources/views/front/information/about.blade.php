@include('front.information.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content about" itemscope="" itemtype="http://schema.org/Service">
        <h1 class="block-title">{{$inf->page_name_field}}</h1>
        <div class="page-title-image">
            <div class="image-wrap">
                <img src="/images/{{$inf->background_image->primary_link}}" alt="{{$inf->background_image->alt}}">
            </div>
        </div>
        <div class="main-content-block">
            <div class="descr">
                <div class="col-1-2">
                    <div class="text-block">
                        {!! $inf->content_field !!}
                    </div>
                </div>
                <div class="col-1-2">
                    <div class="right-menu-block">
                        <ul class="right-menu">
                            @foreach($all as $item)
                                <li class="menu-item">
                                    <div class="orange-wrap">
                                        <a href="/inf/{{$item->slug_field}}" class="link">{{$item->page_name_field}}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="staff">
                <div class="staff-item">
                    <div class="col-1-2">
                        <div class="image-wrap"><img src="/img/olga2.jpg" alt="Ольга Ли"></div>
                    </div>
                    <div class="col-1-2">
                        <div class="name">Ольга Ли</div>
                        <div class="position">Главный бухгалтер</div>
                        <div class="about-member">Профессиональный бухгалтер РК, член ассоциации профессиональных бухгалтеров и бухгалтерских организаций.

                            Практический опыт работы — более 15 лет. Два высших образования (техническое и экономическое). В разное время работала главным бухгалтером в крупных частных и государственных компаниях. Является практикующим консультантом по финансовым вопросам и бухгалтерскому учету.</div>
                    </div>
                </div>
                <div class="staff-item">
                    <div class="col-1-2">
                        <div class="image-wrap"><img src="/img/olga1.jpg" alt="Ольга Кобзева"></div>
                    </div>
                    <div class="col-1-2">
                        <div class="name">Ольга Кобзева</div>
                        <div class="position">Директор</div>
                        <div class="about-member">Профессиональный бухгалтер РК, член ассоциации профессиональных бухгалтеров и бухгалтерских организаций.

                            Специалист по налоговому учету. Высшее экономическое образование. Общий стаж работы — более 13 лет, 10 из которых в аутсорсинге. Имеет практический опыт работы с Казахстанскими и зарубежными организациями, работающие в области малого и среднего бизнеса, а так же некоммерческие организации.</div>
                    </div>
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
            <div class="contact-us">
                <div class="contacts">
                    <div class="contacts-title"></div>
                    <div class="consult-text"></div>
                    <div class="numbers">
                        <div class="number">
                            <div class="telephone"></div>
                            <div class="under-numer"></div>
                        </div>
                        <div class="number">
                            <div class="telephone"></div>
                            <div class="under-numer"></div>
                        </div>
                    </div>
                </div>
                <div class="map"></div>
            </div>
        </div>
    </section>
@endsection