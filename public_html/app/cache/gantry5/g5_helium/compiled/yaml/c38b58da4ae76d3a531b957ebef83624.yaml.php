<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/stage/public_html/app/themes/g5_helium/gantry/theme.yaml',
    'modified' => 1728159391,
    'data' => [
        'details' => [
            'name' => 'Helium',
            'version' => '5.5.19',
            'icon' => 'paper-plane',
            'date' => 'May 24, 2024',
            'author' => [
                'name' => 'RocketTheme, LLC',
                'email' => 'support@rockettheme.com',
                'link' => 'http://www.rockettheme.com'
            ],
            'documentation' => [
                'link' => 'http://docs.gantry.org/gantry5'
            ],
            'support' => [
                'link' => 'https://gitter.im/gantry/gantry5'
            ],
            'updates' => [
                'link' => 'http://updates.rockettheme.com/themes/helium.yaml'
            ],
            'copyright' => '(C) 2007 - 2022 RocketTheme, LLC. All rights reserved.',
            'license' => 'GPLv2',
            'description' => 'Helium Theme',
            'images' => [
                'thumbnail' => 'admin/images/preset1.png',
                'preview' => 'admin/images/preset1.png'
            ]
        ],
        'configuration' => [
            'gantry' => [
                'platform' => 'wordpress',
                'engine' => 'nucleus'
            ],
            'theme' => [
                'parent' => 'g5_helium',
                'base' => 'gantry-theme://common',
                'file' => 'gantry-theme://includes/theme.php',
                'class' => '\\Gantry\\Framework\\Theme',
                'textdomain' => 'g5_helium'
            ],
            'fonts' => [
                'Raleway' => [
                    '900italic' => 'gantry-theme://fonts/raleway/raleway-blackitalic/raleway-blackitalic-webfont',
                    900 => 'gantry-theme://fonts/raleway/raleway-black/raleway-black-webfont',
                    '700italic' => 'gantry-theme://fonts/raleway/raleway-bold/raleway-bolditalic-webfont',
                    700 => 'gantry-theme://fonts/raleway/raleway-bold/raleway-bold-webfont',
                    '600italic' => 'gantry-theme://fonts/raleway/raleway-semibolditalic/raleway-semibolditalic-webfont',
                    600 => 'gantry-theme://fonts/raleway/raleway-semibold/raleway-semibold-webfont',
                    '500italic' => 'gantry-theme://fonts/raleway/raleway-mediumitalic/raleway-mediumitalic-webfont',
                    500 => 'gantry-theme://fonts/raleway/raleway-medium/raleway-medium-webfont',
                    '400italic' => 'gantry-theme://fonts/raleway/raleway-italic/raleway-italic-webfont',
                    400 => 'gantry-theme://fonts/raleway/raleway-regular/raleway-regular-webfont',
                    '200italic' => 'gantry-theme://fonts/raleway/raleway-lightitalic/raleway-lightitalic-webfont',
                    200 => 'gantry-theme://fonts/raleway/raleway-light/raleway-light-webfont'
                ],
                'Lato' => [
                    '900italic' => 'gantry-theme://fonts/lato/lato-blackitalic/lato-blackitalic-webfont',
                    900 => 'gantry-theme://fonts/lato/lato-black/lato-black-webfont',
                    '700italic' => 'gantry-theme://fonts/lato/lato-bold/lato-bolditalic-webfont',
                    700 => 'gantry-theme://fonts/lato/lato-bold/lato-bold-webfont',
                    '400italic' => 'gantry-theme://fonts/lato/lato-italic/lato-italic-webfont',
                    400 => 'gantry-theme://fonts/lato/lato-regular/lato-regular-webfont',
                    '200italic' => 'gantry-theme://fonts/lato/lato-lightitalic/lato-lightitalic-webfont',
                    200 => 'gantry-theme://fonts/lato/lato-light/lato-light-webfont'
                ]
            ],
            'css' => [
                'compiler' => '\\Gantry\\Component\\Stylesheet\\ScssCompiler',
                'options' => [
                    'compatibility' => '5.5',
                    'deprecations' => true
                ],
                'target' => 'gantry-theme://css-compiled',
                'paths' => [
                    0 => 'gantry-theme://scss',
                    1 => 'gantry-engine://scss'
                ],
                'files' => [
                    0 => 'helium',
                    1 => 'helium-wordpress',
                    2 => 'custom'
                ],
                'persistent' => [
                    0 => 'helium'
                ],
                'overrides' => [
                    0 => 'helium-wordpress',
                    1 => 'custom'
                ]
            ],
            'dependencies' => [
                'gantry' => '5.5'
            ],
            'section-variations' => [
                'Padding Variations' => [
                    'section-vertical-paddings' => 'Section Vertical Paddings',
                    'section-horizontal-paddings' => 'Section Horizontal Paddings',
                    'section-vertical-paddings-large' => 'Large Vertical Paddings',
                    'section-horizontal-paddings-large' => 'Large Horizontal Paddings',
                    'section-vertical-paddings-small' => 'Small Vertical Paddings',
                    'section-horizontal-paddings-small' => 'Small Horizontal Paddings'
                ],
                'Utility' => [
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding'
                ]
            ],
            'block-variations' => [
                'Title Variations' => [
                    'title1' => 'Title 1',
                    'title2' => 'Title 2',
                    'title-gradient' => 'Title Gradient',
                    'title-outline' => 'Title Outline'
                ],
                'Box Variations' => [
                    'box1' => 'Box 1',
                    'box2' => 'Box 2',
                    'box-gradient' => 'Box Gradient',
                    'box-outline' => 'Box Outline'
                ],
                'Effects' => [
                    'spaced' => 'Spaced',
                    'shadow' => 'Shadow',
                    'rounded' => 'Rounded'
                ],
                'Utility' => [
                    'center' => 'Center',
                    'title-center' => 'Centered Title',
                    'equal-height' => 'Equal Height',
                    'disabled' => 'Disabled',
                    'align-right' => 'Align Right',
                    'align-left' => 'Align Left',
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding'
                ]
            ]
        ],
        'chrome' => [
            'gantry' => [
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget' => '</div>',
                'before_title' => '<h3 class="widgettitle g-title">',
                'after_title' => '</h3>'
            ]
        ],
        'admin' => [
            'styles' => [
                'core' => [
                    0 => 'base',
                    1 => 'accent',
                    2 => 'font'
                ],
                'section' => [
                    0 => 'navigation',
                    1 => 'header',
                    2 => 'intro',
                    3 => 'features',
                    4 => 'utility',
                    5 => 'above',
                    6 => 'testimonials',
                    7 => 'expanded',
                    8 => 'main',
                    9 => 'sidebar',
                    10 => 'footer',
                    11 => 'offcanvas'
                ],
                'configuration' => [
                    0 => 'breakpoints'
                ]
            ],
            'content' => [
                'general' => [
                    0 => 'wpautop'
                ],
                'blog' => [
                    0 => 'query',
                    1 => 'content',
                    2 => 'heading',
                    3 => 'featured-image',
                    4 => 'title',
                    5 => 'meta-date',
                    6 => 'meta-author',
                    7 => 'meta-comments',
                    8 => 'meta-categories',
                    9 => 'meta-tags',
                    10 => 'read-more'
                ],
                'single' => [
                    0 => 'featured-image',
                    1 => 'title',
                    2 => 'meta-date',
                    3 => 'meta-author',
                    4 => 'meta-comments',
                    5 => 'meta-categories',
                    6 => 'meta-tags'
                ],
                'page' => [
                    0 => 'featured-image',
                    1 => 'title',
                    2 => 'meta-date',
                    3 => 'meta-author'
                ],
                'archive' => [
                    0 => 'content',
                    1 => 'heading',
                    2 => 'featured-image',
                    3 => 'title',
                    4 => 'meta-date',
                    5 => 'meta-author',
                    6 => 'meta-comments',
                    7 => 'meta-categories',
                    8 => 'meta-tags',
                    9 => 'read-more'
                ]
            ]
        ]
    ]
];
