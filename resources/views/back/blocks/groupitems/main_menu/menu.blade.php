<li class="group" data-group-id="{{$item_menu->id_field}}"><div class="title-block">
<label class="group-title">
</label>
<button type="button" class="any_delete" data-block="main_menu" data-group="menu" data-entity="groupitem" data-item-id="{{$item_menu->id_field}}" data-descr="Эл. первой группы"> Удалить</button>
</div>
<div class="block ">
<div class="field-wrap ">
<label class="input-file">
</label>
<input type="text" data-field-type="string" data-field-name="menu_text" data-block="main_menu" data-group="menu" class="input group_field" value="{{$item_menu->menu_text_field}}" data-item-id="{{$item_menu->id_field}}" placeholder="Строка">
</div>
<div class="field-wrap ">
<label class="input-file">
</label>
<input type="text" data-field-type="string" data-field-name="small_text" data-block="main_menu" data-group="menu" class="input group_field" value="{{$item_menu->small_text_field}}" data-item-id="{{$item_menu->id_field}}" placeholder="Строка">
</div>
<div class="field-wrap buttons_block">
<button type="button" class="any_save" data-block="main_menu" data-group="menu" data-entity="groupitem" data-item-id="{{$item_menu->id_field}}" data-descr="Эл. первой группы"> Сохранить</button>
</div>
</div>
</li>