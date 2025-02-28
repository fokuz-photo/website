<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/prod/public_html/app/themes/g5_helium/custom/particles/posts.yaml',
    'modified' => 1733829679,
    'data' => [
        'name' => 'Posts',
        'description' => 'Displays Pricing cards',
        'type' => 'particle',
        'icon' => 'far fa-money',
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
                'prices' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Price Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'overridable' => false,
                    'fields' => [
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image'
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title'
                        ],
                        '.description' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description'
                        ],
                        '.amount' => [
                            'type' => 'input.number',
                            'label' => 'Price'
                        ],
                        '.id' => [
                            'type' => 'input.text',
                            'label' => 'CSS ID',
                            'description' => 'Enter the ID for the block without the hash (#) (ie. <code>your-id</code>. You can then reference the element via CSS as <code>#your-id</code>',
                            'default' => NULL
                        ],
                        '.class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Classes',
                            'description' => 'Enter CSS class names.',
                            'default' => NULL
                        ],
                        '.variations' => [
                            'type' => 'input.block-variations',
                            'label' => 'Variations'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
