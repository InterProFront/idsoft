<li class="group" data-group-id="{{$item_subscribe->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="fidback" data-group="subscribe" data-entity="groupitem"
                data-item-id="{{$item_subscribe->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="mail" data-block="fidback"
                   data-group="subscribe" class="input group_field" value="{{$item_subscribe->mail_field}}"
                   data-item-id="{{$item_subscribe->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <label><input type="checkbox" data-field-type="bool" data-field-name="mailed" data-block="fidback"
                          data-group="subscribe" data-item-id="{{$item_subscribe->id_field}}" class="input group_field"
                          value="{{$item_subscribe->mailed_field}}">mailed</label>
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="fidback" data-group="subscribe" data-entity="groupitem"
                    data-item-id="{{$item_subscribe->id_field}}" data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>