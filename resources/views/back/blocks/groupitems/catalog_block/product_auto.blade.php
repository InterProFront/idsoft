<li class="group" data-group-id="{{$item_product_auto->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="catalog_block" data-group="product_auto"
                data-entity="groupitem" data-item-id="{{$item_product_auto->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <select type="number" data-field-type="numb" data-field-name="auto" data-block="catalog_block"
                    data-group="product_auto" data-item-id="{{$item_product_auto->id_field}}" class="input group_field">
                @foreach($auto as $a_item)
                    @if($a_item->id_field != $item_product->id_field)
                        @if($a_item->id_field == $item_product_auto->auto_field)
                            <option selected value="{{$a_item->id_field}}">{{$a_item->page_name_field}} </option>
                        @else
                            <option value="{{$a_item->id_field}}">{{$a_item->page_name_field}} </option>
                        @endif
                    @endif
                @endforeach
            </select>

        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="catalog_block" data-group="product_auto"
                    data-entity="groupitem" data-item-id="{{$item_product_auto->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>