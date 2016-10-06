@include('front.information.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content inf dashed-bottom">
        <h1 class="block-title">{{$inf->page_name_field}}</h1>
        <div class="page-title-image">
            <div class="image-wrap">
                <img src="/images/{{$inf->background_image->primary_link}}" alt="{{$inf->background_image->alt}}">
            </div>
        </div>
        <div class="main-content-block">
            <div class="col-1-2">
                <div class="text-block">
                    {!! $inf->content_field !!}
                </div>
            </div>
            <div class="col-1-2">
                    <div class="right-menu-block">
                        <ul class="right-menu">
                            @foreach($all as $item)
                                <li class="menu-item">
                                    <div class="orange-wrap">
                                    <a href="/{{$item->slug_field}}" class="link">{{$item->page_name_field}}</a>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
            </div>
        </div>

        <div class="free-project dashed-bottom-yellow">
            <h2 class="sub-title">Бесплатный расчет проекта</h2>
            <p class="sub-title-text">Оставьте заявку и менеджер свяжется с вами по указанному номеру и рассчитывает заказ.</p>
            <div class="calculate">
                <input type="text" class="input phone" data-mask="+7(000)000-00-00" placeholder="Номер телефона">
                <button class="calculated-button">Рассчитать</button>
            </div>
        </div>
@endsection