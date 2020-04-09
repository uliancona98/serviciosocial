<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'gantry-theme://config/9/page/head.yaml',
    'modified' => 1586464626,
    'data' => [
        'atoms' => [
            0 => [
                'id' => 'fixed-header-7426',
                'type' => 'fixed-header',
                'title' => 'Fixed Header',
                'inherit' => [
                    'outline' => 'default',
                    'atom' => 'fixed-header-7426',
                    'include' => [
                        0 => 'attributes'
                    ]
                ]
            ],
            1 => [
                'type' => 'frameworks',
                'title' => 'JavaScript Frameworks',
                'id' => 'frameworks-7641',
                'inherit' => [
                    'outline' => 'default',
                    'atom' => 'frameworks-7641',
                    'include' => [
                        0 => 'attributes'
                    ]
                ]
            ],
            2 => [
                'id' => 'assets-7065',
                'type' => 'assets',
                'title' => 'Custom CSS / JS',
                'attributes' => [
                    'enabled' => '1',
                    'css' => [
                        0 => [
                            'location' => '',
                            'inline' => '.logo_imagen{
display: block;
 margin: auto;
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'logo_imagen'
                        ],
                        1 => [
                            'location' => '',
                            'inline' => '.segundo_titulo{
padding: 3px;
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'segundo_titulo'
                        ],
                        2 => [
                            'location' => '',
                            'inline' => '.fondo_blanco{
background-color: #ffffff;
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'fondo_blanco'
                        ],
                        3 => [
                            'location' => '',
                            'inline' => '.boton_link {
background-color: gray;
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'boton_link'
                        ]
                    ],
                    'javascript' => [
                        
                    ]
                ]
            ]
        ]
    ]
];
