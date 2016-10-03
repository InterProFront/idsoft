@extends('back.layout')
@section('content')
    <li class="group" data-group-id="{{$item_client->id_field}}">
        <div class="block ">
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <div class="image-load">
                    <div class="drag-n-drop">
                        <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                        <div class="img-hide-block">
                            <input type="hidden" class="prefix" data-field-name="background" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->background_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="background" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->background_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="background" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->background_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="background" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->background_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="background" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block"
                                   value="{{$item_client->background_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="background" data-group="client"
                                   data-field-type="image" data-item-id="{{$item_client->id_field}}"
                                   data-block="clients_block" value="{{$item_client->background_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <img src="/images/{{$item_client->background_image->preview_link}}" class="preview"
                                 data-field-name="background" data-block="clients_block" data-group="client"
                                 data-item-id="{{$item_client->id_field}}">
                            <div class="buttons">
                                <span class="refresh"></span>
                                <span class="clear"></span>
                            </div>
                        </div>
                        <div class="action-block">
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_client->background_image->alt}}"
                                   data-item-id="{{$item_client->id_field}}" data-field-name="background"
                                   data-block="clients_block">
                            <label class="file-input">
                                Загрузить
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="background" data-field-type="image" data-block="clients_block"
                                       data-group="client" data-item-id="{{$item_client->id_field}}"
                                       data-entity="groupitem">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="page_name" data-block="clients_block"
                       data-group="client" class="input group_field" value="{{$item_client->page_name_field}}"
                       data-item-id="{{$item_client->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    slug
                </label>
                <input type="text" data-field-type="string" data-field-name="slug" data-block="clients_block"
                       data-group="client" class="input group_pre_field" value="{{$item_client->slug_field}}"
                       data-item-id="{{$item_client->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Краткое описание
                </label>
                <input type="text" data-field-type="string" data-field-name="small_descr" data-block="clients_block"
                       data-group="client" class="input group_field" value="{{$item_client->small_descr_field}}"
                       data-item-id="{{$item_client->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="page_title" data-block="clients_block"
                       data-group="client" class="input group_field" value="{{$item_client->page_title_field}}"
                       data-item-id="{{$item_client->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="clients_block"
                       data-group="client" class="input group_field" value="{{$item_client->seo_keywords_field}}"
                       data-item-id="{{$item_client->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="seo_description" data-block="clients_block"
                       data-group="client" class="input group_field" value="{{$item_client->seo_description_field}}"
                       data-item-id="{{$item_client->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="letter_link" data-block="clients_block"
                       data-group="client" class="input group_field" value="{{$item_client->letter_link_field}}"
                       data-item-id="{{$item_client->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <textarea data-field-type="text" data-field-name="content" data-block="clients_block"
                          data-group="client" class="input group_field" data-item-id="{{$item_client->id_field}}"
                          placeholder="Текст">{{$item_client->content_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <select data-field-type="numb" data-field-name="city_name" data-block="clients_block"
                        data-group="client" data-item-id="{{$item_client->id_field}}" class="input group_field">
                    @foreach($city_name as $item_city)
                        @if($item_client->city_name_field == $item_city->id_field)
                            <option selected value="{{$item_city->id_field}}">{{$item_city->city_name_field}}</option>
                        @else
                            <option value="{{$item_city->id_field}}">{{$item_city->city_name_field}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <select  type="number" data-field-type="numb" data-field-name="institution_type"
                         data-block="clients_block" data-group="client" data-item-id="{{$item_client->id_field}}"
                         class="input group_field">
                    @foreach($inst as $inst_item)
                        @if($item_client->institution_type_field == $inst_item->id_field)
                            <option selected value="{{$inst_item->id_field}}">{{$inst_item->page_name_field}}</option>
                        @else
                            <option value="{{$inst_item->id_field}}">{{$inst_item->page_name_field}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="field-wrap buttons">
                <button type="button" class="any_save" data-block="clients_block" data-group="client"
                        data-entity="groupitem" data-item-id="{{$item_client->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </li>@endsection