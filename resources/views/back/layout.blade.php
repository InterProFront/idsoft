<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Тест админки</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/Admin/js/jquery-1.8.3.js"></script>

    @include('back/scripts')
    @yield('scripts')
</head>
<body>
<header class="header">
    <div class="header-button">
        <a href="/" class="logout" target="_blank">"ID-soft" автоматизация и оборудование</a>
    </div>
    <div class="header-button">
        <a href="/auth/logout" class="logout">Выход</a>
    </div>
</header>
<div class="main-content">
    <aside class="left-side-bar">
        <nav class="main-menu">
            <ul class="menu">
                <li class="menu-level-1">
                    <span class="menu-name">Страницы<i class="triangle">▲</i> </span>
                    <ul class="sub-menu">
                        <li class="menu-level-2"><a href="/adm/edit/all">Главная страница</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/informatic">Информационные страницы</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/clients">Клиенты</a></li>
                    </ul>
                </li>
                <li class="menu-level-1">
                    <span class="menu-name">Каталог<i class="triangle">▲</i> </span>
                    <ul class="sub-menu">
                        <li class="menu-level-2"><a href="/adm/edit/catalog">Каталог оборудования</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/video">Видеонаблюдение</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/showcase">Стеллажи и витрины</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/software">Программное обеспечение</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/auto">Готовые решения</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/accounting">Бухгалтерия</a></li>
                    </ul>
                </li>
                <li class="menu-level-1">
                    <span class="menu-name">Допольнительно<i class="triangle">▲</i> </span>
                    <ul class="sub-menu">
                        <li class="menu-level-2"><a href="/adm/edit/course">Курс валют</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/menu">Меню</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/inst">Категории заведений</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/city">Города</a></li>
                        <li class="menu-level-2"><a href="/adm/edit/metriks">Метрика</a></li>
                    </ul>
                </li>
                <li class="menu-level-1"><span class="menu-end"></span></li>
            </ul>
        </nav>
    </aside>
    <article class="content">
        @yield('content')
        @yield('messenger')
        @yield('text')
    </article>
    <aside class="right-side-bar">
        <div class="control-panel">
            <div class="title">
                Управление
            </div>
            <div class="row">
                <label>Дата редактирования</label>
                <p class="text">05.05.14</p>
            </div>
            <div class="row">
                <div class="buttons-block two">
                    <button class="save_all">Сохранить</button>
                    <div class="progress-bar">
                        <div class="bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</div>
</body>
</html>