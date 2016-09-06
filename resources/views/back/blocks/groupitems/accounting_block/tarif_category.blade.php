<tr data-sorter="{{$item_tarif_category->sorter_field}}" data-id="{{$item_tarif_category->id_field}}">
    <td><a href="">{{$item_tarif_category->tarif_name_field}}</a></td>
    <td></td>
    <td>
        <select class="publicated">
            @if( $item_tarif_category->show_field)
                <option value="true" selected> Опубликовано</option>
                <option value="false">Не опубликовано</option>
            @else
                <option value="true"> Опубликовано</option>
                <option value="false" selected>Не опубликовано</option>
            @endif
        </select>
    </td>
    <td>
        <div class="sort_buttons">
            <div class="up-button"></div>
            <div class="down-button"></div>
        </div>
    </td>
    <td><a href="/adm/edit/accounting/{{$item_tarif_category->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="accounting_block" data-group="tarif_category"
                data-entity="groupitem" data-item-id="{{$item_tarif_category->id_field}}"
                data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>
