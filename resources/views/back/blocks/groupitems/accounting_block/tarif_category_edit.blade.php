@extends('back.layout')
@section('content')
    <li class="group" data-group-id="{{$item_tarif_category->id_field}}">
        <div class="block ">
            <div class="field-wrap ">
                <label class="input-file">
                </label>
                <input type="text" data-field-type="string" data-field-name="tarif_name" data-block="accounting_block"
                       data-group="tarif_category" class="input group_field"
                       value="{{$item_tarif_category->tarif_name_field}}"
                       data-item-id="{{$item_tarif_category->id_field}}" placeholder="Строка">
            </div>
            <div class="field-wrap ">
                <table>
                    <thead>
                    <tr>
                        <td>Название</td>
                        <td></td>
                        <td>Публикации</td>
                        <td>Сортировка</td>
                        <td>Редактировать</td>
                        <td>Удалить</td>
                    </tr>
                    </thead>
                    <tbody class="group-block group_container" data-block="accounting_block" data-group="tarif_category"
                           data-owner-id="{{$item_tarif_category->id_field}}">
                    @foreach($item_tarif_category->tarif_group as $item_tarif )
                        @include('back.blocks.groupitems.accounting_block.tarif')
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <button class="any_create" data-block="accounting_block" data-group="tarif" data-descr="Эл. первой группы"
                                    data-owner-id="{{$item_tarif_category->id_field}}"> Добавить
                            </button>
                        </td>
                    </tr>
                    </tfoot>
                </table>
            </div>





            <div class="field-wrap buttons">
                <button type="button" class="any_save" data-block="accounting_block" data-group="tarif_category"
                        data-entity="groupitem" data-item-id="{{$item_tarif_category->id_field}}"
                        data-descr="Эл. первой группы"> Сохранить
                </button>
            </div>
        </div>
    </li>@endsection