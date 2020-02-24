<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\MAMP\\htdocs\\serviciosocial/templates/g5_prometheus/particles/socialfloatingSZ.yaml',
    'modified' => 1581571417,
    'data' => [
        'name' => 'Social Floating',
        'description' => 'Display floating social buttons.',
        'type' => 'particle',
        'icon' => 'fa-share-alt',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable floating social particles.',
                    'default' => true
                ],
                'css.class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'target' => [
                    'type' => 'select.select',
                    'label' => 'Target',
                    'description' => 'Target browser window when item is clicked.',
                    'placeholder' => 'Select...',
                    'default' => '_blank',
                    'options' => [
                        '_parent' => 'Self',
                        '_blank' => 'New Window'
                    ]
                ],
                'display' => [
                    'type' => 'input.radios',
                    'label' => 'Display',
                    'description' => 'How to display the floating social Icons',
                    'default' => 'both',
                    'options' => [
                        'icons_only' => 'Icons Only',
                        'both' => 'Icons and Text'
                    ]
                ],
                'position' => [
                    'type' => 'input.radios',
                    'label' => 'Position',
                    'description' => 'How to position the floating social Icons',
                    'default' => 'left',
                    'options' => [
                        'left' => 'Left',
                        'right' => 'Right'
                    ]
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Social Items',
                    'description' => 'Create each floating social item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.name' => [
                            'type' => 'input.text',
                            'label' => 'Name',
                            'skip' => true
                        ],
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.text' => [
                            'type' => 'input.text',
                            'label' => 'Text'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
