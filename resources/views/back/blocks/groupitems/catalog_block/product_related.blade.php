<li class="group" data-group-id="{{$item_product_related->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="catalog_block" data-group="product_related"
                data-entity="groupitem" data-item-id="{{$item_product_related->id_field}}"
                data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <select data-field-type="numb" data-field-name="related" data-block="catalog_block"
                    data-group="product_related" data-item-id="{{$item_product_related->id_field}}"
                    class="input group_field">
                @foreach($related as $r_item)
                    @if($r_item->id_field != $item_product->id_field)
                        @if($r_item->id_field == $item_product_related->related_field)
                            <option selected value="{{$r_item->id_field}}">{{$r_item->product_name_field}} </option>
                        @else
                            <option value="{{$r_item->id_field}}">{{$r_item->product_name_field}} </option>
                        @endif
                    @endif
                @endforeach
            </select>


        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="catalog_block" data-group="product_related"
                    data-entity="groupitem" data-item-id="{{$item_product_related->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>