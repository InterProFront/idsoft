@extends('back.layout')
@section('content')
<div class="block ">
<div class="field-wrap ">
<label class="input-file">
</label>
<ul class="group-block group_container" data-block="main_menu" data-group="menu" data-owner-id="0">
@foreach($main_menu->menu_group as $item_menu )
@include('back.blocks.groupitems.main_menu.menu')
@endforeach
</ul>
  <button class="any_create" data-block="main_menu" data-group="menu"  data-descr="Эл. первой группы" data-owner-id="0"> Добавить</button>
</div>
<div class="field-wrap buttons">
<button class="btn btn-primary pull-right any_save" data-block="main_menu" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
</div>
@endsection