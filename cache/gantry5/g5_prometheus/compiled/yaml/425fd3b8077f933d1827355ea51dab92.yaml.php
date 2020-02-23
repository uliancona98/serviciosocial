<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/Libros3/templates/g5_prometheus/blueprints/styles/navigation.yaml',
    'modified' => 1581988047,
    'data' => [
        'name' => 'Navigation Styles',
        'description' => 'Navigation section styles for the Prometheus theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ],
                'link-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Link',
                    'default' => '#ffffff'
                ],
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Custom Background',
                    'description' => 'Choose a custom background color',
                    'default' => '#0071bc'
                ]
            ]
        ]
    ]
];
