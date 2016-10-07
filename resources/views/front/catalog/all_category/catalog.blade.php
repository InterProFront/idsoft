@include('front.catalog.all_category.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content catalog dashed-bottom">
        <h1 class="block-title">Оборудование для автоматизации</h1>
        <div class="price-list">
            <h2 class="sub-title">Прайс-лист на почту</h2>
            <div class="row">
                <input type="text" class="input mail" placeholder="Эл. почта">
                <button class="button give-price">Получить</button>
            </div>
        </div>
        <div class="category-block">
            @foreach($category_1 as $item)
                <div class="category-item">
                    <a href="/catalog/{{$item->slug_field}}">
                        <div class="image-wrap">
                            <img src="/images/{{$item->card_background_image->primary_link}}" alt="{{$item->card_background_image->alt}}" class="static">
                            <img src="/images/{{$item->card_hover_image->primary_link}}" alt="{{$item->card_hover_image->alt}}" class="hover">
                        </div>
                        <p class="wrap"><span>{{$item->category_name_field}}</span></p>
                    </a>
                </div>
            @endforeach
        </div>

    </section>
@endsection