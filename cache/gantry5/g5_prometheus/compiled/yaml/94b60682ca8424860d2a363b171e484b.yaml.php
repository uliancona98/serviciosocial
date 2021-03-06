<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\MAMP\\htdocs\\Libros3/templates/g5_prometheus/blueprints/styles/accent.yaml',
    'modified' => 1581571416,
    'data' => [
        'name' => 'Accent Colors',
        'description' => 'Accent colors for the Prometheus theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'color-1' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 1',
                    'description' => 'Used for contrast to the dominant color',
                    'default' => '#e31c3d'
                ],
                'color-2' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 2',
                    'description' => 'Used as light background',
                    'default' => '#9bdaf1'
                ],
                'color-3' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 3',
                    'description' => 'Used as dark background',
                    'default' => '#112e51'
                ]
            ]
        ]
    ]
];
