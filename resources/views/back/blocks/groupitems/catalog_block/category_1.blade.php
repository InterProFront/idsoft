<tr data-sorter="{{$item_category_1->sorter_field}}" data-id="{{$item_category_1->id_field}}">
    <td><a href="">{{$item_category_1->category_name_field}}</a></td>
    <td></td>
    <td>
        <select class="publicated">
            @if( $item_category_1->show_field)
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
    <td><a href="/adm/edit/category_1/{{$item_category_1->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="catalog_block" data-group="category_1"
                data-entity="groupitem" data-item-id="{{$item_category_1->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </td>
</tr>
