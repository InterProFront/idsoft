@extends('back.layout')
@section('content')
    <div class="select-content">
        <ul class="list">
            <li class="item"><a href="#content" class="select-item active">Информация</a></li>
            <li class="item"><a href="#seo" class="select-item">Настройки SEO</a></li>
        </ul>
    </div>
    <div class="content-wrap">
        <div class="field-wrap ">
            <label class="field-title"> Заголовок </label>
            <input type="text" data-field-type="string" data-field-name="category_name"
                   data-block="catalog_block" data-group="category_2" class="input-field group_field"
                   value="{{$item_category_2->category_name_field}}"
                   data-item-id="{{$item_category_2->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Описание </label>
            <input type="text" data-field-type="string" data-field-name="category_description"
                   data-block="catalog_block" data-group="category_2" class="input-field group_field"
                   value="{{$item_category_2->category_description_field}}"
                   data-item-id="{{$item_category_2->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Изображение категории товаров </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text"
                                             value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="card_background"
                               data-group="category_2" data-field-type="image"
                               data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block"
                               value="{{$item_category_2->card_background_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="card_background"
                               data-group="category_2" data-field-type="image"
                               data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block"
                               value="{{$item_category_2->card_background_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="card_background"
                               data-group="category_2" data-field-type="image"
                               data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block"
                               value="{{$item_category_2->card_background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="card_background"
                               data-group="category_2" data-field-type="image"
                               data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block"
                               value="{{$item_category_2->card_background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="card_background"
                               data-group="category_2" data-field-type="image"
                               data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block"
                               value="{{$item_category_2->card_background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="card_background"
                               data-group="category_2" data-field-type="image"
                               data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block"
                               value="{{$item_category_2->card_background_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <label class="file-input">
                            <img src="/images/{{$item_category_2->card_background_image->preview_link}}"
                                 class="preview" data-field-name="card_background"
                                 data-block="catalog_block" data-group="category_2"
                                 data-item-id="{{$item_category_2->id_field}}">
                            <input type="file" accept="image/*" class="input_file group_field"
                                   data-field-name="card_background" data-field-type="image"
                                   data-block="catalog_block" data-group="category_2"
                                   data-item-id="{{$item_category_2->id_field}}"
                                   data-entity="groupitem"> </label>
                    </div>
                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось
                            загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_category_2->card_background_image->alt}}"
                               data-item-id="{{$item_category_2->id_field}}"
                               data-field-name="card_background" data-block="catalog_block">
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="field-title"> Изображение категории товаров при наведении курсора</label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text"
                                             value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="card_hover"
                               data-group="category_2" data-field-type="image"
                               data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block"
                               value="{{$item_category_2->card_hover_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="card_hover"
                               data-group="category_2" data-field-type="image"
                               data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block"
                               value="{{$item_category_2->card_hover_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="card_hover"
                               data-group="category_2" data-field-type="image"
                               data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block"
                               value="{{$item_category_2->card_hover_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="card_hover"
                               data-group="category_2" data-field-type="image"
                               data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block"
                               value="{{$item_category_2->card_hover_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="card_hover"
                               data-group="category_2" data-field-type="image"
                               data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block"
                               value="{{$item_category_2->card_hover_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="card_hover"
                               data-group="category_2" data-field-type="image"
                               data-item-id="{{$item_category_2->id_field}}" data-block="catalog_block"
                               value="{{$item_category_2->card_hover_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <label class="file-input">
                            <img src="/images/{{$item_category_2->card_hover_image->preview_link}}"
                                 class="preview" data-field-name="card_hover" data-block="catalog_block"
                                 data-group="category_2" data-item-id="{{$item_category_2->id_field}}">
                            <input type="file" accept="image/*" class="input_file group_field"
                                   data-field-name="card_hover" data-field-type="image"
                                   data-block="catalog_block" data-group="category_2"
                                   data-item-id="{{$item_category_2->id_field}}"
                                   data-entity="groupitem"> </label>
                    </div>
                    <div class="action-block">
                        <label class="alt-title">Альтернативный текст (если изображение не удалось
                            загрузить)</label>
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_category_2->card_hover_image->alt}}"
                               data-item-id="{{$item_category_2->id_field}}"
                               data-field-name="card_hover" data-block="catalog_block">
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap group-wrap page-group">
            <div class="row-title">
                <div class="col-1-5">Название</div>
                <div class="col-1-5">Дата изменения</div>
                <div class="col-1-5">Позиция</div>
                <div class="col-1-5"></div>
                <div class="col-1-5"></div>
            </div>
            <ul class="group-block group_container" data-block="catalog_block" data-group="category_2"
                data-owner-id="{{$item_category_2->id_field}}">
                @foreach($item_category_2->product_group as $item_product )
                    @include('back.blocks.groupitems.catalog_block.product')
                @endforeach
            </ul>
            <button class="any_create button blue" data-block="catalog_block" data-group="product"
                    data-descr="Эл. первой группы" data-owner-id="{{$item_category_2->id_field}}">Добавить
                элемент
            </button>
        </div>
    </div>
    <div class="seo-wrap">
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Тайтл страницы </label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="catalog_block"
                   data-group="category_2" class="input-field group_field"
                   value="{{$item_category_2->page_title_field}}" data-item-id="{{$item_category_2->id_field}}"
                   placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Ключевые слова </label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords"
                   data-block="catalog_block" data-group="category_2" class="input-field group_field"
                   value="{{$item_category_2->seo_keywords_field}}"
                   data-item-id="{{$item_category_2->id_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="field-title"> СЕО: Описание </label>
            <input type="text" data-field-type="string" data-field-name="seo_description"
                   data-block="catalog_block" data-group="category_2" class="input-field group_field"
                   value="{{$item_category_2->seo_description_field}}"
                   data-item-id="{{$item_category_2->id_field}}" placeholder="Строка">
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
                        <label class="show-it-label"><input type="checkbox" class="show-it-checkbox">Показать на
                            сайте</label>
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