<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/custom/particles/contenttabs.yaml',
    'modified' => 1733594369,
    'data' => [
        'name' => 'Content Tabs',
        'description' => 'Displays Content Tabs.',
        'type' => 'particle',
        'icon' => 'fa-table',
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
                    'description' => 'Globally enable Content Tabs particle.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the particle title text.',
                    'placeholder' => 'Enter title'
                ],
                'link' => [
                    'type' => 'input.text',
                    'label' => 'Link',
                    'description' => 'Specify the link address.',
                    'overridable' => false
                ],
                'desc' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Customize the description.',
                    'overridable' => false
                ],
                'thumbnail' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image thumbnail',
                    'description' => 'Select the thumbnail image.',
                    'overridable' => false
                ],
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image',
                    'description' => 'Select the main image.',
                    'overridable' => false
                ],
                'animation' => [
                    'type' => 'select.select',
                    'label' => 'Animation Type',
                    'description' => 'Set the animation type.',
                    'default' => 'slide',
                    'options' => [
                        'left' => 'Slide Left',
                        'right' => 'Slide Right',
                        'up' => 'Slide Up',
                        'down' => 'Slide Down',
                        'fade' => 'Fade',
                        'toggle' => 'Toggle'
                    ]
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Content Tabs Items',
                    'description' => 'Content Tabs item to display.',
                    'value' => 'title',
                    'ajax' => true,
                    'fields' => [
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'description' => 'Enter the title'
                        ],
                        '.content' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Tab Content',
                            'description' => 'Customize the tab content.',
                            'placeholder' => 'Enter your custom content here.'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
