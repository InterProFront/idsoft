<li class="group" data-group-id="{{$item_city->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="clients_filter" data-group="city" data-entity="groupitem"
                data-item-id="{{$item_city->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="city_name" data-block="clients_filter"
                   data-group="city" class="input group_field" value="{{$item_city->city_name_field}}"
                   data-item-id="{{$item_city->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="clients_filter" data-group="city" data-entity="groupitem"
                    data-item-id="{{$item_city->id_field}}" data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>