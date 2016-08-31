<?php

return [

    'static_site' => [
        'textfields' => ['metrik'],
        'stringfields' => ['logo_text', 'copyright', 'page_title', 'seo_keywords', 'seo_description', 'page_title'],
        'images' => ['logo'],
        'groups' => [
            'phones' => [
                'stringfields' => ['phone']
            ],
            'adventages' => [
                'stringfields' => ['adv_title'],
                'textfields' => ['adv_text'],
                'images' => ['adv_img']
            ]
        ]
    ],

    'catalog_block' => [
        'stringfields' => ['seo_keywords', 'seo_description'],
        'groups' => [
            'category' => [
                'stringfields' => ['seo_keywords', 'seo_description', 'page_title'],
                'bool' => ['sale', 'new', 'individual']
            ],
            'product' => [
                'owner' => 'category',
                'stringfields' => [
                    'product_name',
                    'product_cost',
                    'product_sale_cost',
                    'seo_keywords',
                    'seo_description',
                    'page_title'
                ],
                'textfields' => ['product_description'],
                'images' => ['product_base_photo']
            ],
            'product_image' => [
                'owner' => 'product',
                'images' => ['product']
            ],
            'product_auto' => [
                'owner' => 'product',
                'numbs' => ['auto']
            ],
            'product_related' => [
                'owner' => 'product',
                'numbs' => ['related']
            ],
            'product_features' => [
                'owner' => 'product',
                'stringfields' => ['feat_name', 'feat_value']
            ]
        ]
    ],

    'dom_all_images' => [
        'groups' => [
            'images_set' => [
                'images' => ['text_pict']
            ]
        ]
    ]

];
