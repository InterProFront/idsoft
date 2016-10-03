@extends('back.layout')
@section('content')
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="page_name" data-block="accounting_block"
                   class="input block_field" value="{{$accounting_block->page_name_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="page_title" data-block="accounting_block"
                   class="input block_field" value="{{$accounting_block->page_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_keywords" data-block="accounting_block"
                   class="input block_field" value="{{$accounting_block->seo_keywords_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="seo_description" data-block="accounting_block"
                   class="input block_field" value="{{$accounting_block->seo_description_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="card_title" data-block="accounting_block"
                   class="input block_field" value="{{$accounting_block->card_title_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <input type="text" data-field-type="string" data-field-name="card_description" data-block="accounting_block"
                   class="input block_field" value="{{$accounting_block->card_description_field}}" placeholder="Строка">
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="background" data-field-type="image"
                               data-block="accounting_block" value="{{$accounting_block->background_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="background" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->background_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="background" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="background" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="background" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="background" data-field-type="image"
                               data-block="accounting_block" value="{{$accounting_block->background_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$accounting_block->background_image->preview_link}}" class="preview"
                             data-field-name="background" data-block="accounting_block">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$accounting_block->background_image->alt}}" data-field-name="background"
                               data-block="accounting_block">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="background" data-field-type="image" data-block="accounting_block">
                        </label>
                    </div>
                </div>
            </div>
        </div>


        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="card_background" data-field-type="image"
                               data-block="accounting_block" value="{{$accounting_block->card_background_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="card_background" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->card_background_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="card_background" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->card_background_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="card_background" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->card_background_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="card_background" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->card_background_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="card_background" data-field-type="image"
                               data-block="accounting_block" value="{{$accounting_block->card_background_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$accounting_block->card_background_image->preview_link}}" class="preview"
                             data-field-name="card_background" data-block="accounting_block">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$accounting_block->card_background_image->alt}}" data-field-name="card_background"
                               data-block="accounting_block">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="card_background" data-field-type="image" data-block="accounting_block">
                        </label>
                    </div>
                </div>
            </div>
        </div>


        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="work_process" data-field-type="image"
                               data-block="accounting_block" value="{{$accounting_block->work_process_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="work_process"
                               data-field-type="image" data-block="accounting_block"
                               value="{{$accounting_block->work_process_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="work_process" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->work_process_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="work_process" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->work_process_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="work_process"
                               data-field-type="image" data-block="accounting_block"
                               value="{{$accounting_block->work_process_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="work_process" data-field-type="image"
                               data-block="accounting_block"
                               value="{{$accounting_block->work_process_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$accounting_block->work_process_image->preview_link}}" class="preview"
                             data-field-name="work_process" data-block="accounting_block">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$accounting_block->work_process_image->alt}}" data-field-name="work_process"
                               data-block="accounting_block">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file block_field" data-entity="block"
                                   data-field-name="work_process" data-field-type="image" data-block="accounting_block">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <textarea data-field-type="text" data-field-name="content" data-block="accounting_block"
                      class="input block_field" placeholder="Текст">{{$accounting_block->content_field}}</textarea>
        </div>
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <textarea data-field-type="text" data-field-name="advantages" data-block="accounting_block"
                      class="input block_field" placeholder="Текст">{{$accounting_block->advantages_field}}</textarea>
        </div>
        {{------------------------------------------------------------------------------------}}
        <ul class="group-block group_container" data-block="accounting_block" data-group="employs"
            data-owner-id="0">
            @foreach($accounting_block->employs_group as $item_employs )
                @include('back.blocks.groupitems.accounting_block.employs')
            @endforeach
        </ul>
        <button class="any_create" data-block="accounting_block" data-group="employs"
                data-descr="Эл. первой группы" data-owner-id="0"> Добавить Сотрудника
        </button>
        {{------------------------------------------------------------------------------------}}
        <ul class="group-block group_container" data-block="accounting_block" data-group="acc_adv"
            data-owner-id="0">
            @foreach($accounting_block->acc_adv_group as $item_acc_adv )
                @include('back.blocks.groupitems.accounting_block.acc_adv')
            @endforeach
        </ul>
        <button class="any_create" data-block="accounting_block" data-group="acc_adv"
                data-descr="Эл. первой группы" data-owner-id="0"> Добавить Блок преимуществ
        </button>
        {{------------------------------------------------------------------------------------}}
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
                       data-owner-id="0">
                @foreach($accounting_block->tarif_category_group as $item_tarif_category )
                    @include('back.blocks.groupitems.accounting_block.tarif_category')
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
                        <button class="any_create" data-block="accounting_block" data-group="tarif_category"
                                data-descr="Эл. первой группы" data-owner-id="0"> Добавить
                        </button>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
        <div class="field-wrap buttons">
            <button class="btn btn-primary pull-right any_save" data-block="accounting_block" data-entity="block"
                    data-descr="">
                <span class="save_button">Сохранить</span>
            </button>
        </div>
    </div>
@endsection