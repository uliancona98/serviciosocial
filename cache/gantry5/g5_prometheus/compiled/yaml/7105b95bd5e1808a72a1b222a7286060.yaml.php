<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\MAMP\\htdocs\\serviciosocial/templates/g5_prometheus/particles/pricetableSZ.yaml',
    'modified' => 1583792621,
    'data' => [
        'name' => 'Price Table',
        'description' => 'Displays Price Table',
        'type' => 'particle',
        'icon' => 'fa-dollar',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image',
                    'description' => 'Select the main image.',
                    'placeholder' => 'Select an image'
                ],
                'mainicon' => [
                    'type' => 'input.icon',
                    'label' => 'Icon',
                    'description' => 'Select the main icon'
                ],
                'headline' => [
                    'type' => 'input.text',
                    'label' => 'Headline',
                    'description' => 'Customize the headline text.',
                    'placeholder' => 'Enter headline'
                ],
                'description' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description'
                ],
                'link' => [
                    'type' => 'input.text',
                    'label' => 'Link',
                    'description' => 'Specify the link address.'
                ],
                'linktext' => [
                    'type' => 'input.text',
                    'label' => 'Link Text',
                    'description' => 'Customize the link text.'
                ],
                'pricetables' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select the main image.',
                            'placeholder' => 'Select an image'
                        ],
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.price' => [
                            'type' => 'input.text',
                            'label' => 'Price'
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description'
                        ],
                        '.line1' => [
                            'type' => 'input.text',
                            'label' => 'Line 1'
                        ],
                        '.line2' => [
                            'type' => 'input.text',
                            'label' => 'Line 2'
                        ],
                        '.line3' => [
                            'type' => 'input.text',
                            'label' => 'Line 3'
                        ],
                        '.line4' => [
                            'type' => 'input.text',
                            'label' => 'Line 4'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link',
                            'description' => 'Specify the link address.'
                        ],
                        '.linktext' => [
                            'type' => 'input.text',
                            'label' => 'Link Text',
                            'description' => 'Customize the link text.'
                        ],
                        '.class' => [
                            'type' => 'input.block-variations',
                            'label' => 'Variations'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
