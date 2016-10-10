@include('front.accounting.tarifs.meta')
@extends('front.layout')
@section('content')
    {{--Переменная Shadow нужна для определения есть ли тень под меню или нету--}}
    <?php $shadow = true; ?>
    {{----}}
    <section class="content automatic tarif dashed-bottom">
        <h1 class="block-title">{{$tarif->page_name_field}}</h1>
        <div class="page-title-image">
            <div class="image-wrap">
                <img src="/images/{{$tarif->background_image->primary_link}}" alt="{{$tarif->background_image->alt}}">
            </div>
        </div>
        <div class="main-content-block">
            <div class="col-1-2">
                <div class="text-block">
                    {!! $tarif->content_field !!}
                </div>
            </div>
            <div class="col-1-2">
                @foreach($all_tarif as $item_t)
                <div class="right-menu-block">
                    <p class="menu-title">{{$item_t->tarif_name_field}}</p>
                    <ul class="right-menu">
                        @foreach($item_t->tarif_group as $item)
                            <li class="menu-item"><div class="orange-wrap"><a href="/accounting/{{$item->slug_field}}" class="link">{{$item->page_name_field}}</a></div></li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>

            <div class="free-project dashed-bottom-yellow white-popup" id="calculation">
                <h2 class="sub-title">Бесплатный расчет проекта</h2>
                <p class="sub-title-text">Оставьте заявку и менеджер свяжется с вами по указанному номеру и рассчитывает заказ.</p>
                <div class="calculate">
                    <input type="text" class="input phone popup-input" data-mask="+7(000)000-00-00" placeholder="Номер телефона" data-field-name="phone" data-field-type="string">
                    <button class="calculated-button send-form">Рассчитать</button>
                </div>
            </div>
@endsection