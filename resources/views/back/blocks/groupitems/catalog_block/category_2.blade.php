<li class="row-item" data-sorter="{{$item_category_2->sorter_field}}" data-id="{{$item_category_2->id_field}}">
    <div class="column-item"><a
                href="/adm/edit/catalog/{{$item_category_2->id_field}}">{{$item_category_2->category_name_field}}</a></div>
    <div class="column-item"></div>
    <div class="column-item"><p>{{$item_category_2->sorter_field}}</p></div>
    <div class="column-item"></div>
    <div class="column-item">
        <button type="button" class="any_delete button dark @if($item_category_1->id_field == 54) disabled @endif" data-block="catalog_block" data-group="category_2"
                data-entity="groupitem" data-item-id="{{$item_category_2->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
</li>
