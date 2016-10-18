@extends('back.layout')
@section('content')
<div class="field-wrap ">
<label class="field-title"> Заголовок </label>
<input type="text" data-field-type="string" data-field-name="course" data-block="clients_filter" class="input-field block_field" value="{{$clients_filter->course_field}}" placeholder="Строка">
</div>
<div class="field-wrap group-wrap">
<div class="group-title-row"><label class="group-title">institution</label>  <button class="any_create button blue" data-block="clients_filter" data-group="institution"  data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент</button>
</div><ul class="group-block group_container" data-block="clients_filter" data-group="institution" data-owner-id="0">
@foreach($clients_filter->institution_group as $item_institution )
@include('back.blocks.groupitems.clients_filter.institution')
@endforeach
</ul>
</div>
<div class="field-wrap group-wrap">
<div class="group-title-row"><label class="group-title">city</label>  <button class="any_create button blue" data-block="clients_filter" data-group="city"  data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент</button>
</div><ul class="group-block group_container" data-block="clients_filter" data-group="city" data-owner-id="0">
@foreach($clients_filter->city_group as $item_city )
@include('back.blocks.groupitems.clients_filter.city')
@endforeach
</ul>
</div>
<div class="field-wrap buttons">
<button class="btn btn-primary pull-right any_save" data-block="clients_filter" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
</div>
@endsection