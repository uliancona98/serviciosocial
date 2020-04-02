<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\MAMP\\htdocs\\serviciosocial/templates/g5_prometheus/particles/imagegallerySZ.yaml',
    'modified' => 1583792621,
    'data' => [
        'name' => 'Image Gallery',
        'description' => 'Displays a group of images',
        'type' => 'particle',
        'icon' => 'fa-image',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                'galleryimages' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Image Gallery',
                    'description' => 'Create each image to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select the main image.'
                        ],
                        '.effect' => [
                            'type' => 'select.selectize',
                            'label' => 'Effect',
                            'description' => 'Select an effect for the image',
                            'placeholder' => 'Select...',
                            'default' => 'None',
                            'options' => [
                                'none' => 'None',
                                'above' => 'Above Image',
                                'slidein' => 'Slide all',
                                'card' => 'Card'
                            ]
                        ],
                        '.headline' => [
                            'type' => 'input.text',
                            'label' => 'Headline',
                            'description' => 'Customize the headline text.',
                            'placeholder' => 'Enter headline'
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description',
                            'description' => 'Customize the description.',
                            'placeholder' => 'Enter short description'
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
                        ]
                    ]
                ]
            ]
        ]
    ]
];
