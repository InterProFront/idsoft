<li class="group" data-group-id="{{$item_adventages->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="static_site" data-group="adventages"
                data-entity="groupitem" data-item-id="{{$item_adventages->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="adv_title" data-block="static_site"
                   data-group="adventages" class="input group_field" value="{{$item_adventages->adv_title_field}}"
                   data-item-id="{{$item_adventages->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <textarea data-field-type="text" data-field-name="adv_text" data-block="static_site" data-group="adventages"
                      class="input group_field" data-item-id="{{$item_adventages->id_field}}"
                      placeholder="Текст">{{$item_adventages->adv_text_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="adv_img" data-group="adventages"
                               data-field-type="image" data-item-id="{{$item_adventages->id_field}}"
                               data-block="static_site" value="{{$item_adventages->adv_img_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="adv_img" data-group="adventages"
                               data-field-type="image" data-item-id="{{$item_adventages->id_field}}"
                               data-block="static_site" value="{{$item_adventages->adv_img_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="adv_img" data-group="adventages"
                               data-field-type="image" data-item-id="{{$item_adventages->id_field}}"
                               data-block="static_site" value="{{$item_adventages->adv_img_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="adv_img" data-group="adventages"
                               data-field-type="image" data-item-id="{{$item_adventages->id_field}}"
                               data-block="static_site" value="{{$item_adventages->adv_img_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="adv_img" data-group="adventages"
                               data-field-type="image" data-item-id="{{$item_adventages->id_field}}"
                               data-block="static_site" value="{{$item_adventages->adv_img_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="adv_img" data-group="adventages"
                               data-field-type="image" data-item-id="{{$item_adventages->id_field}}"
                               data-block="static_site" value="{{$item_adventages->adv_img_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$item_adventages->adv_img_image->preview_link}}" class="preview"
                             data-field-name="adv_img" data-block="static_site" data-group="adventages"
                             data-item-id="{{$item_adventages->id_field}}">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_adventages->adv_img_image->alt}}"
                               data-item-id="{{$item_adventages->id_field}}" data-field-name="adv_img"
                               data-block="static_site">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file group_field" data-field-name="adv_img"
                                   data-field-type="image" data-block="static_site" data-group="adventages"
                                   data-item-id="{{$item_adventages->id_field}}" data-entity="groupitem">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="static_site" data-group="adventages"
                    data-entity="groupitem" data-item-id="{{$item_adventages->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>