<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/custom/particles/single_card.yaml',
    'modified' => 1728257056,
    'data' => [
        'name' => 'Single Card',
        'description' => 'Displays an image in a card, optionally with colored background and heading.',
        'type' => 'particle',
        'icon' => 'far fa-image',
        'configuration' => [
            'caching' => [
                'type' => 'static'
            ]
        ],
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable the particle.',
                    'default' => true
                ],
                'link' => [
                    'type' => 'input.text',
                    'label' => 'Link',
                    'description' => 'Specify the link address.',
                    'overridable' => false
                ],
                'linktext' => [
                    'type' => 'input.text',
                    'label' => 'Link Text',
                    'description' => 'Customize the link text.',
                    'overridable' => false
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Image heading',
                    'description' => 'Customize the image heading.',
                    'overridable' => false
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image',
                    'description' => 'Select the main image.',
                    'overridable' => false
                ]
            ]
        ]
    ]
];
