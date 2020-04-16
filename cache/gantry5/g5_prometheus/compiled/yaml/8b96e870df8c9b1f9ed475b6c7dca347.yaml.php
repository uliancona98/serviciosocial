<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/servicioSocial/templates/g5_prometheus/gantry/theme.yaml',
    'modified' => 1582763252,
    'data' => [
        'details' => [
            'name' => 'Prometheus',
            'version' => '5.4.1203',
            'icon' => 'linux',
            'date' => 'May 17, 2017',
            'author' => [
                'name' => 'szoupi',
                'email' => 'szoupi@gmail.com',
                'link' => 'http://szoupi.com'
            ],
            'documentation' => [
                'link' => 'http://docs.gantry.org/gantry5'
            ],
            'support' => [
                'link' => 'https://gitter.im/gantry/gantry5'
            ],
            'copyright' => '(C) 2017 szoupi. All rights reserved.',
            'license' => 'GPLv2',
            'description' => 'Prometheus Theme',
            'images' => [
                'thumbnail' => 'admin/images/preset1.png',
                'preview' => 'admin/images/preset1.png'
            ]
        ],
        'configuration' => [
            'gantry' => [
                'platform' => 'joomla',
                'engine' => 'nucleus'
            ],
            'theme' => [
                'parent' => 'g5_prometheus',
                'base' => 'gantry-theme://common',
                'file' => 'gantry-theme://includes/theme.php',
                'class' => '\\Gantry\\Framework\\Theme'
            ],
            'fonts' => [
                'Raleway' => [
                    '900italic' => 'gantry-theme://fonts/raleway/raleway-blackitalic/raleway-blackitalic-webfont',
                    900 => 'gantry-theme://fonts/raleway/raleway-black/raleway-black-webfont',
                    '700italic' => 'gantry-theme://fonts/raleway/raleway-bold/raleway-bolditalic-webfont',
                    700 => 'gantry-theme://fonts/raleway/raleway-bold/raleway-bold-webfont',
                    '600italic' => 'gantry-theme://fonts/raleway/raleway-semibolditalic/raleway-semibolditalic-webfont',
                    600 => 'gantry-theme://fonts/raleway/raleway-semibold/raleway-semibold-webfont',
                    '500italic' => 'gantry-theme://fonts/raleway/raleway-mediumitalic/raleway-mediumitalic-webfont',
                    500 => 'gantry-theme://fonts/raleway/raleway-medium/raleway-medium-webfont',
                    '400italic' => 'gantry-theme://fonts/raleway/raleway-italic/raleway-italic-webfont',
                    400 => 'gantry-theme://fonts/raleway/raleway-regular/raleway-regular-webfont',
                    '200italic' => 'gantry-theme://fonts/raleway/raleway-lightitalic/raleway-lightitalic-webfont',
                    200 => 'gantry-theme://fonts/raleway/raleway-light/raleway-light-webfont'
                ],
                'Lato' => [
                    '900italic' => 'gantry-theme://fonts/lato/lato-blackitalic/lato-blackitalic-webfont',
                    900 => 'gantry-theme://fonts/lato/lato-black/lato-black-webfont',
                    '700italic' => 'gantry-theme://fonts/lato/lato-bold/lato-bolditalic-webfont',
                    700 => 'gantry-theme://fonts/lato/lato-bold/lato-bold-webfont',
                    '400italic' => 'gantry-theme://fonts/lato/lato-italic/lato-italic-webfont',
                    400 => 'gantry-theme://fonts/lato/lato-regular/lato-regular-webfont',
                    '200italic' => 'gantry-theme://fonts/lato/lato-lightitalic/lato-lightitalic-webfont',
                    200 => 'gantry-theme://fonts/lato/lato-light/lato-light-webfont'
                ]
            ],
            'css' => [
                'compiler' => '\\Gantry\\Component\\Stylesheet\\ScssCompiler',
                'target' => 'gantry-theme://css-compiled',
                'paths' => [
                    0 => 'gantry-theme://scss',
                    1 => 'gantry-engine://scss'
                ],
                'files' => [
                    0 => 'prometheus',
                    1 => 'prometheus-joomla',
                    2 => 'custom'
                ],
                'persistent' => [
                    0 => 'prometheus'
                ],
                'overrides' => [
                    0 => 'prometheus-joomla',
                    1 => 'custom'
                ]
            ],
            'dependencies' => [
                'gantry' => '5.4.0'
            ],
            'block-variations' => [
                'Title Variations' => [
                    'title1' => 'Title 1',
                    'title2' => 'Title 2',
                    'title-gradient' => 'Title Gradient',
                    'title-outline' => 'Title Outline'
                ],
                'Box Variations' => [
                    'box1' => 'Box 1',
                    'box2' => 'Box 2',
                    'box-gradient' => 'Box Gradient',
                    'box-outline' => 'Box Outline'
                ],
                'Effects' => [
                    'spaced' => 'Spaced',
                    'shadow' => 'Shadow',
                    'rounded' => 'Rounded'
                ],
                'Utility' => [
                    'center' => 'Center',
                    'title-center' => 'Centered Title',
                    'equal-height' => 'Equal Height',
                    'disabled' => 'Disabled',
                    'align-right' => 'Align Right',
                    'align-left' => 'Align Left',
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding',
                    'margin-left' => 'Margin Left',
                    'margin-right' => 'Margin Right',
                    'margin-top' => 'Margin Top',
                    'margin-bottom' => 'Margin Bottom'
                ]
            ]
        ],
        'admin' => [
            'styles' => [
                'core' => [
                    0 => 'base',
                    1 => 'accent',
                    2 => 'font'
                ],
                'section' => [
                    0 => 'zenith',
                    1 => 'navtop',
                    2 => 'navigation',
                    3 => 'header',
                    4 => 'intro',
                    5 => 'features',
                    6 => 'utility',
                    7 => 'above',
                    8 => 'testimonials',
                    9 => 'expanded',
                    10 => 'aside',
                    11 => 'main',
                    12 => 'sidebar',
                    13 => 'mainbottom',
                    14 => 'footertop',
                    15 => 'footer',
                    16 => 'footerbottom',
                    17 => 'nadir',
                    18 => 'offcanvas'
                ],
                'configuration' => [
                    0 => 'breakpoints'
                ]
            ]
        ]
    ]
];
