<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'gantry-theme://config/9/page/head.yaml',
    'modified' => 1582491735,
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
                            'inline' => '.articulo_inicio{
  border: solid;
margin: 2px;
padding:2px;
color: black;
}
.articulo_inicio h3{
text-align: center;
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'articulos_inicio'
                        ]
                    ],
                    'javascript' => [
                        
                    ]
                ]
            ]
        ]
    ]
];
