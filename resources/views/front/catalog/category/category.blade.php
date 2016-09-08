@include('front.catalog.all_category.meta')
@extends('front.layout')
@section('content')
    <?php $shadow = true; ?>
    {{----}}
    <section class="content category">
        <h1 class="block-title">POS-системы</h1>
        <div class="product-list">
            <div class="product-item">
                <a href="/product">
                    <div class="img-wrap">
                        <img src="/img/1.JPG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="wrap"><span>Shtrih Flypos Pro</span></p>
                        <p class="about-product">
                            Эргономичный и стильный, отлично подходит небольших и средних магазинов, где нужно компактное и функциональное решение.
                        </p>
                        <p class="cost">345 000 тг<span class="sale">450 000 тг</span></p>
                    </div>
                </a>
            </div>
            <div class="product-item">
                <a href="/product">
                    <div class="img-wrap">
                        <img src="/img/2.JPG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="wrap"><span>Сенсорный моноблок Senor ICPOS 194</span></p>
                        <p class="about-product">
                            Новый сенсорый моноблок SENOR ICPOS 194 создан, чтобы выполнять ещё больше задач.
                        </p>
                        <p class="cost">255 000 тг<span class="sale"></span></p>
                    </div>
                </a>
            </div>
            <div class="product-item">
                <a href="/product">
                    <div class="img-wrap">
                        <img src="/img/3.JPG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="wrap"><span>Клавиатурный моноблок Citaq A1</span></p>
                        <p class="about-product">
                            Компактная клавиатурная POS система в комплекте с клавиатурой и денежным ящиком.
                        </p>
                        <p class="cost">356 000 тг<span class="sale"></span></p>
                    </div>
                </a>
            </div>
            <div class="product-item">
                <a href="/product">
                    <div class="img-wrap">
                        <img src="/img/4.JPG" alt="">
                    </div>
                    <div class="text-wrap">
                        <p class="wrap"><span>Сенсорный моноблок IDSOFT ID5000</span></p>
                        <p class="about-product">
                            Новый современный сенсорный моноблок с возможностью настенного монтажа.
                        </p>
                        <p class="cost">220 000 тг<span class="sale"></span></p>
                    </div>
                </a>
            </div>
        </div>
    </section>
@endsection