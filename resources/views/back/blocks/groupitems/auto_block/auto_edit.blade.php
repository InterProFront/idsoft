@extends('back.layout')
@section('content')
    <li class="group" data-group-id="{{$item_auto->id_field}}">
        <div class="block ">
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="page_name" data-block="auto_block"
                       data-group="auto" class="input group_field" value="{{$item_auto->page_name_field}}"
                       data-item-id="{{$item_auto->id_field}}" placeholder="Строка">
            </div>

            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="slug" data-block="auto_block"
                       data-group="auto" class="input group_pre_field" value="{{$item_auto->slug_field}}"
                       data-item-id="{{$item_auto->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="page_title" data-block="auto_block"
                       data-group="auto" class="input group_field" value="{{$item_auto->page_title_field}}"
                       data-item-id="{{$item_auto->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="seo_description" data-block="auto_block"
                       data-group="auto" class="input group_field" value="{{$item_auto->seo_description_field}}"
                       data-item-id="{{$item_auto->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="auto_block"
                       data-group="auto" class="input group_field" value="{{$item_auto->seo_keywords_field}}"
                       data-item-id="{{$item_auto->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <div class="image-load">
                    <div class="drag-n-drop">
                        <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                        <div class="img-hide-block">
                            <input type="hidden" class="prefix" data-field-name="background" data-group="auto"
                                   data-field-type="image" data-item-id="{{$item_auto->id_field}}"
                                   data-block="auto_block" value="{{$item_auto->background_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="background" data-group="auto"
                                   data-field-type="image" data-item-id="{{$item_auto->id_field}}"
                                   data-block="auto_block" value="{{$item_auto->background_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="background" data-group="auto"
                                   data-field-type="image" data-item-id="{{$item_auto->id_field}}"
                                   data-block="auto_block" value="{{$item_auto->background_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="background" data-group="auto"
                                   data-field-type="image" data-item-id="{{$item_auto->id_field}}"
                                   data-block="auto_block" value="{{$item_auto->background_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="background" data-group="auto"
                                   data-field-type="image" data-item-id="{{$item_auto->id_field}}"
                                   data-block="auto_block" value="{{$item_auto->background_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="background" data-group="auto"
                                   data-field-type="image" data-item-id="{{$item_auto->id_field}}"
                                   data-block="auto_block" value="{{$item_auto->background_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <img src="/images/{{$item_auto->background_image->preview_link}}" class="preview"
                                 data-field-name="background" data-block="auto_block" data-group="auto"
                                 data-item-id="{{$item_auto->id_field}}">
                            <div class="buttons">
                                <span class="refresh"></span>
                                <span class="clear"></span>
                            </div>
                        </div>
                        <div class="action-block">
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_auto->background_image->alt}}" data-item-id="{{$item_auto->id_field}}"
                                   data-field-name="background" data-block="auto_block">
                            <label class="file-input">
                                Загрузить
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="background" data-field-type="image" data-block="auto_block"
                                       data-group="auto" data-item-id="{{$item_auto->id_field}}"
                                       data-entity="groupitem">
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
                            <input type="hidden" class="prefix" data-field-name="card_background" data-group="auto"
                                   data-field-type="image" data-item-id="{{$item_auto->id_field}}"
                                   data-block="auto_block" value="{{$item_auto->card_background_image->prefix}}">
                            <input type="hidden" class="original_link" data-field-name="card_background"
                                   data-group="auto" data-field-type="image" data-item-id="{{$item_auto->id_field}}"
                                   data-block="auto_block" value="{{$item_auto->card_background_image->original_link}}">
                            <input type="hidden" class="preview_link" data-field-name="card_background"
                                   data-group="auto" data-field-type="image" data-item-id="{{$item_auto->id_field}}"
                                   data-block="auto_block" value="{{$item_auto->card_background_image->preview_link}}">
                            <input type="hidden" class="primary_link" data-field-name="card_background"
                                   data-group="auto" data-field-type="image" data-item-id="{{$item_auto->id_field}}"
                                   data-block="auto_block" value="{{$item_auto->card_background_image->primary_link}}">
                            <input type="hidden" class="secondary_link" data-field-name="card_background"
                                   data-group="auto" data-field-type="image" data-item-id="{{$item_auto->id_field}}"
                                   data-block="auto_block"
                                   value="{{$item_auto->card_background_image->secondary_link}}">
                            <input type="hidden" class="icon_link" data-field-name="card_background" data-group="auto"
                                   data-field-type="image" data-item-id="{{$item_auto->id_field}}"
                                   data-block="auto_block" value="{{$item_auto->card_background_image->icon_link}}">
                        </div>
                        <div class="preview-block">
                            <img src="/images/{{$item_auto->card_background_image->preview_link}}" class="preview"
                                 data-field-name="card_background" data-block="auto_block" data-group="auto"
                                 data-item-id="{{$item_auto->id_field}}">
                            <div class="buttons">
                                <span class="refresh"></span>
                                <span class="clear"></span>
                            </div>
                        </div>
                        <div class="action-block">
                            <input type="text" placeholder="alt текст" class="alt-text"
                                   value="{{$item_auto->card_background_image->alt}}"
                                   data-item-id="{{$item_auto->id_field}}" data-field-name="card_background"
                                   data-block="auto_block">
                            <label class="file-input">
                                Загрузить
                                <input type="file" accept="image/*" class="input_file group_field"
                                       data-field-name="card_background" data-field-type="image" data-block="auto_block"
                                       data-group="auto" data-item-id="{{$item_auto->id_field}}"
                                       data-entity="groupitem">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <textarea data-field-type="text" data-field-name="content" data-block="auto_block" data-group="auto"
                          class="input group_field" data-item-id="{{$item_auto->id_field}}"
                          placeholder="Текст">{{$item_auto->content_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <textarea data-field-type="text" data-field-name="pre_cost_text" data-block="auto_block"
                          data-group="auto" class="input group_field" data-item-id="{{$item_auto->id_field}}"
                          placeholder="Текст">{{$item_auto->pre_cost_text_field}}</textarea>
            </div>


            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <textarea data-field-type="text" data-field-name="warranty" data-block="auto_block"
                          data-group="auto" class="input group_field" data-item-id="{{$item_auto->id_field}}"
                          placeholder="Текст">{{$item_auto->warranty_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <textarea data-field-type="text" data-field-name="vozm" data-block="auto_block"
                          data-group="auto" class="input group_field" data-item-id="{{$item_auto->id_field}}"
                          placeholder="Текст">{{$item_auto->vozm_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <textarea data-field-type="text" data-field-name="rassr" data-block="auto_block"
                          data-group="auto" class="input group_field" data-item-id="{{$item_auto->id_field}}"
                          placeholder="Текст">{{$item_auto->rassr_field}}</textarea>
            </div>





            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <textarea data-field-type="text" data-field-name="system_features" data-block="auto_block"
                          data-group="auto" class="input group_field" data-item-id="{{$item_auto->id_field}}"
                          placeholder="Текст">{{$item_auto->system_features_field}}</textarea>
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Цена
                </label>
                <input type="number" data-field-type="numb" data-field-name="auto_cost" data-block="auto_block"
                       data-group="auto" data-item-id="{{$item_auto->id_field}}" class="input group_field"
                       value="{{$item_auto->auto_cost_field}}" placeholder="Целое число">
            </div>
            <div class="field-wrap ">
                <label class="input-file">
                    Скидка
                </label>
                <input type="number" data-field-type="numb" data-field-name="auto_sale" data-block="auto_block"
                       data-group="auto" data-item-id="{{$item_auto->id_field}}" class="input group_field"
                       value="{{$item_auto->auto_sale_field}}" placeholder="Целое число">
            </div>

            {{------------------------------------------------------------------------------------}}
            <ul class="group-block group_container" data-block="auto_block" data-group="auto"
                data-owner-id="{{$item_auto->id_field}}">
                @foreach($item_auto->auto_related_group as $item_auto_related)
                    @include('back.blocks.groupitems.auto_block.auto_related')
                @endforeach
            </ul>
            <button class="any_create" data-block="auto_block" data-group="auto_related"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_auto->id_field}}"> Добавить Продукт
            </button>
            {{------------------------------------------------------------------------------------}}
            <ul class="group-block group_container" data-block="auto_block" data-group="auto"
                data-owner-id="{{$item_auto->id_field}}">
                @foreach($item_auto->auto_adv_group as $item_auto_adv )
                    @include('back.blocks.groupitems.auto_block.auto_adv')
                @endforeach
            </ul>
            <button class="any_create" data-block="auto_block" data-group="auto_adv"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_auto->id_field}}"> Добавить Блок преимуществ
            </button>
            {{------------------------------------------------------------------------------------}}

            <div class="field-wrap ">
                @if($item_auto->is_iiko_field)
                    <label><input type="checkbox" data-field-type="bool" data-field-name="is_iiko" data-block="auto_block" data-group="auto" data-item-id="{{$item_auto->id_field}}" class="input group_field" value="{{$item_auto->is_iiko_field}}" checked>is_iiko</label>
                @else
                    <label><input type="checkbox" data-field-type="bool" data-field-name="is_iiko" data-block="auto_block" data-group="auto" data-item-id="{{$item_auto->id_field}}" class="input group_field" value="{{$item_auto->is_iiko_field}}">is_iiko</label>
                @endif
            </div>



            <div class="field-wrap buttons">
                <button type="button" class="any_save" data-block="auto_block" data-group="auto" data-entity="groupitem"
                        data-item-id="{{$item_auto->id_field}}" data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>


        </div>
    </li>@endsection