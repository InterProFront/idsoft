<li class="group" data-group-id="{{$item_question->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="fidback" data-group="question" data-entity="groupitem"
                data-item-id="{{$item_question->id_field}}" data-descr="Эл. первой группы"> Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="name" data-block="fidback"
                   data-group="question" class="input group_field" value="{{$item_question->name_field}}"
                   data-item-id="{{$item_question->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="mail" data-block="fidback"
                   data-group="question" class="input group_field" value="{{$item_question->mail_field}}"
                   data-item-id="{{$item_question->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <textarea data-field-type="text" data-field-name="question" data-block="fidback" data-group="question"
                      class="input group_field" data-item-id="{{$item_question->id_field}}"
                      placeholder="Текст">{{$item_question->question_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <label><input type="checkbox" data-field-type="bool" data-field-name="mailed" data-block="fidback"
                          data-group="question" data-item-id="{{$item_question->id_field}}" class="input group_field"
                          value="{{$item_question->mailed_field}}">mailed</label>
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="fidback" data-group="question" data-entity="groupitem"
                    data-item-id="{{$item_question->id_field}}" data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>