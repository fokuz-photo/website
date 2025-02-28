<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/prod/public_html/app/themes/g5_helium/blueprints/content/blog/meta-comments.yaml',
    'modified' => 1733829681,
    'data' => [
        'name' => 'Comments Meta',
        'description' => 'Options for displaying comments meta',
        'type' => 'blog',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Display Comments',
                    'description' => 'Display number of comments.',
                    'default' => 1
                ],
                'link' => [
                    'type' => 'input.checkbox',
                    'label' => 'Link Comments',
                    'description' => 'Link comment meta to the comments list.',
                    'default' => 0
                ],
                'prefix' => [
                    'type' => 'input.text',
                    'label' => 'Comments Prefix',
                    'description' => 'Display text directly before the comments count.'
                ]
            ]
        ]
    ]
];
