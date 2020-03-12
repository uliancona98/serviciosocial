<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/serviciosocial/templates/g5_prometheus/blueprints/styles/base.yaml',
    'modified' => 1583792621,
    'data' => [
        'name' => 'Base Styles',
        'description' => 'Base settingssu for the Prometheus theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'dominant-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Dominant Color',
                    'description' => 'The dominant color of the site,used for links, menus, CTA, highlight backgrounds, titles and outlines .',
                    'default' => '#0071bc'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Text Color',
                    'default' => '#212121'
                ],
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Base Background Color',
                    'default' => '#ffffff'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image'
                ],
                'content-margin' => [
                    'type' => 'input.text',
                    'label' => 'Content Margin',
                    'description' => 'Specify the size of margin in rem, em or px units.',
                    'default' => '0.5rem',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|px)'
                ],
                'content-padding' => [
                    'type' => 'input.text',
                    'label' => 'Content Padding',
                    'description' => 'Specify the size of padding in rem, em or px units.',
                    'default' => '0.5rem',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|px)'
                ]
            ]
        ]
    ]
];
