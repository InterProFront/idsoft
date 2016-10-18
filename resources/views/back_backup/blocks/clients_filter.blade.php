@extends('back.layout')
@section('content')
    <div class="content-wrap">
        <div class="field-wrap ">
            <label class="field-title"> Курс тенге к доллару </label>
            <input type="text" data-field-type="string" data-field-name="course" data-block="clients_filter"
                   class="input-field block_field" value="{{$clients_filter->course_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap buttons disabled">
            <button class="btn btn-primary pull-right any_save" data-block="clients_filter" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
    <div class="save-panel">
        <div class="status-panel success">
            <p>Изменения сохранены</p>
        </div>
        <div class="tool-panel">
            <div class="column">
                <div class="show">
                    <div class="wrap-checkbox disabled">
                        <label class="show-it-label"><input type="checkbox"
                                                            class="show-it-checkbox ">Показать на сайте</label>
                    </div>
                </div>
                <button class="button dark show-it disabled">Посмотреть</button>
            </div>
            <div class="column">
                <div class="buttons-block">
                    <button class="button glass cancel disabled">Отменить изменения</button>
                    <button class="button blue save global-save">Сохранить</button>
                </div>
            </div>
        </div>
    </div>

@endsection