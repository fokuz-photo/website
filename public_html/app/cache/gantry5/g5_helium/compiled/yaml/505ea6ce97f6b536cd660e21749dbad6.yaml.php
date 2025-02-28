<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/plugins/gantry5/engines/nucleus/particles/position.yaml',
    'modified' => 1728158506,
    'data' => [
        'name' => 'Widget Block',
        'description' => 'Display a widget block.',
        'type' => 'position',
        'icon' => 'fa-object-group',
        'hidden' => false,
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable widget blocks.',
                    'default' => true
                ],
                'key' => [
                    'type' => 'input.text',
                    'label' => 'Block Key',
                    'description' => 'Widget key id.',
                    'pattern' => '[a-z0-9-]+',
                    'overridable' => false
                ],
                'chrome' => [
                    'type' => 'input.text',
                    'label' => 'Chrome',
                    'description' => 'Module chrome in this widget block.',
                    'placeholder' => 'gantry'
                ]
            ]
        ]
    ]
];
