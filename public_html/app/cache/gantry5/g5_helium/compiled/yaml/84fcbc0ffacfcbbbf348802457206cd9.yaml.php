<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/prod/public_html/app/themes/g5_helium/blueprints/content/archive/heading.yaml',
    'modified' => 1733829681,
    'data' => [
        'name' => 'Page Heading',
        'description' => 'Options for displaying Heading',
        'type' => 'archive',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Display custom heading text at the top of the page.',
                    'default' => 1
                ],
                'text' => [
                    'type' => 'input.text',
                    'label' => 'Custom Heading',
                    'description' => 'Text to be used as a custom heading.'
                ]
            ]
        ]
    ]
];
