@include('front.catalog.category.meta_video')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content catalog video dashed-bottom">
        <h1 class="block-title">{{$seo->category_name_field}}</h1>
        <div class="advantages advantages-top">
            @if($seo->category_name_field == 'Стеллажи и витрины')
                <div class="advantages-item">
                    <div class="image-wrap">
                        <img src="/img/s3.PNG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="advantages-title">Отправьте заявку</p>
                        <div class="advantages-text">
                            Замерщик приедет на объект, проконсультирует и проведет замер
                        </div>
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="image-wrap">
                        <img src="/img/s2.PNG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="advantages-title">Утверждение проекта</p>
                        <div class="advantages-text">
                            Дизайнер предоставит на рассмотрение эскизы и чертежи.
                        </div>
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="image-wrap">
                        <img src="/img/s1.PNG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="advantages-title">Монтаж</p>
                        <div class="advantages-text">
                            Когда будет готова, мы установим ее в подготовенном помещении.
                        </div>
                    </div>
                </div>
            @else
                <div class="advantages-item">
                    <div class="image-wrap">
                        <img src="/img/v1.PNG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="advantages-title">Отправьте заявку</p>
                        <div class="advantages-text">
                            Специалист приедет на объект, проконсультирует и предложит решение.
                        </div>
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="image-wrap">
                        <img src="/img/v2.PNG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="advantages-title">Коммерческое предложение</p>
                        <div class="advantages-text">
                            Мы подготовим смету, рекомендации и сроки реализации проекта.
                        </div>
                    </div>
                </div>
                <div class="advantages-item">
                    <div class="image-wrap">
                        <img src=/img/v3.PNG alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="advantages-title">Монтаж</p>
                        <div class="advantages-text">
                            Установка, подключение и настройка конфигурации занимает от 3 до 4 дней.
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="category-block video">
            @foreach($category_1 as $item)
                <div class="category-item">
                    <a href="/catalog/{{$item->slug_field}}">
                        <div class="image-wrap">
                            <img src="/images/{{$item->card_background_image->icon_link}}" alt="{{$item->card_background_image->alt}}" class="static">
                            <img src="/images/{{$item->card_hover_image->primary_link}}" alt="{{$item->card_hover_image->alt}}" class="hover">
                        </div>
                        <p class="wrap"><span>{{$item->category_name_field}}</span></p>
                    </a>
                </div>
            @endforeach
        </div>

    </section>
@endsection