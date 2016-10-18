@extends('back.layout')
@section('content')
<li class="group" data-group-id="{{$item_category_2->id_field}}"><div class="block ">
<div class="field-wrap group-wrap">
<div class="group-title-row"><label class="group-title">0</label>  <button class="any_create button blue" data-block="catalog_block" data-group="0"  data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент</button>
</div><ul class="group-block group_container" data-block="catalog_block" data-group="category_2" data-owner-id="{{$item_category_2->id_field}}">
@foreach($item_category_2->product_group as $item_product )
@include('back.blocks.groupitems.catalog_block.product')
@endforeach
</ul>
  <button class="any_create button blue" data-block="catalog_block" data-group="product"  data-descr="Эл. первой группы" data-owner-id="{{$item_category_2->id_field}}">Добавить элемент</button>
<div class="field-wrap ">
<label class="field-title"> Заголовок </label>
<input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="catalog_block" data-group="category_2" class="input-field group_field" value="{{$item_category_2->seo_keywords_field}}" data-item-id="{{$item_category_2->id_field}}" placeholder="Строка">
</div>
<div class="field-wrap ">
<label class="field-title"> Заголовок </label>
<input type="text" data-field-type="string" data-field-name="seo_description" data-block="catalog_block" data-group="category_2" class="input-field group_field" value="{{$item_category_2->seo_description_field}}" data-item-id="{{$item_category_2->id_field}}" placeholder="Строка">
</div>
<div class="field-wrap ">
<label class="field-title"> Заголовок </label>
<input type="text" data-field-type="string" data-field-name="page_title" data-block="catalog_block" data-group="category_2" class="input-field group_field" value="{{$item_category_2->page_title_field}}" data-item-id="{{$item_category_2->id_field}}" placeholder="Строка">
</div>
<div class="field-wrap ">
<label class="field-title"> Заголовок </label>
<input type="text" data-field-type="string" data-field-name="category_name" data-block="catalog_block" data-group="category_2" class="input-field group_field" value="{{$item_category_2->category_name_field}}" data-item-id="{{$item_category_2->id_field}}" placeholder="Строка">
</div>
<div class="field-wrap ">
<label class="field-title"> Заголовок </label>
<input type="text" data-field-type="string" data-field-name="category_description" data-block="catalog_block" data-group="category_2" class="input-field group_field" value="{{$item_category_2->category_description_field}}" data-item-id="{{$item_category_2->id_field}}" placeholder="Строка">
</div>
<div class="field-wrap group-wrap">
<div class="group-title-row"><label class="group-title">0</label>  <button class="any_create button blue" data-block="catalog_block" data-group="0"  data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент</button>
</div><ul class="group-block group_container" data-block="catalog_block" data-group="category_2" data-owner-id="{{$item_category_2->id_field}}">
@foreach($item_category_2->product_group as $item_product )
@include('back.blocks.groupitems.catalog_block.product')
@endforeach
</ul>
  <button class="any_create button blue" data-block="catalog_block" data-group="product"  data-descr="Эл. первой группы" data-owner-id="{{$item_category_2->id_field}}">Добавить элемент</button>
<div class="field-wrap group-wrap">
<div class="group-title-row"><label class="group-title">0</label>  <button class="any_create button blue" data-block="catalog_block" data-group="0"  data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент</button>
</div><ul class="group-block group_container" data-block="catalog_block" data-group="category_2" data-owner-id="{{$item_category_2->id_field}}">
@foreach($item_category_2->product_group as $item_product )
@include('back.blocks.groupitems.catalog_block.product')
@endforeach
</ul>
  <button class="any_create button blue" data-block="catalog_block" data-group="product"  data-descr="Эл. первой группы" data-owner-id="{{$item_category_2->id_field}}">Добавить элемент</button>
