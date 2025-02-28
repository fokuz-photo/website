<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/prod/public_html/app/themes/g5_helium/custom/particles/2cols_w_image.yaml',
    'modified' => 1733829679,
    'data' => [
        'name' => 'Two cols w/image',
        'description' => 'Displays image and text content',
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
                'image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image',
                    'description' => 'Select the main image.',
                    'overridable' => false
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
                'description' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description',
                    'overridable' => false
                ]
            ]
        ]
    ]
];
