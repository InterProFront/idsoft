@extends('back.layout')
@section('content')
    <?php $title = 'Редактирование главного меню'?>
    <div class="content-wrap">
        <div class="field-wrap group-wrap">
            <div class="group-title-row"><label class="group-title">Главное меню</label>
                <button class="any_create button blue" data-block="main_menu" data-group="menu"
                        data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент
                </button>
            </div>
            <ul class="group-block group_container" data-block="main_menu" data-group="menu" data-owner-id="0">
                @foreach($main_menu->menu_group as $item_menu )
                    @include('back.blocks.groupitems.main_menu.menu')
                @endforeach
            </ul>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="main_menu" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection