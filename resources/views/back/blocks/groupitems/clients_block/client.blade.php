<tr data-sorter="{{$item_client->sorter_field}}" data-id="{{$item_client->id_field}}">
    <td><a href="">{{$item_client->page_name_field}}</a></td>
    <td></td>
    <td>
        <select class="publicated">
            @if( $item_client->show_field)
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
    <td><a href="/adm/edit/client/{{$item_client->id_field}}">Редактировать</a></td>
    <td>
        <button type="button" class="any_delete" data-block="clients_block" data-group="client" data-entity="groupitem"
                data-item-id="{{$item_client->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </td>
</tr>
