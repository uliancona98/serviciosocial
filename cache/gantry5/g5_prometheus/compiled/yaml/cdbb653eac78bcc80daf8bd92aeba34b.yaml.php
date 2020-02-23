<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/Libros3/templates/g5_prometheus/blueprints/styles/features.yaml',
    'modified' => 1581571416,
    'data' => [
        'name' => 'Features Styles',
        'description' => 'Features section styles for the Prometheus theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'section-preset' => [
                    'type' => 'select.select',
                    'label' => 'Section Preset Colors',
                    'description' => 'Choose a preset set of colors for the current block based on the accent colors',
                    'placeholder' => 'Select...',
                    'default' => 'accent3',
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
                    'default' => '#ffffff'
                ],
                'link-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Link',
                    'default' => '#e31c3d'
                ],
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Custom Background',
                    'description' => 'Choose a custom background color.',
                    'default' => '#112e51'
                ]
            ]
        ]
    ]
];
