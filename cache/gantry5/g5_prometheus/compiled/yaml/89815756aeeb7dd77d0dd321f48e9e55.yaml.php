<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\MAMP\\htdocs\\serviciosocial/templates/g5_prometheus/blueprints/styles/font.yaml',
    'modified' => 1581571416,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the Prometheus theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'family-default' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'Lato, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-title' => [
                    'type' => 'input.fonts',
                    'label' => 'Title Font',
                    'default' => 'Lato, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ],
                'family-quote' => [
                    'type' => 'input.fonts',
                    'label' => 'Quote Font',
                    'default' => 'Lato, Helvetica, Tahoma, Geneva, Arial, sans-serif'
                ]
            ]
        ]
    ]
];
