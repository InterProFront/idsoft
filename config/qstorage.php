<?php

return [

    'static_site' => [
        'textfields' => ['metrik'],
        'stringfields' => ['logo_text', 'copyright', 'page_title', 'seo_keywords', 'seo_description'],
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
    'main_menu' => [
        'groups' => [
            'menu' => [
                'stringfields' => ['menu_text','small_text']
            ]
        ]

    ],
    'catalog_block' => [
        'stringfields' => ['seo_keywords', 'seo_description'],
        'groups' => [
            'category_1' => [
                'stringfields' => ['seo_keywords', 'seo_description', 'page_title', 'category_name','category_description'],
                'images'       => ['card_background']
            ],
            'category_2' => [
                'owner' => 'category_1',
                'stringfields' => ['seo_keywords', 'seo_description', 'page_title', 'category_name','category_description'],
                'bool' => ['sale', 'new', 'individual'],
                'images'       => ['card_background']
            ],
            'product' => [
                'owner' => 'category_2',
                'stringfields' => [
                    'product_name',
                    'seo_keywords',
                    'seo_description',
                    'page_title'
                ],
                'numbs' => ['product_sale', 'product_cost'],
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
    'auto_block' => [
        'stringfields' =>['auto_title','auto_description','iiko_title','iiko_description'],
        'images' =>['auto_background','iiko_background'],
        'groups' => [
            'auto' => [
                'stringfields' => ['page_name', 'page_title', 'seo_description', 'seo_keywords'],
                'images' => ['background','card_background'],
                'textfields' => ['content', 'pre_cost_text', 'system_features'],
                'numbs' => ['auto_cost', 'auto_sale','iiko'],
                'bools' =>['is_iiko']
            ]
        ]
    ],
    'accounting_block' => [
        'stringfields' => ['page_name', 'page_title', 'seo_keywords', 'seo_description','card_title','card_description'],
        'images' => ['background', 'work_process','card_background'],
        'textfields' => ['content', 'advantages'],
        'groups' => [
            'tarif_category' => [
                'stringfields' => ['tarif_name']
            ],
            'tarif' => [
                'owner' => 'tarif_category',
                'stringfields' => ['page_name', 'page_title', 'seo_keywords', 'seo_description'],
                'images' => ['background'],
                'textfields' => ['content']
            ]
        ]
    ],
    'clients_block' => [
        'groups' => [
            'client' => [
                'images' => ['background'],
                'stringfields' => ['page_name', 'page_title', 'seo_keywords', 'seo_description', 'letter_link'],
                'textfields' => ['content'],
                'numbs' => ['city_name', 'institution_type']
            ]
        ]
    ],
    'clients_filter' => [
        'numbs' => ['course'],
        'groups' => [
            'institution' => [
                'stringfields' => ['page_name', 'page_title', 'seo_keywords', 'seo_description'],
            ],
            'city' => [
                'stringfields' => ['city_name']
            ],
        ]
    ],
    'dom_all_images' => [
        'groups' => [
            'images_set' => [
                'images' => ['text_pict']
            ]
        ]
    ],
//===============================================
    'fidback' => [
        'groups' => [
            'question' => [
                'stringfields' => ['name', 'mail'],
                'textfields' => ['question'],
                'bools' => ['mailed']
            ],
            'calculation' => [
                'stringfields' => ['phone'],
                'bools' => ['mailed'],
            ],
            'subscribe' => [
                'stringfields' => ['mail'],
                'bools' => ['mailed']
            ],
            'order' => [
                'stringfields' => ['name', 'phone', 'mail'],
                'bools' => ['mailed']
            ]
        ]
    ]
];
