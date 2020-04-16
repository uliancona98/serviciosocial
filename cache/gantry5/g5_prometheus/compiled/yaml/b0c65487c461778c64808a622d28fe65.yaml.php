<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:\\MAMP\\htdocs\\servicioSocial/media/gantry5/engines/nucleus/blueprints/page/fontawesome.yaml',
    'modified' => 1582763248,
    'data' => [
        'name' => 'Font Awesome Settings',
        'description' => 'Configuration for Font Awesome icon set and toolkit.',
        'type' => 'global',
        'form' => [
            'fields' => [
                'enable' => [
                    'type' => 'enable.enable',
                    'label' => 'Enable',
                    'description' => 'Enable or disable the loading of the Font Awesome icon library on the frontend. This is useful if you want to manually add a different version of the library (e.g. v5.x).',
                    'default' => 1
                ]
            ]
        ]
    ]
];
