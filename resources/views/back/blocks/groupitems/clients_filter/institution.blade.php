<li class="group" data-group-id="{{$item_institution->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="clients_filter" data-group="institution"
                data-entity="groupitem" data-item-id="{{$item_institution->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="page_name" data-block="clients_filter"
                   data-group="institution" class="input group_field" value="{{$item_institution->page_name_field}}"
                   data-item-id="{{$item_institution->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="clients_filter"
                   data-group="institution" class="input group_field" value="{{$item_institution->page_title_field}}"
                   data-item-id="{{$item_institution->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="clients_filter"
                   data-group="institution" class="input group_field" value="{{$item_institution->seo_keywords_field}}"
                   data-item-id="{{$item_institution->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="clients_filter"
                   data-group="institution" class="input group_field"
                   value="{{$item_institution->seo_description_field}}" data-item-id="{{$item_institution->id_field}}"
                   placeholder="Строка">
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="clients_filter" data-group="institution"
                    data-entity="groupitem" data-item-id="{{$item_institution->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>