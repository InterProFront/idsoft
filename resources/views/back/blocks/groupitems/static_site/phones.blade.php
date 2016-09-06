<li class="group" data-group-id="{{$item_phones->id_field}}">
    <div class="title-block">
        <label class="group-title">
            Телефон
        </label>
        <button type="button" class="any_delete" data-block="static_site" data-group="phones" data-entity="groupitem"
                data-item-id="{{$item_phones->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="phone" data-block="static_site"
                   data-group="phones" class="input group_field" value="{{$item_phones->phone_field}}"
                   data-item-id="{{$item_phones->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="static_site" data-group="phones" data-entity="groupitem"
                    data-item-id="{{$item_phones->id_field}}" data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>