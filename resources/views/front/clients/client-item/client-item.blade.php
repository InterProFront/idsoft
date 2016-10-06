@include('front.clients.client-item.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content client dashed-bottom">
        <div class="bread-crumb">
            <span class="crumb-item"><a href="/clients">Клиенты</a></span>
        </div>
        <h1 class="block-title">{{$client->page_name_field}}</h1>
        <div class="title-image">
            <img src="/images/{{$client->background_image->primary_link}}" alt="">
        </div>
        <div class="main-content-grid">
            <div class="col-1-2">
                <div class="text-block">
                    {!! $client->content_field !!}
                </div>
            </div>
            <div class="col-1-2">
                <div class="other-places">
                    <p class="menu-title">Другие заведения</p>
                    <ul class="places-list">
                        <li class="item"><a href="#">КофеТайм</a></li>
                        <li class="item"><a href="#">Томато</a></li>
                        <li class="item"><a href="#">МакДональдс</a></li>
                        <li class="item"><a href="#">СтарБакс</a></li>
                        <li class="item"><a href="#">КофеТайм</a></li>
                        <li class="item"><a href="#">СтарБакс</a></li>
                        <li class="item"><a href="#" class="bold">Все 35 ресторанов и кафе</a></li>
                    </ul>
                </div>
                <div class="recommend-letter">
                    <a href="#">
                    <div class="image-wrap frame">
                        <img src="/img/letter.jpg" alt="">
                    </div>
                    <p><span>Рекомендательное письмо La Tortine</span></p>
                    </a>
                </div>
            </div>
        </div>
        <div class="block-separator">
            <div class="separator dashed"></div>
        </div>
        <div class="equipment-block">
            <div class="block-title">
                <h2 class="sub-title">Комплектация</h2>
                <div class="products-list">

                        <div class="product-item">
                            <a href="/soft/programmnoe-obespechenie/paloma365">
                                <div class="img-wrap">
                                    <img src="/images/product_product_base_photo_66_icon.PNG" alt="">
                                </div>
                                <div class="text-wrap">
                                    <p>Программное обеспечение</p>
                                    <p class="wrap">
                                        <span>Облачное решение автоматизации PALOMA365</span>
                                    </p>
                                    <p class="cost">1 706 670 тг  <span class="sale">1 741 500 тг</span></p>
                                </div>
                            </a>
                        </div>



                        <div class="product-item">
                            <a href="/catalog/pos-system/monoblok-citaq-a1">
                                <div class="img-wrap">
                                    <img src="/images/product_product_base_photo_107_icon.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <p>Базовая станция для официантов</p>
                                    <p class="wrap">
                                        <span>Клавиатурный моноблок Citaq A1</span>
                                    </p>
                                    <p class="cost">348 300 тг  </p>
                                </div>
                            </a>
                        </div>
                </div>
            </div>
        </div>
    </section>
@endsection