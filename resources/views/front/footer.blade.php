@section('footer')
    <footer>
        <nav class="footer-menu">
            <ul class="menu-list">
                <li class="menu-item"><a href="/inf/about" class="menu-link all-site-menu">О компании</a></li>
                <li class="menu-item"><a href="/inf/support" class="menu-link all-site-menu">Поддержка</a></li>
                <li class="menu-item"><a href="/clients" class="menu-link all-site-menu">Наши клиенты</a></li>
                <li class="menu-item"><a href="/inf/drivers-and-docs" class="menu-link all-site-menu">Драйверы и документация</a></li>
                <li class="menu-item"><a href="/inf/partners" class="menu-link all-site-menu">Стать партнером</a></li>
            </ul>
        </nav>
        <div class="advantages">
            @foreach($static->adventages_group as $adv_item)
                <div class="advantages-item">
                    <div class="image-wrap">
                        <img src="/images/{{$adv_item->adv_img_image->primary_link}}" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="advantages-title">{{$adv_item->adv_title_field}}</p>
                        <div class="advantages-text">
                            {!!$adv_item->adv_text_field!!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="bottom-row">
            <div class="left">
                <p class="gray-text">{{$static->copyright_field}}</p>
            </div>
            <div class="right">
                <p class="gray-text">Сделано в <a href="http://interpro.kz" rel="noindex, nofollow">ИнтерПро</a></p>
            </div>
        </div>
    </footer>
@endsection