@include('front.accounting.meta')
@extends('front.layout')
@section('content')
    <?php $shadow = false; ?>
    {{----}}
    <section class="content accounting dashed-bottom">
        <div class="page-title-image">
            <div class="image-wrap">
                <img src="/img/title.jpg" alt="">
            </div>
            <h1 class="page-title">Бухгалтерия для предпринимателей и малого бизнеса</h1>
        </div>
        <div class="main-content-block">
            <div class="col-1-2">
                <div class="text-block">
                    <h3>Возьмем бухгалетерию на себя</h3>
                    <br>
                    <p>Как организовать образцовую бухгелтерию, избежав рутины и поиска сотрудников и организации
                        рабочего процесса?</p>
                    <br>
                    <p>Вам не требуется оформлять бухгалтера в штат и платить ему зарплату, организовать его рабочее
                        место и купить оргтехнику. Вы выбираете тариф, заключаете договор и получаете профессиональную
                        бухгалтерию без лишних хлопот.</p>
                    <br>
                    <p>Мы сдаем отчеты и выставляем счета, помогаем в оптимизации налогов и содержим все бухгалтерские
                        документы в образцовом порядке, а вы концентрируетесь на главном.</p>
                    <br>
                </div>
            </div>
            <div class="col-1-2">
                <div class="stage">
                    <p><span class="year">54</span>
                        <span class="year-small">года</span> суммарный опыт <br>в бухгалетрии сотрудников <br>ID-Soft
                        Бухгалтерия</p>
                </div>
            </div>
        </div>
        <div class="employs-block">
            <h2 class="block-title">Руководство</h2>
            <div class="employs">
                <div class="employ-item">
                    <div class="img-wrap">
                        <img src="/img/emp1.jpg" alt="">
                    </div>
                    <div class="name-wrap">
                        <p class="name">Ольга Ли</p>
                        <p class="profession">Главный бухгалтер</p>
                    </div>
                    <div class="about-wrap text-block">
                        <p>Профессиональный бухгалтер РК, член ассоциации профессиональных бухгалтеров и бухгалтерских
                            организаций. Профессиональный стаж более 15 лет. </p>
                        <br>
                        <p>Два высших образования (техническое и экономическое). Ольга работала главным бухгалтером в
                            крупных частных и государственных компаниях, является практикующим консультантом по
                            финансовым вопросам и бухгалтерскому учету.</p>
                    </div>
                </div>
                <div class="employ-item">
                    <div class="img-wrap">
                        <img src="/img/emp2.jpg" alt="">
                    </div>
                    <div class="name-wrap">
                        <p class="name">Ольга Кобзева</p>
                        <p class="profession">Директор</p>
                    </div>
                    <div class="about-wrap text-block">
                        <p>Профессиональный бухгалтер РК, член ассоциации профессиональных бухгалтеров и бухгалтерских
                            организаций. Специалист по налоговому учету c высшим экономическим образованием.</p>
                        <p>Профессиональный стаж более 13 лет, 10 из которых в аутсорсинге. Имеет практический опыт
                            работы с казахстанскими и зарубежными компаниями малого и среднего бизнеса, а так же
                            некоммерческими организациями.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="big-image">
            <img src="/img/work.jpg" alt="">
            <span class="image-name">Рабочий процесс</span>
        </div>
        <div class="advantages-title">
            <h2 class="block-title">Ощутимые преимущества</h2>
        </div>
        <div class="second-content">
            <div class="col-1-2">
                <div class="text-block">
                    <h4>Работает команда</h4>
                    <p>В сложной ситуации, опытная команда предложит такое решение вопроса, которого не придложит
                        штатный бухгалтер.</p>
                    <br>
                    <h4>Образцовый порядок</h4>
                    <p>Благодаря отлаженным процессам, мы поддерживаем в бухгалтерском учете образцовый порядок.</p>
                    <br>
                    <h4>Все вовремя</h4>
                    <p>Если у бухгалтера ведущего вашу компанию появляется риск просрочки, на помощь ему приходит
                        команда и мы ударным темпом решаем вопрос.</p>
                    <br>
                    <h4>Надежно</h4>
                    <p>За ошибки штатного бухгалтера вы заплатите <strong>крупный штраф</strong>. Если ошибемся мы — мы
                        возместим все затраты. </p>
                    <br>
                    <h4>Вежливые люди</h4>
                    <p>Мы все хотим иметь дело с приятными людьми, которые хорошо знают свое дело. Для нас вежливость
                        такой же показатель профессионализма, как и доскональное знание бухгалтерии.</p>
                    <br>
                </div>
            </div>
            <div class="col-1-2">
                <div class="advantages-block">
                    <div class="block-item">
                        <div class="img-wrap">
                            <img src="/img/ac2.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>
                                Мы прогнозируем и <strong>безопасно снижаем налоги</strong>, благодаря знанию налогового
                                кодекса.
                            </p>
                        </div>
                    </div>
                    <div class="block-item">
                        <div class="img-wrap">
                            <img src="/img/ac1.png" alt="">
                        </div>
                        <div class="text-wrap">
                            <p>
                                <strong>Наши услуги прозрачны</strong>
                                <br>
                                Вы в любой момент знаете, чем мы занимаемся.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tarifs">
            <div class="page-title">
                <h2 class="block-title">Выгодные тарифы</h2>
            </div>
            <div class="tarif-block">
                <div class="tarif-item">
                    <h4 class="tarif-name">Индивидуальным <br> предпринимателям</h4>
                    <ul class="tarifs">
                        <li class="item">
                            <p><a href="#">Предоставление услуг</a> <span class="cost">от 35 000 тг</span></p>
                        </li>
                        <li class="item">
                            <p><a href="#">Торговля</a> <span class="cost">от 35 000 тг</span></p>
                        </li>
                        <li class="item">
                            <p><a href="#">Производство</a> <span class="cost">от 35 000 тг</span></p>
                        </li>
                        <li class="item">
                            <p><a href="#">Крестьянское хозяйство</a> <span class="cost">от 35 000 тг</span></p>
                        </li>
                    </ul>
                </div>
                <div class="tarif-item">
                    <h4 class="tarif-name">Юридическим <br> лицам</h4>
                    <ul class="tarifs">
                        <li class="item">
                            <p><a href="#">Предоставление услуг</a> <span class="cost">от 35 000 тг</span></p>
                        </li>
                        <li class="item">
                            <p><a href="#">Торговля</a> <span class="cost">от 35 000 тг</span></p>
                        </li>
                        <li class="item">
                            <p><a href="#">Производство</a> <span class="cost">от 35 000 тг</span></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection