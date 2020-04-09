<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'gantry-theme://config/11/page/head.yaml',
    'modified' => 1584084595,
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
                'id' => 'assets-8601',
                'type' => 'assets',
                'title' => 'Custom CSS / JS',
                'attributes' => [
                    'enabled' => '1',
                    'css' => [
                        0 => [
                            'location' => '',
                            'inline' => '.articulo_inicio{
margin: 2px;
padding:2px;
border-radius: 16px 16px 16px 16px;
-moz-border-radius: 16px 16px 16px 16px;
-webkit-border-radius: 16px 16px 16px 16px;
border: 2px solid #d3d4c9;
}
.articulo_inicio h3{
text-align: center;
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'articulos_inicio'
                        ],
                        1 => [
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
                        2 => [
                            'location' => '',
                            'inline' => '.segundo_titulo{
padding: 3px;
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'segundo_titulo'
                        ],
                        3 => [
                            'location' => '',
                            'inline' => '.imagen_centrada img{
display:block;
margin:auto;
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'imagen_centrada'
                        ]
                    ],
                    'javascript' => [
                        
                    ]
                ]
            ],
            2 => [
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
            ]
        ]
    ]
];
