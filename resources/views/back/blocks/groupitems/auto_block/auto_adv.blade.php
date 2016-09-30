<li class="group" data-group-id="{{$item_auto_adv->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="auto_block" data-group="auto_adv"
                data-entity="groupitem" data-item-id="{{$item_auto_adv->id_field}}"
                data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap">
            <label class="input-file">Описание</label>
            <textarea type="text" data-field-type="text" data-field-name="card_text" data-block="auto_block" data-group="auto_adv"
                   data-item-id="{{$item_auto_adv->id_field}}" class="input group_field">{{$item_auto_adv->card_text_field}}</textarea>
        </div>










        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="card"
                               data-group="auto_adv" data-field-type="image"
                               data-item-id="{{$item_auto_adv->id_field}}" data-block="auto_block"
                               value="{{$item_auto_adv->card_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="card"
                               data-group="auto_adv" data-field-type="image"
                               data-item-id="{{$item_auto_adv->id_field}}" data-block="auto_block"
                               value="{{$item_auto_adv->card_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="card"
                               data-group="auto_adv" data-field-type="image"
                               data-item-id="{{$item_auto_adv->id_field}}" data-block="auto_block"
                               value="{{$item_auto_adv->card_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="card"
                               data-group="auto_adv" data-field-type="image"
                               data-item-id="{{$item_auto_adv->id_field}}" data-block="auto_block"
                               value="{{$item_auto_adv->card_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="card"
                               data-group="auto_adv" data-field-type="image"
                               data-item-id="{{$item_auto_adv->id_field}}" data-block="auto_block"
                               value="{{$item_auto_adv->card_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="card"
                               data-group="auto_adv" data-field-type="image"
                               data-item-id="{{$item_auto_adv->id_field}}" data-block="auto_block"
                               value="{{$item_auto_adv->card_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$item_auto_adv->card_image->preview_link}}" class="preview"
                             data-field-name="card" data-block="auto_block" data-group="auto_adv"
                             data-item-id="{{$item_auto_adv->id_field}}">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_auto_adv->card_image->alt}}"
                               data-item-id="{{$item_auto_adv->id_field}}" data-field-name="card"
                               data-block="auto_block">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file group_field"
                                   data-field-name="card" data-field-type="image"
                                   data-block="auto_block" data-group="auto_adv"
                                   data-item-id="{{$item_auto_adv->id_field}}" data-entity="groupitem">
                        </label>
                    </div>
                </div>
            </div>
        </div>






















        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="auto_block" data-group="auto_adv"
                    data-entity="groupitem" data-item-id="{{$item_auto_adv->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>