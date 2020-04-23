<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'gantry-admin://blueprints/layout/section.yaml',
    'modified' => 1583792621,
    'data' => [
        'name' => 'Section',
        'description' => 'Layout section.',
        'type' => 'section',
        'form' => [
            'fields' => [
                'boxed' => [
                    'type' => 'select.selectize',
                    'label' => 'Layout',
                    'description' => 'Select the Layout container behavior. \'Inherit\' refers to Page Settings.',
                    'isset' => true,
                    'selectize' => [
                        'allowEmptyOption' => true
                    ],
                    'options' => [
                        '' => 'Inherit from Page Settings',
                        0 => 'Fullwidth (Boxed Content)',
                        2 => 'Fullwidth (Flushed Content)',
                        1 => 'Boxed',
                        3 => 'Remove Container'
                    ]
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'Enter CSS class names.',
                    'default' => NULL
                ],
                'extra' => [
                    'type' => 'collection.keyvalue',
                    'label' => 'Tag Attributes',
                    'description' => 'Extra Tag attributes.',
                    'key_placeholder' => 'Key (data-*, style, ...)',
                    'value_placeholder' => 'Value',
                    'exclude' => [
                        0 => 'id',
                        1 => 'class'
                    ]
                ],
                'background' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background',
                    'description' => 'Set the background image. If left empty, it will take the color from the Styles-tab related section.',
                    'default' => ''
                ],
                'backgroundOverlay' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background Overlay',
                    'description' => 'Set the color of the Background overlay in order to darken/lighten the image. Do not leave it empty. Use rgba(0, 0, 0, 0) to display the image unmodified.',
                    'default' => 'rgba(0, 0, 0, 0)'
                ],
                'backgroundAttachment' => [
                    'type' => 'select.selectize',
                    'label' => 'Background attachment',
                    'description' => 'Set whether a background image is fixed or scrolls with the rest of the page.',
                    'default' => '',
                    'options' => [
                        '' => 'Select a value',
                        'scroll' => 'Scroll',
                        'fixed' => 'Fixed',
                        'local' => 'Local',
                        'initial' => 'Initial',
                        'inherit' => 'Inherit'
                    ]
                ],
                'backgroundRepeat' => [
                    'type' => 'select.selectize',
                    'label' => 'Background repeat',
                    'description' => 'Set if/how a background image will be repeated. By default, a background-image is repeated both vertically and horizontally. If no background-position is specified, the image is always placed at the element\'s top left corner.',
                    'default' => '',
                    'options' => [
                        '' => 'Select a value',
                        'repeat' => 'repeat',
                        'repeat-x' => 'repeat-x',
                        'repeat-y' => 'repeat-y',
                        'no-repeat' => 'no-repeat',
                        'initial' => 'initial',
                        'inherit' => 'Inherit'
                    ]
                ],
                'backgroundPosition' => [
                    'type' => 'select.selectize',
                    'label' => 'Background position',
                    'description' => 'Set the starting position of a background image. By default, a background-image is placed at the top-left corner of an element.',
                    'default' => '',
                    'options' => [
                        '' => 'Select a value',
                        'left top' => 'left top',
                        'left center' => 'left center',
                        'left bottom' => 'left bottom',
                        'right top' => 'right top',
                        'right center' => 'right center',
                        'right bottom' => 'right bottom',
                        'center top' => 'center top',
                        'center center' => 'center center',
                        'center bottom' => 'center bottom',
                        'initial' => 'Initial',
                        'inherit' => 'Inherit'
                    ]
                ],
                'backgroundSize' => [
                    'type' => 'select.selectize',
                    'label' => 'Background size',
                    'description' => 'Specify the size of a background image.',
                    'default' => '',
                    'options' => [
                        '' => 'Select a value',
                        'auto' => 'auto',
                        'cover' => 'cover',
                        'contain' => 'contain',
                        'initial' => 'Initial',
                        'inherit' => 'Inherit'
                    ]
                ],
                '_inherit' => [
                    'type' => 'gantry.inherit'
                ]
            ]
        ]
    ]
];
