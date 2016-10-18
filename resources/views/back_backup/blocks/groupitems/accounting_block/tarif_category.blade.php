<li class="row-item" data-sorter="{{$item_tarif_category->sorter_field}}" data-id="{{$item_tarif_category->id_field}}">
    <div class="column-item"><a
                href="/adm/edit/accounting/{{$item_tarif_category->id_field}}">{{$item_tarif_category->tarif_name_field}}</a>
    </div>
    <div class="column-item"></div>
    <div class="column-item"><p>{{$item_tarif_category->sorter_field}}</p></div>
    <div class="column-item"></div>
    <div class="column-item">
        <button type="button" class="any_delete button dark" data-block="accounting_block" data-group="tarif_category"
                data-entity="groupitem" data-item-id="{{$item_tarif_category->id_field}}"
                data-descr="Эл. первой группы">Удалить
        </button>
    </div>
</li>
