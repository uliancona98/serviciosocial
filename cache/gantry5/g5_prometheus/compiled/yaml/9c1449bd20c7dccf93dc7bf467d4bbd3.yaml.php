<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/serviciosocial/templates/g5_prometheus/particles/testimonialSZ.yaml',
    'modified' => 1583792621,
    'data' => [
        'name' => 'Testimonials',
        'description' => 'Displays testimonials',
        'type' => 'particle',
        'icon' => 'fa-user-circle-o',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
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
                'testimonials' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Testimonial Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.icon' => [
                            'type' => 'input.icon',
                            'label' => 'Quote Icon'
                        ],
                        '.quote' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Quote'
                        ],
                        '.author' => [
                            'type' => 'input.text',
                            'label' => 'Author'
                        ],
                        '.authorattribute' => [
                            'type' => 'input.text',
                            'label' => 'Person Attribute'
                        ],
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select the person\'s image.',
                            'placeholder' => 'Select an image'
                        ],
                        '.effect' => [
                            'type' => 'select.selectize',
                            'label' => 'Effect',
                            'description' => 'Select an effect for the Testimonial',
                            'placeholder' => 'Select...',
                            'default' => 'card',
                            'options' => [
                                'card' => 'Card',
                                'arrow' => 'Arrow'
                            ]
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
