<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\MAMP\\htdocs\\Libros3/templates/g5_prometheus/blueprints/styles/intro.yaml',
    'modified' => 1581571416,
    'data' => [
        'name' => 'Intro Styles',
        'description' => 'Intro section styles for the Prometheus theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'section-preset' => [
                    'type' => 'select.select',
                    'label' => 'Section Preset Colors',
                    'description' => 'Choose a preset set of colors for the current block based on the accent colors',
                    'placeholder' => 'Select...',
                    'default' => 'base',
                    'options' => [
                        'base' => 'Base',
                        'primary' => 'Primary',
                        'accent1' => 'Contrast - Accent 1',
                        'accent2' => 'Light - Accent 2',
                        'accent3' => 'Dark - Accent 3',
                        'disabled' => 'Disabled - Use values below'
                    ]
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#212121'
                ],
                'link-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Link',
                    'default' => '#0071bc'
                ],
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Custom Background',
                    'description' => 'Choose a custom background color.',
                    'default' => '#ffffff'
                ]
            ]
        ]
    ]
];