<div class="field-wrap ">
<label class="field-title"> Заголовок </label>
<div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                <input type="hidden" class="prefix" data-field-name="card_background" data-group="category_2" data-field-type="image" data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block" value="{{$item_category_2->card_background_image->prefix}}">
                <input type="hidden" class="original_link" data-field-name="card_background" data-group="category_2" data-field-type="image" data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block" value="{{$item_category_2->card_background_image->original_link}}">
                <input type="hidden" class="preview_link" data-field-name="card_background" data-group="category_2" data-field-type="image" data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block" value="{{$item_category_2->card_background_image->preview_link}}">
                <input type="hidden" class="primary_link" data-field-name="card_background" data-group="category_2" data-field-type="image" data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block" value="{{$item_category_2->card_background_image->primary_link}}">
                <input type="hidden" class="secondary_link" data-field-name="card_background" data-group="category_2" data-field-type="image" data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block" value="{{$item_category_2->card_background_image->secondary_link}}">
                <input type="hidden" class="icon_link" data-field-name="card_background" data-group="category_2" data-field-type="image" data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block" value="{{$item_category_2->card_background_image->icon_link}}">
            </div>
            <div class="preview-block">
                    <label class="file-input">
                        <img src="/images/{{$item_category_2->card_background_image->preview_link}}" class="preview" data-field-name="card_background" data-block="catalog_block"  data-group="category_2" data-item-id="{{$item_category_2->id_field}}">
                        <input type="file" accept="image/*" class="input_file group_field" data-field-name="card_background" data-field-type="image" data-block="catalog_block" data-group="category_2" data-item-id="{{$item_category_2->id_field}}" data-entity="groupitem">                </label>
                    </div>
                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text" value="{{$item_category_2->card_background_image->alt}}" data-item-id="{{$item_category_2->id_field}}" data-field-name="card_background" data-block="catalog_block">
                    </div>
                </div>
            </div>
</div>
<div class="field-wrap ">
<label class="field-title"> Заголовок </label>
<div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                <input type="hidden" class="prefix" data-field-name="card_hover" data-group="category_2" data-field-type="image" data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block" value="{{$item_category_2->card_hover_image->prefix}}">
                <input type="hidden" class="original_link" data-field-name="card_hover" data-group="category_2" data-field-type="image" data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block" value="{{$item_category_2->card_hover_image->original_link}}">
                <input type="hidden" class="preview_link" data-field-name="card_hover" data-group="category_2" data-field-type="image" data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block" value="{{$item_category_2->card_hover_image->preview_link}}">
                <input type="hidden" class="primary_link" data-field-name="card_hover" data-group="category_2" data-field-type="image" data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block" value="{{$item_category_2->card_hover_image->primary_link}}">
                <input type="hidden" class="secondary_link" data-field-name="card_hover" data-group="category_2" data-field-type="image" data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block" value="{{$item_category_2->card_hover_image->secondary_link}}">
                <input type="hidden" class="icon_link" data-field-name="card_hover" data-group="category_2" data-field-type="image" data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block" value="{{$item_category_2->card_hover_image->icon_link}}">
            </div>
            <div class="preview-block">
                    <label class="file-input">
                        <img src="/images/{{$item_category_2->card_hover_image->preview_link}}" class="preview" data-field-name="card_hover" data-block="catalog_block"  data-group="category_2" data-item-id="{{$item_category_2->id_field}}">
                        <input type="file" accept="image/*" class="input_file group_field" data-field-name="card_hover" data-field-type="image" data-block="catalog_block" data-group="category_2" data-item-id="{{$item_category_2->id_field}}" data-entity="groupitem">                </label>
                    </div>
                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text" value="{{$item_category_2->card_hover_image->alt}}" data-item-id="{{$item_category_2->id_field}}" data-field-name="card_hover" data-block="catalog_block">
                    </div>
                </div>
            </div>
</div>
<div class="field-wrap group-wrap">
<div class="group-title-row"><label class="group-title">0</label>  <button class="any_create button blue" data-block="catalog_block" data-group="0"  data-descr="Эл. первой группы" data-owner-id="0">Добавить элемент</button>
</div><ul class="group-block group_container" data-block="catalog_block" data-group="category_2" data-owner-id="{{$item_category_2->id_field}}">
@foreach($item_category_2->product_group as $item_product )
@include('back.blocks.groupitems.catalog_block.product')
@endforeach
</ul>
  <button class="any_create button blue" data-block="catalog_block" data-group="product"  data-descr="Эл. первой группы" data-owner-id="{{$item_category_2->id_field}}">Добавить элемент</button>
<div class="field-wrap buttons disabled">
<button type="button" class="any_save" data-block="catalog_block" data-group="category_2" data-entity="groupitem" data-item-id="{{$item_category_2->id_field}}" data-descr="Эл. первой группы"> Сохранить</button>
</div>
</div>
</li>@endsection