<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/custom/particles/1col_w_images.yaml',
    'modified' => 1728257055,
    'data' => [
        'name' => 'One col w/images',
        'description' => 'Displays text with three clickable images',
        'type' => 'particle',
        'icon' => 'far fa-images',
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
                'description' => [
                    'type' => 'textarea.textarea',
                    'label' => 'Description',
                    'description' => 'Customize the description.',
                    'placeholder' => 'Enter short description',
                    'overridable' => false
                ],
                'image1' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image 1',
                    'description' => 'Select the image.',
                    'overridable' => false
                ],
                'image2' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image 2',
                    'description' => 'Select the image.',
                    'overridable' => false
                ],
                'image3' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Image 3',
                    'description' => 'Select the image.',
                    'overridable' => false
                ]
            ]
        ]
    ]
];
