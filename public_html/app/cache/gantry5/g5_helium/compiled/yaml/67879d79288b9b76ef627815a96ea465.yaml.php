<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/prod/public_html/app/plugins/gantry5/engines/nucleus/admin/blueprints/layout/inheritance/offcanvas.yaml',
    'modified' => 1733829650,
    'data' => [
        'name' => 'Inheritance',
        'description' => 'Offcanvas inheritance tab',
        'type' => 'offcanvas.inheritance',
        'form' => [
            'fields' => [
                'mode' => [
                    'type' => 'input.radios',
                    'label' => 'Mode',
                    'description' => 'Whether to clone or inherit the particle properties. <code>inherit</code> makes the Offcanvas identical to that of the inherited outline.',
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
                'include' => [
                    'type' => 'input.multicheckbox',
                    'label' => 'Replace',
                    'description' => 'Which parts of the Offcanvas to inherit?',
                    'options' => [
                        'attributes' => 'Offcanvas Attributes',
                        'block' => 'Block Attributes',
                        'children' => 'Particles within Offcanvas'
                    ]
                ]
            ]
        ]
    ]
];
