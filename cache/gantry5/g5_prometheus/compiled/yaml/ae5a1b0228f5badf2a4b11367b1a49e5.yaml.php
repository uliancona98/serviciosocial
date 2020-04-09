<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'C:/MAMP/htdocs/serviciosocial/media/gantry5/engines/nucleus/admin/blueprints/layout/inheritance/atom.yaml',
    'modified' => 1583792619,
    'data' => [
        'name' => 'Inheritance',
        'description' => 'Atom inheritance tab',
        'type' => 'atom.inheritance',
        'form' => [
            'fields' => [
                'mode' => [
                    'type' => 'input.radios',
                    'label' => 'Mode',
                    'description' => 'Whether to clone or inherit the atom properties',
                    'default' => 'inherit',
                    'options' => [
                        'clone' => 'Clone',
                        'inherit' => 'Inherit'
                    ]
                ],
                'outline' => [
                    'type' => 'gantry.outlines',
                    'label' => 'Outline',
                    'description' => 'Outline to inherit from.',
                    'selectize' => [
                        'allowEmptyOption' => true
                    ],
                    'options' => [
                        '' => 'No Inheritance'
                    ]
                ],
                'atom' => [
                    'type' => 'gantry.atoms',
                    'id' => 'g-inherit-atom',
                    'outline_field' => 'outline',
                    'label' => 'Atom Instance',
                    'description' => 'Atom to inherit from'
                ],
                'include' => [
                    'type' => 'input.multicheckbox',
                    'label' => 'Replace',
                    'description' => 'Which parts of the Atom to inherit?',
                    'options' => [
                        'attributes' => 'Atom Attributes'
                    ]
                ]
            ]
        ]
    ]
];
