<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/prod/public_html/app/themes/g5_helium/custom/particles/content_repeater.yaml',
    'modified' => 1733829679,
    'data' => [
        'name' => 'Content repeater',
        'description' => 'Displays image and text content',
        'type' => 'particle',
        'icon' => 'far fa-file',
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
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Link Text',
                    'description' => 'Customize the link text.',
                    'overridable' => false
                ],
                'link' => [
                    'type' => 'input.text',
                    'label' => 'Link',
                    'description' => 'Specify the link address.',
                    'overridable' => false
                ],
                'content' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Content Items',
                    'description' => 'Create each item to appear in the content row.',
                    'value' => 'title',
                    'ajax' => true,
                    'overridable' => false,
                    'fields' => [
                        '.class' => [
                            'type' => 'input.selectize',
                            'label' => 'CSS Classes',
                            'description' => 'CSS class names for the individual item.'
                        ],
                        '.name' => [
                            'type' => 'input.text'
                        ],
                        '.thumbnail' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image thumbnail',
                            'description' => 'Select the thumbnail.'
                        ],
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select desired image.'
                        ],
                        '.imagealt' => [
                            'type' => 'input.text',
                            'label' => 'Image alternative text',
                            'description' => 'Enter the alternative text.'
                        ],
                        '.date' => [
                            'type' => 'input.text',
                            'label' => 'Date',
                            'description' => 'Testimonial date'
                        ],
                        '.desc' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description',
                            'description' => 'Customize the description.',
                            'placeholder' => 'Enter short description'
                        ],
                        '.link' => [
                            'type' => 'input.text',
                            'label' => 'Link',
                            'description' => 'Input the item link.'
                        ],
                        '.linktext' => [
                            'type' => 'input.text',
                            'label' => 'Link Text',
                            'description' => 'Input the text for the item link.'
                        ],
                        '.disable' => [
                            'type' => 'input.checkbox',
                            'label' => 'Disable',
                            'description' => 'Disables the item on the front end.',
                            'default' => false
                        ]
                    ]
                ]
            ]
        ]
    ]
];
