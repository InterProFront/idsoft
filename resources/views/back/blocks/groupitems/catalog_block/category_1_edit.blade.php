@extends('back.layout')
@section('content')
    <li class="group" data-group-id="{{$item_category_1->id_field}}">
        <div class="block ">
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="catalog_block"
                       data-group="category_1" class="input group_field"
                       value="{{$item_category_1->seo_keywords_field}}" data-item-id="{{$item_category_1->id_field}}"
                       placeholder="Строка">
            </div>
            <div class="field-wrap buttons">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="slug" data-block="catalog_block"
                       data-group="category_1" class="input group_pre_field"
                       value="{{$item_category_1->slug_field}}" data-item-id="{{$item_category_1->id_field}}"
                       placeholder="Строка">
            </div>





            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="seo_description" data-block="catalog_block"
                       data-group="category_1" class="input group_field"
                       value="{{$item_category_1->seo_description_field}}" data-item-id="{{$item_category_1->id_field}}"
                       placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="page_title" data-block="catalog_block"
                       data-group="category_1" class="input group_field" value="{{$item_category_1->page_title_field}}"
                       data-item-id="{{$item_category_1->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="category_name" data-block="catalog_block"
                       data-group="category_1" class="input group_field"
                       value="{{$item_category_1->category_name_field}}" data-item-id="{{$item_category_1->id_field}}"
                       placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="category_description" data-block="catalog_block"
                          data-group="category_description" class="input group_field" data-item-id="{{$item_category_1->id_field}}"
                          placeholder="Строка" value="{{$item_category_1->category_description_field}}">
            </div>









            <label class="input-file">
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="card_background"
                               data-group="category_1" data-field-type="image"
                               data-item-id="{{$item_category_1->id_field}}" data-block="catalog_block"
                               value="{{$item_category_1->card_background_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="card_background"
                               data-group="category_1" data-field-type="image"
                               data-item-id="{{$item_category_1->id_field}}" data-block="catalog_block"
                               value="{{$item_category_1->card_background_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="card_background"
                               data-group="category_1" data-field-type="image"
                               data-item-id="{{$item_category_1->id_field}}" data-block="catalog_block"
                               value="{{$item_category_1->card_background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="card_background"
                               data-group="category_1" data-field-type="image"
                               data-item-id="{{$item_category_1->id_field}}" data-block="catalog_block"
                               value="{{$item_category_1->card_background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="card_background"
                               data-group="category_1" data-field-type="image"
                               data-item-id="{{$item_category_1->id_field}}" data-block="catalog_block"
                               value="{{$item_category_1->card_background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="card_background"
                               data-group="category_1" data-field-type="image"
                               data-item-id="{{$item_category_1->id_field}}" data-block="catalog_block"
                               value="{{$item_category_1->card_background_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$item_category_1->card_background_image->preview_link}}" class="preview"
                             data-field-name="card_background" data-block="catalog_block" data-group="category_1"
                             data-item-id="{{$item_category_1->id_field}}">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_category_1->card_background_image->alt}}"
                               data-item-id="{{$item_category_1->id_field}}" data-field-name="card_background"
                               data-block="catalog_block">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file group_field"
                                   data-field-name="card_background" data-field-type="image"
                                   data-block="catalog_block" data-group="category_1"
                                   data-item-id="{{$item_category_1->id_field}}" data-entity="groupitem">
                        </label>
                    </div>
                </div>
            </div>
        </div>

















            <div class="field-wrap ">
                <table>
                    <thead>
                    <tr>
                        <td>Категория</td>
                        <td></td>
                        <td>Публикации</td>
                        <td>Сортировка</td>
                        <td>Редактировать</td>
                        <td>Удалить</td>
                    </tr>
                    </thead>
                    <tbody class="group-block group_container" data-block="catalog_block" data-group="category_1"
                           data-owner-id="{{$item_category_1->id_field}}">
                    @foreach($item_category_1->category_2_group as $item_category_2 )
                        @include('back.blocks.groupitems.catalog_block.category_2')
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
                            <button class="any_create" data-block="catalog_block" data-group="category_2" data-descr="Эл. первой группы"
                                    data-owner-id="{{$item_category_1->id_field}}"> Добавить
                            </button>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>




            <div class="field-wrap buttons">
                <button type="button" class="any_save" data-block="catalog_block" data-group="category_1"
                        data-entity="groupitem" data-item-id="{{$item_category_1->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </li>@endsection