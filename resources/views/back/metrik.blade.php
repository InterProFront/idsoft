@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
                Метрика
            </label>
            <textarea data-field-type="text" data-field-name="metrik" data-block="static_site" class="input block_field"
                      placeholder="Текст">{{$static_site->metrik_field}}</textarea>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_site" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection