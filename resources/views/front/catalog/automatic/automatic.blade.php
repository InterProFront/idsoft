@extends('front.layout')
@include('front.catalog.automatic.meta')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = false; ?>
    {{----}}
    <section class="content dashed-bottom">
        <div class="page-title-image">
            <div class="image-wrap">
                <img src="/img/title.jpg" alt="">
            </div>
            <h1 class="page-title">Автоматизация ресторанов и кафе</h1>
        </div>
        <div class="main-content-block">
            <div class="col-1-2">
                <div class="text-block">
                    <p>Кафе – одно из самых распространенных типов общественного питания в Казахстане. В этом сегменте рынка идет особо сильная конкурентная борьба за постоянных клиентов. Автоматизация такого вида бизнеса - одна из важнейших составляющих для повышения скорости и качества обслуживания, сохранения и приумножения текущей клиентской базы.</p>
                    <br>
                    <p>Автоматизация процессов повышает прозрачность, сокращаются издержки, пресекаются злоупотребление, а рабочее время персонала используется рациональнее.</p>
                    <br>
                    <h3>Автоматизация кафе</h3>
                    <br>
                    <img src="/img/test.jpg" alt="">
                    <br>
                </div>
            </div>
            <div class="col-1-2">
                <div class="right-menu-block">
                    <p class="menu-title">Готовые решения</p>
                    <ul class="right-menu">
                        <li class="menu-item active"><a href="/automatic/#" class="link">Рестораны и кафе</a></li>
                        <li class="menu-item"><a href="/automatic/#" class="link">Фастфуды и столовые</a></li>
                        <li class="menu-item"><a href="/automatic/#" class="link">Бутики</a></li>
                        <li class="menu-item"><a href="/automatic/#" class="link">Розничные магазины</a></li>
                        <li class="menu-item"><a href="/automatic/#" class="link">Салоны красоты</a></li>
                        <li class="menu-item iiko-popup"><a href="/automatic/#" class="link">Автоматизация IIKO</a>
                            <div class="left-popup">
                                <ul class="popup-menu">
                                    <li class="popup-item"><a href="/automatic/iiko/#" class="link">Сеть ресторанов</a>
                                    </li>
                                    <li class="popup-item"><a href="/automatic/iiko/#" class="link">Ресторан
                                            обслуживания у столов</a></li>
                                    <li class="popup-item"><a href="/automatic/iiko/#" class="link">Ресторан быстрого
                                            обслуживания</a></li>
                                    <li class="popup-item"><a href="/automatic/iiko/#" class="link">Небольшое
                                            заведение</a></li>
                                    <li class="popup-item"><a href="/automatic/iiko/#" class="link">Доставка</a></li>
                                    <li class="popup-item"><a href="/automatic/iiko/#" class="link">Корпоративное
                                            питание</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="capability">
                    <h4>Возможности системы</h4>
                    <br>
                    <p>Система налаживает автоматические процессы сбыта, контроля нагрузки по залам и столикам, складской учет.</p>
                    <br>
                    <p>Так же система позволяет печатать чеки и предзаказники, учитывать рабочее время персонала и вести учет остатков в реальном времени.</p>
                </div>
            </div>
        </div>
        <div class="second-content">
            <div class="col-1-2">
                <div class="text-block">
                    <h3>Результаты</h3>
                    <br>
                    <h4>Продажи</h4>
                    <p>Строго фиксированный прием и оплата каждого заказа.</p>
                    <br>
                    <h4>Сервис</h4>
                    <p>Быстрое и точное обслуживание гостей, повышение скорости приготовления и подачи блюд за счет автоматизированного внесения, распределения информации о заказе в соответствующие подразделения производства (например, в горячий цех, в холодный цех или в бар) и своевременного оповещения официанта о готовности того или иного блюда или напитка. Кухня и официанты работают эффективнее.</p>
                    <br>
                    <h4>Персонал</h4>
                    <p>Статистика работы каждого сотрудника в различных разрезах дисциплинирует персонал, максимально снижается уровень злоупотреблений со стороны официантов, барменов, поваров.</p>
                    <br>
                    <h4>Склад</h4>
                    <p>Автоматизированное получение и списание продуктов, контроль уровня запасов на складе и сроков хранения продуктов, анализ закупочных цен.</p>
                    <br>
                    <h4>Кухня</h4>
                    <p>Строгое следование рецептурам за счет калькуляционных карт, строгий учет реальных остатков ингредиентов и полуфабрикатов, автоматический расчет и анализ себестоимости блюд.</p>
                    <br>
                    <h4>Управление</h4>
                    <p>Анализ движения денежных и материальных средств, взаиморасчетов с контрагентами, удобное и оперативное формирование отчетов о продажах по официантам, блюдам, дням, клиентским картам. Анализ рентабельности как всего предприятия так каждого блюда/товара/услуги в отдельности.</p>
                    <br>
                </div>
            </div>
            <div class="col-1-2">
                <div class="advantages-block">
                    <div class="block-item">
                        <div class="img-wrap">
                            <img src="/img/g2.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>
                                <a href="#">Удаленная бухгалтерия</a>
                                Приобретая готовое решение, вы получаете <strong>скидку 10%</strong> на услуги бухгалтера
                            </p>
                        </div>
                    </div>
                    <div class="block-item">
                        <div class="img-wrap">
                            <img src="/img/g1.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>
                                Более <a href="#">30 ресторанов и кафе</a>
                                используют наше решение
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-separator">
            <div class="separator dotted"></div>
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
        <div class="warranty">
            <p>Мы доставим и настроим комплект оборудования, установим программное обеспечение. На оборудование <strong>гарантия 12 месяцев.</strong></p>
        </div>
        <div class="cost-block">

            <h2 class="cost">  <span class="sale">560 000 тг</span>от 475 000 тенге</h2>
        </div>
        <div class="credit">
            <p>Возможна <strong>беспроцентная рассрочка</strong> на 2 месяца и выплатами 212 000 тенге ежемесячно, или
            услуги <strong>аренды оборудования</strong> под 10% от стоимости комплекта.</p>
        </div>
        <div class="button-wrap">
            <div class="button buy-it">Оформить заказ</div>
        </div>

    </section>
@endsection