@extends('front.layout')
@include('front.index.meta')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = false; ?>
    {{----}}
    <section class="content" itemscope="" itemtype="http://schema.org/Service">
        <div class="automatic">
            <h1 class="block-title">Автоматизация общепита и торговли</h1>

            <div class="automatic-block-list">
                <div class="row">
                    <div class="col-1-2">
                        <div class="wrap">
                            <p class="card-title">{{$auto->auto_title_field}}</p>
                            <p class="card-text">{{$auto->auto_description_field}}</p>
                        </div>
                        <img src="/images/{{$auto->auto_background_image->primary_link}}" class="monitor" alt="{{$auto->auto_background_image->alt}}">
                        <img src="/img/monitor.PNG" class="monitor-l" alt="">
                        <div class="popup-form orange small">
                            <h3 class="popup-title">{{$auto->auto_title_field}}</h3>
                            <div class="popup-items">
                                <ul class="popup-list">
                                    @foreach($acc_m as $item_p)
                                        <li class="item-popup">
                                            <a href="/automatic/{{$item_p->slug_field}}">{{$item_p->page_name_field}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <div class="wrap">
                            <p class="card-title">{{$auto->iiko_title_field}}</p>
                            <p class="card-text">{{$auto->iiko_description_field}}</p>
                        </div>
                        <img src="/images/{{$auto->iiko_background_image->primary_link}}" class="iiko" alt="{{$auto->iiko_background_image->alt}}">
                        <div class="popup-form red">
                            <h3 class="popup-title">{{$auto->iiko_title_field}}</h3>
                            <div class="popup-items">
                                <ul class="popup-list">
                                    @foreach($iiko as $item_p)
                                        <li class="item-popup">
                                            <a href="/automatic/{{$item_p->slug_field}}">{{$item_p->page_name_field}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1-2">
                        <div class="wrap">
                            <p class="card-title">{{$catalog->category_name_field}}</p>
                            <p class="card-text">{{$catalog->category_description_field}}</p>
                        </div>
                        <img src="/images/{{$catalog->card_background_image->primary_link}}" class="hand" alt="{{$catalog->card_background_image->alt}}">
                        <div class="popup-form orange big">
                            <h3 class="popup-title">{{$catalog->category_name_field}}</h3>
                            <div class="popup-items">
                                <ul class="popup-list">
                                    @foreach($m_popup[0] as $item_p)
                                        <li class="item-popup">
                                            <a href="/catalog/{{$item_p->slug_field}}">{{$item_p->category_name_field}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-2">
                        <a href="/soft">
                            <div class="wrap">
                                <p class="card-title">{{$soft->category_name_field}}</p>
                                <p class="card-text">{{$soft->category_description_field}}</p>
                            </div>
                            <img src="/images/{{$soft->card_background_image->primary_link}}" class="soft" alt="{{$soft->card_background_image->alt}}">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1-3">
                        <div class="wrap">
                            <p class="card-title">{{$showcase->category_name_field}}</p>
                            <p class="card-text">{{$showcase->category_description_field}}</p>
                        </div>
                        <img src="/images/{{$showcase->card_background_image->secondary_link}}" alt="{{$showcase->card_background_image->alt}}">
                        <div class="popup-form orange">
                            <h3 class="popup-title">{{$showcase->category_name_field}}</h3>
                            <div class="popup-items">
                                <ul class="popup-list">
                                    @foreach($m_popup[3] as $item_p)
                                        <li class="item-popup">
                                            <a href="/showcase/{{$item_p->slug_field}}">{{$item_p->category_name_field}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-1-3">
                        <a href="/accounting">
                            <div class="wrap">
                                <p class="card-title">{{$buh->card_title_field}}</p>
                                <p class="card-text">{{$buh->card_description_field}}</p>
                            </div>
                            <img src="/images/{{$buh->card_background_image->secondary_link}}" alt="{{$buh->card_background_image->alt}}">
                        </a>
                    </div>
                    <div class="col-1-3">
                        <div class="wrap">
                            <p class="card-title">{{$video->category_name_field}}</p>
                            <p class="card-text">{{$video->category_description_field}}</p>
                        </div>
                        <img src="/images/{{$video->card_background_image->secondary_link}}" alt="{{$video->card_background_image->alt}}">
                        <div class="popup-form orange">
                            <h3 class="popup-title">{{$video->category_name_field}}</h3>
                            <div class="popup-items">
                                <ul class="popup-list">
                                    @foreach($m_popup[5] as $item_p)
                                        <li class="item-popup">
                                            <a href="/video/{{$item_p->slug_field}}">{{$item_p->category_name_field}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clients-block">
            <h2 class="sub-title"><a href="/clients">Наши клиенты</a></h2>

            <div class="slider-block">
                <ul class="slider-list">
                    <?php
                    $i = 0;
                    $j = 0;
                    $max = floor( $client->count() / 4 )*4;
                    ?>
                    {{$max}}
                    @foreach($client as $item)
                        <?php $j++;?>
                        @if($j <= $max)
                            @if($i == 0)
                                <li class="slide">
                                    <div class="client-row">
                                        @endif
                                        <div class="client-item">
                                            <a href="/clients/{{$item->slug_field}}">
                                                <div class="image-wrap">
                                                    <img src="/images/{{$item->background_image->small_crop->link}}"
                                                         alt="{{$item->background_image->alt}}">
                                                </div>
                                                <div class="text-wrap">
                                                    <p class="wrap"><span class="client-name">{{$item->page_name_field}}</span></p>
                                                    <p class="about-client">{{$item->small_descr_field}}</p>
                                                    @foreach($filter->city_group as $item_c)
                                                        @if($item_c->id_field == $item->city_name_field)
                                                            <p class="city">{{$item_c->city_name_field}}</p>
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </a>
                                        </div>
                                        @if($i == 3)
                                    </div>
                                </li>
                                <?php $i = -1?>
                            @endif
                            <?php $i++ ?>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
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
        <div class="free-project white-popup" id="calculation">
            <h2 class="sub-title">Бесплатный расчет проекта</h2>
            <p class="sub-title-text">Оставьте заявку и менеджер свяжется с вами по указанному номеру и рассчитает
                заказ.</p>
            <div class="calculate">
                <input type="text" class="input phone popup-input" data-mask="+7(000)000-00-00" placeholder="Номер телефона" data-field-name="phone" data-field-type="string">
                <button class="calculated-button button send-form">Рассчитать</button>
            </div>
        </div>
    </section>
@endsection