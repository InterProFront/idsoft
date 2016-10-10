@extends('back.layout')
@section('content')
    <li class="group" data-group-id="{{$item_product->id_field}}">
        <div class="block ">
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="product_name" data-block="catalog_block"
                       data-group="product" class="input group_field" value="{{$item_product->product_name_field}}"
                       data-item-id="{{$item_product->id_field}}" placeholder="Строка">
            </div>

            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="small_description" data-block="catalog_block"
                       data-group="product" class="input group_field" value="{{$item_product->small_description_field}}"
                       data-item-id="{{$item_product->id_field}}" placeholder="Строка">
            </div>

            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="slug" data-block="catalog_block"
                       data-group="product" class="input group_pre_field" value="{{$item_product->slug_field}}"
                       data-item-id="{{$item_product->id_field}}" placeholder="Строка">
            </div>

            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="catalog_block"
                       data-group="product" class="input group_field" value="{{$item_product->seo_keywords_field}}"
                       data-item-id="{{$item_product->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="seo_description" data-block="catalog_block"
                       data-group="product" class="input group_field" value="{{$item_product->seo_description_field}}"
                       data-item-id="{{$item_product->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="page_title" data-block="catalog_block"
                       data-group="product" class="input group_field" value="{{$item_product->page_title_field}}"
                       data-item-id="{{$item_product->id_field}}" placeholder="Строка">
            </div>

            <div class="field-wrap ">
                <label class="input-file">
                    Описание
                </label>
                <textarea type="text" data-field-type="text" data-field-name="product_description" data-block="catalog_block"
                       data-group="product" class="input group_field"
                       data-item-id="{{$item_product->id_field}}" placeholder="Строка">{{$item_product->product_description_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Производитель
                </label>
                <textarea type="text" data-field-type="text" data-field-name="builder" data-block="catalog_block"
                          data-group="product" class="input group_field"
                          data-item-id="{{$item_product->id_field}}" placeholder="Строка">{{$item_product->builder_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Для чего применяется
                </label>
                <textarea type="text" data-field-type="text" data-field-name="why_apply" data-block="catalog_block"
                          data-group="product" class="input group_field"
                          data-item-id="{{$item_product->id_field}}" placeholder="Строка">{{$item_product->why_apply_field}}</textarea>
            </div>

            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="number" data-field-type="numb" data-field-name="product_sale" data-block="catalog_block"
                       data-group="product" data-item-id="{{$item_product->id_field}}" class="input group_field"
                       value="{{$item_product->product_sale_field}}" placeholder="Целое число">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="number" data-field-type="numb" data-field-name="product_cost" data-block="catalog_block"
                       data-group="product" data-item-id="{{$item_product->id_field}}" class="input group_field"
                       value="{{$item_product->product_cost_field}}" placeholder="Целое число">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <div class="image-load">
                    <div class="drag-n-drop">
                        <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                        <div class="img-hide-block">
                            <input type="hidden" class="prefix" data-field-name="product_base_photo"
                                   data-group="product" data-field-type="image"
                                   data-item-id="{{$item_product->id_field}}" data-block="catalog_block"
                                   value="{{$item_product->product_base_photo_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="product_base_photo"
                                   data-group="product" data-field-type="image"
                                   data-item-id="{{$item_product->id_field}}" data-block="catalog_block"
                                   value="{{$item_product->product_base_photo_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="product_base_photo"
                                   data-group="product" data-field-type="image"
                                   data-item-id="{{$item_product->id_field}}" data-block="catalog_block"
                                   value="{{$item_product->product_base_photo_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="product_base_photo"
                                   data-group="product" data-field-type="image"
                                   data-item-id="{{$item_product->id_field}}" data-block="catalog_block"
                                   value="{{$item_product->product_base_photo_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="product_base_photo"
                                   data-group="product" data-field-type="image"
                                   data-item-id="{{$item_product->id_field}}" data-block="catalog_block"
                                   value="{{$item_product->product_base_photo_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="product_base_photo"
                                   data-group="product" data-field-type="image"
                                   data-item-id="{{$item_product->id_field}}" data-block="catalog_block"
                                   value="{{$item_product->product_base_photo_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <img src="/images/{{$item_product->product_base_photo_image->preview_link}}" class="preview"
                                 data-field-name="product_base_photo" data-block="catalog_block" data-group="product"
                                 data-item-id="{{$item_product->id_field}}">
                            <div class="buttons">
                                <span class="refresh"></span>
                                <span class="clear"></span>
                            </div>
                        </div>
                        <div class="action-block">
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_product->product_base_photo_image->alt}}"
                                   data-item-id="{{$item_product->id_field}}" data-field-name="product_base_photo"
                                   data-block="catalog_block">
                            <label class="file-input">
                                Загрузить
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="product_base_photo" data-field-type="image"
                                       data-block="catalog_block" data-group="product"
                                       data-item-id="{{$item_product->id_field}}" data-entity="groupitem">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="group-block group_container" data-block="catalog_block" data-group="product"
                data-owner-id="{{$item_product->id_field}}">
                @foreach($item_product->product_image_group as $item_product_image )
                    @include('back.blocks.groupitems.catalog_block.product_image')
                @endforeach
            </ul>
            <button class="any_create" data-block="catalog_block" data-group="product_image"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_product->id_field}}"> Добавить картинку
            </button>
            {{------------------------------------------------------------------------------------}}

            <ul class="group-block group_container" data-block="catalog_block" data-group="product"
                data-owner-id="{{$item_product->id_field}}">
                @foreach($item_product->product_auto_group as $item_product_auto )
                    @include('back.blocks.groupitems.catalog_block.product_auto')
                @endforeach
            </ul>
            <button class="any_create" data-block="catalog_block" data-group="product_auto"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_product->id_field}}"> Добавить "Используется в автоматизации"
            </button>
            {{------------------------------------------------------------------------------------}}

            <ul class="group-block group_container" data-block="catalog_block" data-group="product"
                data-owner-id="{{$item_product->id_field}}">
                @foreach($item_product->soft_related_group as $item_soft_related )
                    @include('back.blocks.groupitems.catalog_block.soft_related')
                @endforeach
            </ul>
            <button class="any_create" data-block="catalog_block" data-group="soft_related"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_product->id_field}}"> Добавить "Софт"
            </button>
            {{------------------------------------------------------------------------------------}}
            <ul class="group-block group_container" data-block="catalog_block" data-group="product"
                data-owner-id="{{$item_product->id_field}}">
                @foreach($item_product->product_related_group as $item_product_related )
                    @include('back.blocks.groupitems.catalog_block.product_related')
                @endforeach
            </ul>
            <button class="any_create" data-block="catalog_block" data-group="product_related"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_product->id_field}}"> Добавить "Сопуствующий товар"
            </button>
            {{------------------------------------------------------------------------------------}}

            <ul class="group-block group_container" data-block="catalog_block" data-group="product"
                data-owner-id="{{$item_product->id_field}}">
                @foreach($item_product->product_features_group as $item_product_features )
                    @include('back.blocks.groupitems.catalog_block.product_features')
                @endforeach
            </ul>
            <button class="any_create" data-block="catalog_block" data-group="product_features"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_product->id_field}}"> Добавить Характеристику
            </button>
            {{------------------------------------------------------------------------------------}}

            <div class="field-wrap buttons">
                <button type="button" class="any_save" data-block="catalog_block" data-group="product"
                        data-entity="groupitem" data-item-id="{{$item_product->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </li>@endsection








