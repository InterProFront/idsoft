<tr data-sorter="{{$item_inf_page->sorter_field}}" data-id="{{$item_inf_page->id_field}}">
<td><a href="">{{$item_inf_page->page_name_field}}</a></td>
<td></td>
<td>
 <select class="publicated">
 @if( $item_inf_page->show_field)
    <option value="true" selected> Опубликовано</option>
    <option value="false">Не опубликовано</option>
 @else
    <option value="true" > Опубликовано</option>
    <option value="false" selected>Не опубликовано</option>
 @endif
 </select>
</td>
<td> <div class="sort_buttons"><div class="up-button"></div><div class="down-button"></div></div></td>
<td><a href="/adm/edit/informatic/{{$item_inf_page->id_field}}">Редактировать</a></td>
<td><button type="button" class="any_delete" data-block="information_page" data-group="inf_page" data-entity="groupitem" data-item-id="{{$item_inf_page->id_field}}" data-descr="Эл. первой группы"> Удалить</button>
</td>
</tr>
