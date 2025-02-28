<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/prod/public_html/app/themes/g5_helium/blueprints/content/archive/meta-categories.yaml',
    'modified' => 1733829681,
    'data' => [
        'name' => 'Categories Meta',
        'description' => 'Options for displaying categories meta',
        'type' => 'archive',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Categories',
                    'description' => 'Display categories that the post has been assigned to.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Categories',
                    'description' => 'Link categories to their category page.',
                    'default' => 1
                ],
                'prefix' => [
                    'type' => 'input.text',
                    'label' => 'Categories Prefix',
                    'description' => 'Display text directly before the category name.',
                    'default' => 'Categories:'
                ]
            ]
        ]
    ]
];
