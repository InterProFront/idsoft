@include('front.information.meta_about')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content about" itemscope="" itemtype="http://schema.org/Service">
        <h1 class="block-title">{{$about->page_name_field}}</h1>
        <div class="page-title-image">
            <div class="image-wrap">
                <img src="/images/{{$about->background_image->primary_link}}" alt="{{$about->background_image->alt}}">
            </div>
        </div>
        <div class="main-content-block">
            <div class="descr">
                <div class="col-1-2">
                    <div class="text-block">
                        {!! $about->description_field !!}
                    </div>
                </div>
                <div class="col-1-2">
                    <div class="right-menu-block">
                        <ul class="right-menu">
                            <li class="menu-item">
                                <div class="orange-wrap">
                                    <a href="/inf/about" class="link">{{$about->page_name_field}}</a>
                                </div>
                            </li>
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
                @foreach($about->staff_group as $staff_item)
                    <div class="staff-item">
                        <div class="col-1-2">
                            <div class="image-wrap"><img src="/images/{{$staff_item->foto_image->primary_link}}"
                                                         alt="{{$staff_item->foto_image->alt}}"></div>
                        </div>
                        <div class="col-1-2">
                            <div class="name">{{$staff_item->name_field}}</div>
                            <div class="position">{{$staff_item->position_field}}</div>
                            <div class="text-block">{!! $staff_item->description_field !!}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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
        </div>
        <div class="contact-us">
            <div class="contacts">
                <h3 class="contacts-title">Свяжитесь с нами</h3>
                <div class="consult-text">{{$about->consult_field}}</div>
                <div class="numbers">
                    <?php $i = 0;?>
                    @foreach($static->phones_group as $item)
                        <?php $i++?>
                        @if($i == 1)
                            <div class="number">
                                <div class="telephone">{!! $item->phone_field !!}</div>
                                <div class="under-number">{{$about->works_time_field}}</div>
                            </div>
                        @elseif($i == 2)
                            <div class="number">
                                <div class="telephone">{!! $item->phone_field !!}</div>
                                <div class="under-number">
                                    <div class="icon-group">
                                        <i class="wpp"></i>
                                        <i class="tel"></i>
                                        <i class="vib"></i>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <a class="ask-me" href="#question">Написать письмо</a>
            </div>
            <div class="map-wrap">
                <div id="map">
                    <script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full"></script>
                    <script type="text/javascript">
                        var map;

                        DG.then(function () {
                            map = DG.map('map', {
                                center: [43.22908475875056, 76.89035760902406],
                                zoom: 17,
                                fullscreenControl: false,
                            });

                            DG.marker([43.22908475875056, 76.89035760902406]).addTo(map).bindPopup('IDSOFT - Автоматизация торговли в Казахстане');
                        });
                    </script>
                    {{--<a class="dg-widget-link"
                       href="http://2gis.kz/almaty/firm/9429940001659307/center/76.89061760902406,43.22912475875056/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть
                        на карте Алматы</a>
                    <div class="dg-widget-link"><a
                                href="http://2gis.kz/almaty/firm/9429940001659307/photos/9429940001659307/center/76.89061760902406,43.22912475875056/zoom/17?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=photos">Фотографии
                            компании</a></div>
                    <div class="dg-widget-link"><a
                                href="http://2gis.kz/almaty/center/76.890395,43.22905/zoom/17/routeTab/rsType/bus/to/76.890395,43.22905╎Центр автоматизации торговли IDSOFT, ТОО, компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти
                            проезд до Центр автоматизации торговли IDSOFT, ТОО, компания</a></div>
                    <script charset="utf-8" src="http://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                    <script charset="utf-8">new DGWidgetLoader({
                            "width": 500,
                            "height": 400,
                            "borderColor": "#a3a3a3",
                            "pos": {"lat": 43.22912475875056, "lon": 76.89061760902406, "zoom": 17},
                            "opt": {"city": "almaty"},
                            "org": [{"id": "9429940001659307"}]
                        });</script>
                    <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript.
                        Включите его в настройках вашего браузера.
                    </noscript>--}}
                </div>
            </div>
        </div>
    </section>
@endsection