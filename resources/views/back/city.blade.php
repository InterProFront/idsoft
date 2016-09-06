@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <ul class="group-block group_container" data-block="clients_filter" data-group="city" data-owner-id="0">
                @foreach($clients_filter->city_group as $item_city )
                    @include('back.blocks.groupitems.clients_filter.city')
                @endforeach
            </ul>
            <button class="any_create" data-block="clients_filter" data-group="city" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="clients_filter" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection