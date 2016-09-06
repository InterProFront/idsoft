@extends('back.layout')
@section('content')
    <div class="block ">
        <label class="input-file">
            Тенге за 1$
        </label>
        <input type="number" data-field-type="numb" data-field-name="course" data-block="clients_filter"
               class="input block_field" value="{{$clients_filter->course_field}}" placeholder="Строка">
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="clients_filter" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection