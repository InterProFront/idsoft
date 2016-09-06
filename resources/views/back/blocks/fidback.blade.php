@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <ul class="group-block group_container" data-block="fidback" data-group="question" data-owner-id="0">
                @foreach($fidback->question_group as $item_question )
                    @include('back.blocks.groupitems.fidback.question')
                @endforeach
            </ul>
            <button class="any_create" data-block="fidback" data-group="question" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <ul class="group-block group_container" data-block="fidback" data-group="calculation" data-owner-id="0">
                @foreach($fidback->calculation_group as $item_calculation )
                    @include('back.blocks.groupitems.fidback.calculation')
                @endforeach
            </ul>
            <button class="any_create" data-block="fidback" data-group="calculation" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <ul class="group-block group_container" data-block="fidback" data-group="subscribe" data-owner-id="0">
                @foreach($fidback->subscribe_group as $item_subscribe )
                    @include('back.blocks.groupitems.fidback.subscribe')
                @endforeach
            </ul>
            <button class="any_create" data-block="fidback" data-group="subscribe" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <ul class="group-block group_container" data-block="fidback" data-group="order" data-owner-id="0">
                @foreach($fidback->order_group as $item_order )
                    @include('back.blocks.groupitems.fidback.order')
                @endforeach
            </ul>
            <button class="any_create" data-block="fidback" data-group="order" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="fidback" data-entity="block" data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection