<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/custom/particles/2images_showcase.yaml',
    'modified' => 1728257056,
    'data' => [
        'name' => 'Two images showcase',
        'description' => 'Displays two clickable images',
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
                'ltr' => [
                    'type' => 'input.checkbox',
                    'label' => 'Images left-to-right',
                    'description' => 'Disposition of images',
                    'default' => true
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
                ]
            ]
        ]
    ]
];
