@extends('back.layout')
@section('content')
    <li class="group" data-group-id="{{$item_tarif->id_field}}">
        <div class="block ">
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="page_name" data-block="accounting_block"
                       data-group="tarif" class="input group_field" value="{{$item_tarif->page_name_field}}"
                       data-item-id="{{$item_tarif->id_field}}" placeholder="Строка">
            </div>

            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="slug" data-block="accounting_block"
                       data-group="tarif" class="input group_pre_field" value="{{$item_tarif->slug_field}}"
                       data-item-id="{{$item_tarif->id_field}}" placeholder="Строка">
            </div>


            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="number" data-field-type="numb" data-field-name="tarif_cost" data-block="accounting_block"
                       data-group="tarif" class="input group_field" value="{{$item_tarif->tarif_cost_field}}"
                       data-item-id="{{$item_tarif->id_field}}" placeholder="Строка">
            </div>

            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="page_title" data-block="accounting_block"
                       data-group="tarif" class="input group_field" value="{{$item_tarif->page_title_field}}"
                       data-item-id="{{$item_tarif->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="accounting_block"
                       data-group="tarif" class="input group_field" value="{{$item_tarif->seo_keywords_field}}"
                       data-item-id="{{$item_tarif->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="seo_description"
                       data-block="accounting_block" data-group="tarif" class="input group_field"
                       value="{{$item_tarif->seo_description_field}}" data-item-id="{{$item_tarif->id_field}}"
                       placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <div class="image-load">
                    <div class="drag-n-drop">
                        <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                        <div class="img-hide-block">
                            <input type="hidden" class="prefix" data-field-name="background" data-group="tarif"
                                   data-field-type="image" data-item-id="{{$item_tarif->id_field}}"
                                   data-block="accounting_block" value="{{$item_tarif->background_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="background" data-group="tarif"
                                   data-field-type="image" data-item-id="{{$item_tarif->id_field}}"
                                   data-block="accounting_block"
                                   value="{{$item_tarif->background_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="background" data-group="tarif"
                                   data-field-type="image" data-item-id="{{$item_tarif->id_field}}"
                                   data-block="accounting_block"
                                   value="{{$item_tarif->background_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="background" data-group="tarif"
                                   data-field-type="image" data-item-id="{{$item_tarif->id_field}}"
                                   data-block="accounting_block"
                                   value="{{$item_tarif->background_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="background" data-group="tarif"
                                   data-field-type="image" data-item-id="{{$item_tarif->id_field}}"
                                   data-block="accounting_block"
                                   value="{{$item_tarif->background_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="background" data-group="tarif"
                                   data-field-type="image" data-item-id="{{$item_tarif->id_field}}"
                                   data-block="accounting_block" value="{{$item_tarif->background_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <img src="/images/{{$item_tarif->background_image->preview_link}}" class="preview"
                                 data-field-name="background" data-block="accounting_block" data-group="tarif"
                                 data-item-id="{{$item_tarif->id_field}}">
                            <div class="buttons">
                                <span class="refresh"></span>
                                <span class="clear"></span>
                            </div>
                        </div>
                        <div class="action-block">
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_tarif->background_image->alt}}"
                                   data-item-id="{{$item_tarif->id_field}}" data-field-name="background"
                                   data-block="accounting_block">
                            <label class="file-input">
                                Загрузить
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="background" data-field-type="image"
                                       data-block="accounting_block" data-group="tarif"
                                       data-item-id="{{$item_tarif->id_field}}" data-entity="groupitem">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <textarea data-field-type="text" data-field-name="content" data-block="accounting_block"
                          data-group="tarif" class="input group_field" data-item-id="{{$item_tarif->id_field}}"
                          placeholder="Текст">{{$item_tarif->content_field}}</textarea>
            </div>
            <div class="field-wrap buttons">
                <button type="button" class="any_save" data-block="accounting_block" data-group="tarif"
                        data-entity="groupitem" data-item-id="{{$item_tarif->id_field}}" data-descr="Эл. первой группы">
                    Сохранить
                </button>
            </div>
        </div>
    </li>@endsection