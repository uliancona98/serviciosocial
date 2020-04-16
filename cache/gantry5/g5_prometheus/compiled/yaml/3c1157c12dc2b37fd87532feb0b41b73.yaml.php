<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/servicioSocial/templates/g5_prometheus/blueprints/styles/expanded.yaml',
    'modified' => 1582763250,
    'data' => [
        'name' => 'Expanded Styles',
        'description' => 'Expanded section content styles for the Prometheus theme',
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
