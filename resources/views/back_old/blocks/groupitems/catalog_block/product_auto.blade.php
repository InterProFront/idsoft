<li class="group" data-group-id="{{$item_product_auto->id_field}}">
    <div class="title-block">
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="field-title"> Заголовок </label>
            <input type="number" data-field-type="numb" data-field-name="auto" data-block="catalog_block"
                   data-group="product_auto" data-item-id="{{$item_product_auto->id_field}}"
                   class="input-field group_field" value="{{$item_product_auto->auto_field}}" placeholder="Целое число">
        </div>
        <div class="field-wrap buttons_block">
            <div class="col-1-2">
                <button type="button" class="any_delete button dark" data-block="catalog_block"
                        data-group="product_auto" data-entity="groupitem"
                        data-item-id="{{$item_product_auto->id_field}}" data-descr="Эл. первой группы">Удалить
                </button>
            </div>
            <div class="col-1-2 disabled">
                <button type="button" class="any_save" data-block="catalog_block" data-group="product_auto"
                        data-entity="groupitem" data-item-id="{{$item_product_auto->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </div>
</li>