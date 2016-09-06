<li class="group" data-group-id="{{$item_product_image->id_field}}">
    <div class="title-block">
        <label class="group-title">
        </label>
        <button type="button" class="any_delete" data-block="catalog_block" data-group="product_image"
                data-entity="groupitem" data-item-id="{{$item_product_image->id_field}}" data-descr="Эл. первой группы">
            Удалить
        </button>
    </div>
    <div class="block ">
        <div class="field-wrap ">
            <label class="input-file">
            </label>
            <div class="image-load">
                <div class="drag-n-drop">
                    <div class="drag"><input type="text" value="Отпустите клавишу мыши, чтобы загрузить файл"></div>
                    <div class="img-hide-block">
                        <input type="hidden" class="prefix" data-field-name="product" data-group="product_image"
                               data-field-type="image" data-item-id="{{$item_product_image->id_field}}"
                               data-block="catalog_block" value="{{$item_product_image->product_image->prefix}}">
                        <input type="hidden" class="original_link" data-field-name="product" data-group="product_image"
                               data-field-type="image" data-item-id="{{$item_product_image->id_field}}"
                               data-block="catalog_block" value="{{$item_product_image->product_image->original_link}}">
                        <input type="hidden" class="preview_link" data-field-name="product" data-group="product_image"
                               data-field-type="image" data-item-id="{{$item_product_image->id_field}}"
                               data-block="catalog_block" value="{{$item_product_image->product_image->preview_link}}">
                        <input type="hidden" class="primary_link" data-field-name="product" data-group="product_image"
                               data-field-type="image" data-item-id="{{$item_product_image->id_field}}"
                               data-block="catalog_block" value="{{$item_product_image->product_image->primary_link}}">
                        <input type="hidden" class="secondary_link" data-field-name="product" data-group="product_image"
                               data-field-type="image" data-item-id="{{$item_product_image->id_field}}"
                               data-block="catalog_block"
                               value="{{$item_product_image->product_image->secondary_link}}">
                        <input type="hidden" class="icon_link" data-field-name="product" data-group="product_image"
                               data-field-type="image" data-item-id="{{$item_product_image->id_field}}"
                               data-block="catalog_block" value="{{$item_product_image->product_image->icon_link}}">
                    </div>
                    <div class="preview-block">
                        <img src="/images/{{$item_product_image->product_image->preview_link}}" class="preview"
                             data-field-name="product" data-block="catalog_block" data-group="product_image"
                             data-item-id="{{$item_product_image->id_field}}">
                        <div class="buttons">
                            <span class="refresh"></span>
                            <span class="clear"></span>
                        </div>
                    </div>
                    <div class="action-block">
                        <input type="text" placeholder="alt текст" class="alt-text"
                               value="{{$item_product_image->product_image->alt}}"
                               data-item-id="{{$item_product_image->id_field}}" data-field-name="product"
                               data-block="catalog_block">
                        <label class="file-input">
                            Загрузить
                            <input type="file" accept="image/*" class="input_file group_field" data-field-name="product"
                                   data-field-type="image" data-block="catalog_block" data-group="product_image"
                                   data-item-id="{{$item_product_image->id_field}}" data-entity="groupitem">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="field-wrap buttons_block">
            <button type="button" class="any_save" data-block="catalog_block" data-group="product_image"
                    data-entity="groupitem" data-item-id="{{$item_product_image->id_field}}"
                    data-descr="Эл. первой группы"> Сохранить
            </button>
        </div>
    </div>
</li>