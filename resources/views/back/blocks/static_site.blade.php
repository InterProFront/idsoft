@extends('back.layout')
@section('content')
    <div class="block ">

        <div class="field-wrap ">
            <label class="input-file">
                Тайтл страницы
            </label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="static_site"
                   class="input block_field" value="{{$static_site->page_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                SEO: keywords
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="static_site"
                   class="input block_field" value="{{$static_site->seo_keywords_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                SEO: description
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="static_site"
                   class="input block_field" value="{{$static_site->seo_description_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Логотип
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="logo" data-field-type="image"
                               data-block="static_site" value="{{$static_site->logo_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="logo" data-field-type="image"
                               data-block="static_site" value="{{$static_site->logo_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="logo" data-field-type="image"
                               data-block="static_site" value="{{$static_site->logo_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="logo" data-field-type="image"
                               data-block="static_site" value="{{$static_site->logo_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="logo" data-field-type="image"
                               data-block="static_site" value="{{$static_site->logo_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="logo" data-field-type="image"
                               data-block="static_site" value="{{$static_site->logo_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$static_site->logo_image->preview_link}}" class="preview"
                             data-field-name="logo" data-block="static_site">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$static_site->logo_image->alt}}" data-field-name="logo"
                               data-block="static_site">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="logo" data-field-type="image" data-block="static_site">
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <div class="field-wrap ">
            <label class="input-file">
                Title in top
            </label>
            <input type="text" data-field-type="string" data-field-name="logo_text" data-block="static_site"
                   class="input block_field" value="{{$static_site->logo_text_field}}" placeholder="Строка">
        </div>


        <div class="field-wrap ">
            <label class="input-file">
                Телефоны
            </label>
            <ul class="group-block group_container" data-block="static_site" data-group="phones" data-owner-id="0">
                @foreach($static_site->phones_group as $item_phones )
                    @include('back.blocks.groupitems.static_site.phones')
                @endforeach
            </ul>
            <button class="any_create" data-block="static_site" data-group="phones" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </div>


        <div class="field-wrap ">
            <label class="input-file">
                Копирайт
            </label>
            <input type="text" data-field-type="string" data-field-name="copyright" data-block="static_site"
                   class="input block_field" value="{{$static_site->copyright_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
                Преимущества (футер)
            </label>
            <ul class="group-block group_container" data-block="static_site" data-group="adventages" data-owner-id="0">
                @foreach($static_site->adventages_group as $item_adventages )
                    @include('back.blocks.groupitems.static_site.adventages')
                @endforeach
            </ul>
            <button class="any_create" data-block="static_site" data-group="adventages" data-descr="Эл. первой группы"
                    data-owner-id="0"> Добавить
            </button>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="static_site" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection