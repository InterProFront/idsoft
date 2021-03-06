<li class="group" data-group-id="{{$item_employs->id_field}}">
    <div class="title-block">
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="field-title"> Фотография </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="photo" data-group="employs"
                               data-field-type="image"
                               data-item-id="{{$item_employs->id_field}}" data-block="accounting_block"
                               value="{{$item_employs->photo_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="photo" data-group="employs"
                               data-field-type="image" data-item-id="{{$item_employs->id_field}}"
                               data-block="accounting_block"
                               value="{{$item_employs->photo_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="photo" data-group="employs"
                               data-field-type="image" data-item-id="{{$item_employs->id_field}}"
                               data-block="accounting_block"
                               value="{{$item_employs->photo_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="photo" data-group="employs"
                               data-field-type="image" data-item-id="{{$item_employs->id_field}}"
                               data-block="accounting_block"
                               value="{{$item_employs->photo_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="photo" data-group="employs"
                               data-field-type="image" data-item-id="{{$item_employs->id_field}}"
                               data-block="accounting_block"
                               value="{{$item_employs->photo_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="photo" data-group="employs"
                               data-field-type="image"
                               data-item-id="{{$item_employs->id_field}}" data-block="accounting_block"
                               value="{{$item_employs->photo_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <label class="file-input">
                            <img src="/images/{{$item_employs->photo_image->preview_link}}" class="preview"
                                 data-field-name="photo"
                                 data-block="accounting_block" data-group="employs"
                                 data-item-id="{{$item_employs->id_field}}">
                            <input type="file" accept="image/*" class="input_file group_field" data-field-name="photo"
                                   data-field-type="image" data-block="accounting_block" data-group="employs"
                                   data-item-id="{{$item_employs->id_field}}" data-entity="groupitem"> </label>
                    </div>
                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_employs->photo_image->alt}}"
                               data-item-id="{{$item_employs->id_field}}" data-field-name="photo"
                               data-block="accounting_block">
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Имя </label>
            <input type="text" data-field-type="string" data-field-name="emp_name" data-block="accounting_block"
                   data-group="employs" class="input-field group_field" value="{{$item_employs->emp_name_field}}"
                   data-item-id="{{$item_employs->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Должность </label>
            <input type="text" data-field-type="string" data-field-name="emp_prof" data-block="accounting_block"
                   data-group="employs" class="input-field group_field" value="{{$item_employs->emp_prof_field}}"
                   data-item-id="{{$item_employs->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> О Сотруднике </label>
            <textarea data-field-type="text" data-field-name="emp_about" data-block="accounting_block"
                      data-group="employs" class="input group_field" data-item-id="{{$item_employs->id_field}}"
                      placeholder="Текст">{{$item_employs->emp_about_field}}</textarea>
        </div>
        <div class="field-wrap buttons_block">
            <div class="col-1-2">
                <button type="button" class="any_delete button dark disabled" data-block="accounting_block" data-group="employs"
                        data-entity="groupitem" data-item-id="{{$item_employs->id_field}}"
                        data-descr="Эл. первой группы">Удалить
                </button>
            </div>
            <div class="col-1-2 disabled">
                <button type="button" class="any_save" data-block="accounting_block" data-group="employs"
                        data-entity="groupitem" data-item-id="{{$item_employs->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </div>
</li>