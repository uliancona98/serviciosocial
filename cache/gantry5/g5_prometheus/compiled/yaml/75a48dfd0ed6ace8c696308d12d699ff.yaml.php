<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/Libros3/templates/g5_prometheus/particles/customcontentSZ.yaml',
    'modified' => 1581571417,
    'data' => [
        'name' => 'Custom Content',
        'description' => 'Displays custom Content',
        'type' => 'particle',
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
                'height' => [
                    'type' => 'input.text',
                    'label' => 'Block height',
                    'description' => 'Specify the height of the block in rem, em or px units.',
                    'default' => '20rem',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|px|vh)'
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
                    'label' => 'Primary Link',
                    'description' => 'Specify the link address.'
                ],
                'linktext' => [
                    'type' => 'input.text',
                    'label' => 'Primary Link Text',
                    'description' => 'Customize the link text.'
                ],
                'link2' => [
                    'type' => 'input.text',
                    'label' => 'Secondary Link',
                    'description' => 'Specify the link address.'
                ],
                'linktext2' => [
                    'type' => 'input.text',
                    'label' => 'Secondary Link Text',
                    'description' => 'Customize the link text.'
                ],
                'subitems' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Child Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Icon'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.subtitle' => [
                            'type' => 'input.text',
                            'label' => 'Sub Title'
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description'
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
