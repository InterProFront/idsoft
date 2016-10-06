@extends('back.layout')
@section('content')
<div class="block ">
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
<tbody class="group-block group_container" data-block="information_page" data-group="inf_page" data-owner-id="0">
@foreach($information_page->inf_page_group as $item_inf_page )
@include('back.blocks.groupitems.information_page.inf_page')
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
</td>
</tr>
</tfoot>
</table>
</div>
<div class="field-wrap buttons">
<button class="btn btn-primary pull-right any_save" data-block="information_page" data-entity="block" data-descr="">
    <span class="save_button">Сохранить</span>
</button>
</div>
</div>
@endsection