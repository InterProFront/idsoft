<li class="group" data-group-id="{{$item_auto_related->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="auto_block" data-group="auto_related"
                data-entity="groupitem" data-item-id="{{$item_auto_related->id_field}}"
                data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">

        <div class="field-wrap ">
            <label class="input-file">
                Продукт
            </label>
            <select data-field-type="numb" data-field-name="product" data-block="auto_block"
                    data-group="auto_related" data-item-id="{{$item_auto_related->id_field}}"
                    class="input group_field">
                @foreach($related as $r_item)
                    @if($r_item->id_field != $item_auto_related->id_field)
                        @if($r_item->id_field == $item_auto_related->product_field)
                            <option selected value="{{$r_item->id_field}}">{{$r_item->product_name_field}} </option>
                        @else
                            <option value="{{$r_item->id_field}}">{{$r_item->product_name_field}} </option>
                        @endif
                    @endif
                @endforeach
            </select>
        </div>
        <div class="field-wrap">
            <label class="input-file">Описание</label>
            <input type="text" data-field-type="string" data-field-name="about_item" data-block="auto_block" data-group="auto_related"
            data-item-id="{{$item_auto_related->id_field}}" class="input group_field" value="{{$item_auto_related->about_item_field}}">
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="auto_block" data-group="auto_related"
                    data-entity="groupitem" data-item-id="{{$item_auto_related->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>