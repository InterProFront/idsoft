@include('front.catalog.product.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content product">
        <div class="bread-crumb">
            <span class="crumb-item"><a href="#">Каталог оборудования</a></span>
            <span class="crumb-separate">→</span>
            <span class="crumb-item"><a href="#">POS-системы</a></span>
        </div>
        <h1 class="block-title">Сенсорный моноблок IDSOFT ID5000</h1>

        <div class="product-grid">
            <div class="col-1-2">
                <div class="preview-block">
                    <div class="big-picture">
                        <img src="/img/390.jpg" class="zoom" data-zoom-image="/img/1100.jpg">
                    </div>
                    <div class="pictures-row" id="gallery_01">
                        <a href="#" data-image="/img/390.jpg" data-zoom-image="/img/1100.jpg">
                            <img id="img_01" src="/img/90.jpg"/>
                        </a>
                        <a href="#" data-image="/img/391.jpg" data-zoom-image="img/1101.jpg">
                            <img id="img_01" src="/img/91.jpg"/>
                        </a>

                    </div>
                </div>
                <div class="automatic-block">
                    <ul class="automatic-list">
                        <li class="item-link"><p class="automatic-title">Программное обеспечение</p></li>
                        <li class="item-link"><a href="#" class="link">Paloma 365</a></li>
                        <li class="item-link"><a href="#" class="link">1С Розница</a></li>
                    </ul>
                    <ul class="automatic-list">
                        <li class="item-link"><p class="automatic-title">Применяется в автоматизации</p></li>
                        <li class="item-link"><a href="#" class="link">Кафе и ресторанов</a></li>
                        <li class="item-link"><a href="#" class="link">Фастфудов и столовых</a></li>
                        <li class="item-link"><a href="#" class="link">Бутиков</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-1-2">
                <div class="buy-button-block">
                    <div class="row-1-2">
                        <div class="col-1-2">
                            <p class="sale">250 000 тг</p>
                            <p class="cost">209 000 тг</p>
                        </div>
                        <div class="col-1-2">
                            <p class="text">При заказе свыше 5 позиций действуют скидки.</p>
                        </div>
                    </div>
                    <div class="row-1-2">
                        <div class="col-1-2">
                            <button class="button buy-it">Заказать</button>
                        </div>
                        <div class="col-1-2">
                            <p class="text">Возможна рассрочка и аренда оборудования.</p>
                        </div>
                    </div>
                </div>
                <div class="product-description-block text-block">
                    <h4>Описание</h4>
                    <p>Новая модель сенсорного POS моноблока теперь ещё мощнее, элегантнее. IDSOFT ID5000 теперь
                        поставляется с твёрдотельным накопителем (SSD), что позволяет повысить производительность в три
                        раза. Новый мощный процессор Celeron открывает новые горизонты в производительности кассовых
                        программ на данном моноблоке.</p>
                    <br>
                    <p>Сенсорный моноблок IDSOFT ID5000 идеален для столовых, кафе, ресторанов, фастфудов, магазинов.
                        Кассовая зона теперь более компактная, но более мощная.</p>
                    <br>
                    <h4>Производитель</h4>
                    <p>ID-Soft, Казахстан</p>
                    <br>
                    <h4>Для чего применяется</h4>
                    <p>Сенсорный блок помогает сократить оформление и комплектацию заказа сотрудниками заведения.</p>
                    <br>
                </div>
            </div>
        </div>
        <div class="block-separator">
            <div class="separator"></div>
        </div>
        <div class="technical-parameters">
            <div class="title-block">
                <h2 class="sub-title">Технические характеристики</h2>
                <span class="open-close-button"><a href="#">Свернуть</a></span>
            </div>
            <div class="parameters-block">
                <div class="param-row">
                    <div class="col-30">
                        <p>Модель</p>
                    </div>
                    <div class="col-70">
                        <p>ID5000</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Материнская плата</p>
                    </div>
                    <div class="col-70">
                        <p>Intel 1037</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Процессор</p>
                    </div>
                    <div class="col-70">
                        <p>Dual Core 1.8 ГГц</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Оперативная память</p>
                    </div>
                    <div class="col-70">
                        <p>2 Гб</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Графический процессор</p>
                    </div>
                    <div class="col-70">
                        <p>Встроенный Intel GMA950, Support DirectX9.0</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Интерфейсы ввода-вывода</p>
                    </div>
                    <div class="col-70">
                        <p>RJ-45 LAN Port (2), PS/2 Keyboard Port, VGA Port, USB 2.0 (4),</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p></p>
                    </div>
                    <div class="col-70">
                        <p>Serial Port (4), Parallel Port (1), DC Power Port</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Видеопамять</p>
                    </div>
                    <div class="col-70">
                        <p>224 Мб</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Жесткий диск</p>
                    </div>
                    <div class="col-70">
                        <p>SSD 32 Гб</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Экран</p>
                    </div>
                    <div class="col-70">
                        <p>15-ти дюймовый TFT LCD</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Яркость</p>
                    </div>
                    <div class="col-70">
                        <p>250 cd/m<sup>2</sup></p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Разрешение</p>
                    </div>
                    <div class="col-70">
                        <p>1024x768 пикселей</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Сенсорный экран</p>
                    </div>
                    <div class="col-70">
                        <p>Экран высокого качества, 5 линий</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Угол обзора</p>
                    </div>
                    <div class="col-70">
                        <p>140° по горизонт., 130° по верт.</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Рабочая температура</p>
                    </div>
                    <div class="col-70">
                        <p>От 0°C до 40°C</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Температура хранения</p>
                    </div>
                    <div class="col-70">
                        <p>От -20°C до 40°C</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Размер упаковки</p>
                    </div>
                    <div class="col-70">
                        <p>418×418×317 см</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Вес, нетто</p>
                    </div>
                    <div class="col-70">
                        <p>7,8 кг</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Вес брутто</p>
                    </div>
                    <div class="col-70">
                        <p>9 кг</p>
                    </div>
                </div>
                <div class="param-row">
                    <div class="col-30">
                        <p>Питание</p>
                    </div>
                    <div class="col-70">
                        <p>12 вольт</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-separator">
            <div class="separator black"></div>
        </div>
        <div class="product-related">
            <div class="title-block">
                <h2 class="sub-title">Сопутствующие товары</h2>
            </div>
            <div class="products-list">
                @for($i = 0; $i < 6; $i++)
                    <div class="product-item">
                        <a href="#">
                            <div class="img-wrap">
                                <img src="/img/123.JPG" alt="">
                            </div>
                            <div class="text-wrap">
                                <p class="wrap">
                                    <span>Дисплей покупателя Senor Tech USB</span>
                                </p>
                                <p class="cost">27 240 тг <span class="sale"></span></p>
                            </div>
                        </a>
                    </div>
                @endfor
                <div class="product-item">
                    <a href="#">
                        <div class="img-wrap">
                            <img src="/img/123.JPG" alt="">
                        </div>
                        <div class="text-wrap">
                            <p class="wrap">
                               <span>Дисплей покупателя Senor Tech USB</span>
                            </p>
                            <p class="cost">27 240тг <span class="sale">50 000 тг</span></p>
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>
@endsection