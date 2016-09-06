<li class="group" data-group-id="{{$item_product_features->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="catalog_block" data-group="product_features"
                data-entity="groupitem" data-item-id="{{$item_product_features->id_field}}"
                data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="feat_name" data-block="catalog_block"
                   data-group="product_features" class="input group_field"
                   value="{{$item_product_features->feat_name_field}}"
                   data-item-id="{{$item_product_features->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="feat_value" data-block="catalog_block"
                   data-group="product_features" class="input group_field"
                   value="{{$item_product_features->feat_value_field}}"
                   data-item-id="{{$item_product_features->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="catalog_block" data-group="product_features"
                    data-entity="groupitem" data-item-id="{{$item_product_features->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>