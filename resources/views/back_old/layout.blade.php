<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Панель управления</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="/Admin/js/jquery-1.8.3.js"></script>
    @include('back.style')
    @include('back.scripts')
    @yield('styles')
    @yield('scripts')
</head>
<body>
<header>
    <div class="site-name-block">
        <a href="/" class="site-name">IDsoft.kz</a>
        <span>Управление сайтом</span>
    </div>
    <nav class="main-menu">
        <ul class="menu">
            {{--<li class="item"><a href="#">Настройки</a></li>--}}
            {{--<li class="item"><a href="#">Пользователи</a></li>--}}
            <li class="item"><a href="/auth/logout">Выход</a></li>
        </ul>
    </nav>
</header>
<main>
    <aside class="main-menu">
        <div class="menu-section">
            <ul class="menu">
                <li class="item"><a href="/adm/edit/all">Главная страница</a></li>
                <li class="item"><a href="/adm/edit/informatic">Информационные страницы</a></li>
                <li class="item"><a href="/adm/edit/clients">Клиенты</a></li>
            </ul>
        </div>
        <div class="menu-section">
            <ul class="menu">
                <li class="item"><a href="/adm/edit/catalog">Каталог оборудования</a></li>
                <li class="item"><a href="/adm/edit/video">Видеонаблюдение</a></li>
                <li class="item"><a href="/adm/edit/showcase">Стеллажи и витрины</a></li>
                <li class="item"><a href="/adm/edit/software">Программное обеспечение</a></li>
                <li class="item"><a href="/adm/edit/auto">Готовые решения</a></li>
                <li class="item"><a href="/adm/edit/accounting">Бухгалтерия</a></li>
            </ul>
        </div>
        <div class="menu-section">
            <ul class="menu">
                <li class="item"><a href="/adm/edit/course">Курс валют</a></li>
                <li class="item"><a href="/adm/edit/menu">Меню</a></li>
                <li class="item"><a href="/adm/edit/inst">Категории заведений</a></li>
                <li class="item"><a href="/adm/edit/city">Города</a></li>
                <li class="item"><a href="/adm/edit/metriks">Метрика</a></li>
            </ul>
        </div>
    </aside>
    <section class="content">
        @yield('content')

    </section>
</main>
</body>
</html>