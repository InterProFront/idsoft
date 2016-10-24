@extends('front.layout')
@include('front.index.meta')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = false; ?>
    {{----}}
    <section class="content ">
        <div class="automatic">
            <h1 class="block-title">Автоматизация общепита и торговли</h1>

            <div class="automatic-block-list">
                <div class="row">
                    <div class="col-1-2">
                        <div class="wrap">
                            <p class="card-title">{{$auto->auto_title_field}}</p>
                            <p class="card-text">{{$auto->auto_description_field}}</p>
                        </div>
                        <img src="/images/{{$auto->auto_background_image->primary_link}}" class="monitor" alt="">
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
                        <img src="/images/{{$auto->iiko_background_image->primary_link}}" class="iiko" alt="">
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
                        <img src="/images/{{$catalog->card_background_image->primary_link}}" class="hand" alt="">
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
                            <img src="/images/{{$soft->card_background_image->primary_link}}" class="soft" alt="">
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-1-3">
                        <div class="wrap">
                            <p class="card-title">{{$showcase->category_name_field}}</p>
                            <p class="card-text">{{$showcase->category_description_field}}</p>
                        </div>
                        <img src="/images/{{$showcase->card_background_image->secondary_link}}" alt="">
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
                            <img src="/images/{{$buh->card_background_image->secondary_link}}" alt="">
                        </a>
                    </div>
                    <div class="col-1-3">
                        <div class="wrap">
                            <p class="card-title">{{$video->category_name_field}}</p>
                            <p class="card-text">{{$video->category_description_field}}</p>
                        </div>
                        <img src="/images/{{$video->card_background_image->secondary_link}}" alt="">
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
            <h2 class="sub-title">Наши клиенты</h2>

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
        <div class="free-project dashed-bottom-yellow white-popup" id="calculation">
            <h2 class="sub-title">Бесплатный расчет проекта</h2>
            <p class="sub-title-text">Оставьте заявку и менеджер свяжется с вами по указанному номеру и рассчитывает
                заказ.</p>
            <div class="calculate">
                <input type="text" class="input phone popup-input" data-mask="+7(000)000-00-00" placeholder="Номер телефона" data-field-name="phone" data-field-type="string">
                <button class="calculated-button send-form">Рассчитать</button>
            </div>
        </div>
    </section>
@endsection