<li class="group" data-group-id="{{$item_employs->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="accounting_block" data-group="employs"
                data-entity="groupitem" data-item-id="{{$item_employs->id_field}}"
                data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">

        <div class="field-wrap">
            <label class="input-file">Имя</label>
            <input type="text" data-field-type="string" data-field-name="emp_name" data-block="accounting_block" data-group="employs"
                      data-item-id="{{$item_employs->id_field}}" class="input group_field" value="{{$item_employs->emp_name_field}}">
        </div>
        <div class="field-wrap">
            <label class="input-file">Должность</label>
            <input type="text" data-field-type="string" data-field-name="emp_prof" data-block="accounting_block" data-group="employs"
                   data-item-id="{{$item_employs->id_field}}" class="input group_field" value="{{$item_employs->emp_prof_field}}">
        </div>


        <div class="field-wrap">
            <label class="input-file">О сотруднике</label>
            <textarea type="text" data-field-type="text" data-field-name="emp_about" data-block="accounting_block" data-group="employs"
                      data-item-id="{{$item_employs->id_field}}" class="input group_field">{{$item_employs->emp_about_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="photo"
                               data-group="employs" data-field-type="image"
                               data-item-id="{{$item_employs->id_field}}" data-block="accounting_block"
                               value="{{$item_employs->photo_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="photo"
                               data-group="employs" data-field-type="image"
                               data-item-id="{{$item_employs->id_field}}" data-block="accounting_block"
                               value="{{$item_employs->photo_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="photo"
                               data-group="employs" data-field-type="image"
                               data-item-id="{{$item_employs->id_field}}" data-block="accounting_block"
                               value="{{$item_employs->photo_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="photo"
                               data-group="employs" data-field-type="image"
                               data-item-id="{{$item_employs->id_field}}" data-block="accounting_block"
                               value="{{$item_employs->photo_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="photo"
                               data-group="employs" data-field-type="image"
                               data-item-id="{{$item_employs->id_field}}" data-block="accounting_block"
                               value="{{$item_employs->photo_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="photo"
                               data-group="employs" data-field-type="image"
                               data-item-id="{{$item_employs->id_field}}" data-block="accounting_block"
                               value="{{$item_employs->photo_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$item_employs->photo_image->preview_link}}" class="preview"
                             data-field-name="photo" data-block="accounting_block" data-group="employs"
                             data-item-id="{{$item_employs->id_field}}">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_employs->photo_image->alt}}"
                               data-item-id="{{$item_employs->id_field}}" data-field-name="photo"
                               data-block="accounting_block">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file group_field"
                                   data-field-name="photo" data-field-type="image"
                                   data-block="accounting_block" data-group="employs"
                                   data-item-id="{{$item_employs->id_field}}" data-entity="groupitem">
                        </label>
                    </div>
                </div>
            </div>
        </div>






















        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="accounting_block" data-group="employs"
                    data-entity="groupitem" data-item-id="{{$item_employs->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>