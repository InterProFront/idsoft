@extends('back.layout')
@section('content')
<div class="block ">
<div class="field-wrap ">
<label class="input-file">
</label>
<input type="text" data-field-type="string" data-field-name="auto_title" data-block="auto_block" class="input block_field" value="{{$auto_block->auto_title_field}}" placeholder="Строка">
</div>
<div class="field-wrap ">
<label class="input-file">
</label>
<input type="text" data-field-type="string" data-field-name="auto_description" data-block="auto_block" class="input block_field" value="{{$auto_block->auto_description_field}}" placeholder="Строка">
</div>
<div class="field-wrap ">
<label class="input-file">
</label>
<input type="text" data-field-type="string" data-field-name="iiko_title" data-block="auto_block" class="input block_field" value="{{$auto_block->iiko_title_field}}" placeholder="Строка">
</div>
<div class="field-wrap ">
<label class="input-file">
</label>
<input type="text" data-field-type="string" data-field-name="iiko_description" data-block="auto_block" class="input block_field" value="{{$auto_block->iiko_description_field}}" placeholder="Строка">
</div>
<div class="field-wrap ">
<label class="input-file">
</label>
<div class="image-load">
        <div class="drag-n-drop">
            <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
            <div class="img-hide-block">
                <input type="hidden" class="prefix" data-field-name="auto_background" data-field-type="image" data-block="auto_block" value="{{$auto_block->auto_background_image->prefix}}">
                <input type="hidden" class="original_link" data-field-name="auto_background" data-field-type="image" data-block="auto_block" value="{{$auto_block->auto_background_image->original_link}}">
                <input type="hidden" class="preview_link" data-field-name="auto_background" data-field-type="image" data-block="auto_block" value="{{$auto_block->auto_background_image->preview_link}}">
                <input type="hidden" class="primary_link" data-field-name="auto_background" data-field-type="image" data-block="auto_block" value="{{$auto_block->auto_background_image->primary_link}}">
                <input type="hidden" class="secondary_link" data-field-name="auto_background" data-field-type="image" data-block="auto_block" value="{{$auto_block->auto_background_image->secondary_link}}">
                <input type="hidden" class="icon_link" data-field-name="auto_background" data-field-type="image" data-block="auto_block" value="{{$auto_block->auto_background_image->icon_link}}">
            </div>
            <div class="preview-block">
                <img src="/images/{{$auto_block->auto_background_image->preview_link}}" class="preview" data-field-name="auto_background" data-block="auto_block">
                <div class="buttons">
                    <span class="refresh"></span>
                    <span class="clear"></span>
                </div>
            </div>
            <div class="action-block">
                <input type="text" placeholder="alt текст" class="alt-text" value="{{$auto_block->auto_background_image->alt}}" data-field-name="auto_background" data-block="auto_block">
                <label class="file-input">
                    Загрузить
                    <input type="file" accept="image/*" class="input_file block_field"  data-entity="block" data-field-name="auto_background" data-field-type="image" data-block="auto_block">
                </label>
            </div>
        </div>
    </div>
</div>
<div class="field-wrap ">
<label class="input-file">
</label>
<div class="image-load">
        <div class="drag-n-drop">
            <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
            <div class="img-hide-block">
                <input type="hidden" class="prefix" data-field-name="iiko_background" data-field-type="image" data-block="auto_block" value="{{$auto_block->iiko_background_image->prefix}}">
                <input type="hidden" class="original_link" data-field-name="iiko_background" data-field-type="image" data-block="auto_block" value="{{$auto_block->iiko_background_image->original_link}}">
                <input type="hidden" class="preview_link" data-field-name="iiko_background" data-field-type="image" data-block="auto_block" value="{{$auto_block->iiko_background_image->preview_link}}">
                <input type="hidden" class="primary_link" data-field-name="iiko_background" data-field-type="image" data-block="auto_block" value="{{$auto_block->iiko_background_image->primary_link}}">
                <input type="hidden" class="secondary_link" data-field-name="iiko_background" data-field-type="image" data-block="auto_block" value="{{$auto_block->iiko_background_image->secondary_link}}">
                <input type="hidden" class="icon_link" data-field-name="iiko_background" data-field-type="image" data-block="auto_block" value="{{$auto_block->iiko_background_image->icon_link}}">
            </div>
            <div class="preview-block">
                <img src="/images/{{$auto_block->iiko_background_image->preview_link}}" class="preview" data-field-name="iiko_background" data-block="auto_block">
                <div class="buttons">
                    <span class="refresh"></span>
                    <span class="clear"></span>
                </div>
            </div>
            <div class="action-block">
                <input type="text" placeholder="alt текст" class="alt-text" value="{{$auto_block->iiko_background_image->alt}}" data-field-name="iiko_background" data-block="auto_block">
                <label class="file-input">
                    Загрузить
                    <input type="file" accept="image/*" class="input_file block_field"  data-entity="block" data-field-name="iiko_background" data-field-type="image" data-block="auto_block">
                </label>
            </div>
        </div>
    </div>
</div>
<div class="field-wrap ">
<table>
<thead>
<tr>
<td>Название</td>
<td></td>
<td>Публикации</td>
<td>Сортировка</td>
<td>Редактировать</td>
<td>Удалить</td>
</tr>
</thead>
<tbody class="group-block group_container" data-block="auto_block" data-group="auto" data-owner-id="0">
@foreach($auto_block->auto_group as $item_auto )
@include('back.blocks.groupitems.auto_block.auto')
@endforeach
</tbody>
<tfoot>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
  <button class="any_create" data-block="auto_block" data-group="auto"  data-descr="Эл. первой группы" data-owner-id="0"> Добавить</button>
</td>
</tr>
</tfoot>
</table>
</div>
<div class="field-wrap buttons">
<button class="btn btn-primary pull-right any_save" data-block="auto_block" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
</div>
@endsection