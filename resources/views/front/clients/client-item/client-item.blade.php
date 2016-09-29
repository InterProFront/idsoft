@include('front.clients.client-item.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content client dashed-bottom">
        <div class="bread-crumb">
            <span class="crumb-item"><a href="#">Каталог оборудования</a></span>
            <span class="crumb-separate">→</span>
            <span class="crumb-item"><a href="#">POS-системы</a></span>
        </div>
        <h1 class="block-title">Сенсорный моноблок IDSOFT ID5000</h1>
        <div class="title-image">
            <img src="/img/latortine.JPG" alt="">
        </div>
        <div class="main-content-grid">
            <div class="col-1-2">
                <div class="text-block">
                    <h4>После успешного опыта в автоматизации розничного магазина, компания La Tartine обратилась с просьбой внедрить систему учёта в новом кафе.</h4>
                    <br>
                    <p>Французские бизнесмены по достоинству оценили простоту и функциональность нашей системы автоматизации. Программа работает в связке с фискальными регистратором российской компании Штрих-М. </p>
                    <br>
                    <p>Официанты очень оперативно работают благодаря удобству программы, а офис, не нарушая работу кафе, всегда может контролировать весь денежный поток кафе, номенклатуру, цены.</p>
                    <br>
                    <h3>Отзыв клиента</h3>
                    <br>
                    <p>«Французские бизнесмены по достоинству оценили простоту и функциональность нашей системы автоматизации. Программа работает в связке с фискальными регистратором российской компании Штрих-М»</p>
                    <br>
                    <p>Ирина Лелявская,</p>
                    <p>генеральныйы директор</p>
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
                    @for($i = 0; $i < 5; $i++)
                        <div class="product-item">
                            <a href="#">
                                <div class="img-wrap">
                                    <img src="/img/123.JPG" alt="">
                                </div>
                                <div class="text-wrap">
                                    <p>Сенсорный моноблок в качестве станции официанта</p>
                                    <p class="wrap">
                                        <span>Дисплей покупателя Senor Tech USB</span>
                                    </p>
                                    <p class="cost">27 240 тг <span class="sale"></span></p>
                                </div>
                            </a>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </section>
@endsection