<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1728160912,
    'checksum' => '32aad43c7b25ad56558c702dfe2e0bc1',
    'files' => [
        'app/themes/g5_hydrogen/custom/config/home' => [
            'assignments' => [
                'file' => 'app/themes/g5_hydrogen/custom/config/home/assignments.yaml',
                'modified' => 1728159487
            ],
            'index' => [
                'file' => 'app/themes/g5_hydrogen/custom/config/home/index.yaml',
                'modified' => 1728160880
            ],
            'layout' => [
                'file' => 'app/themes/g5_hydrogen/custom/config/home/layout.yaml',
                'modified' => 1728159487
            ]
        ],
        'app/themes/g5_hydrogen/custom/config/default' => [
            'index' => [
                'file' => 'app/themes/g5_hydrogen/custom/config/default/index.yaml',
                'modified' => 1728160880
            ],
            'layout' => [
                'file' => 'app/themes/g5_hydrogen/custom/config/default/layout.yaml',
                'modified' => 1728159486
            ]
        ],
        'app/themes/g5_hydrogen/config/default' => [
            'particles/logo' => [
                'file' => 'app/themes/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1728159494
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'sample' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>',
                'css' => [
                    'class' => 'branding'
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ]
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => true,
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => true,
                'url' => '',
                'image' => 'gantry-assets://images/gantry5-logo.png',
                'text' => 'Gantry 5',
                'class' => 'gantry-logo'
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'social'
                ],
                'target' => '',
                'display' => 'both'
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => true,
                'css' => [
                    'class' => 'totop'
                ]
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => true
            ],
            'contentarray' => [
                'enabled' => true,
                'post' => [
                    'filter' => [
                        'sticky' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'show'
                        ],
                        'title' => [
                            'enabled' => 'show'
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show'
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'comments' => [
                            'enabled' => 'show'
                        ],
                        'text' => [
                            'type' => 'content',
                            'limit' => '',
                            'formatting' => 'text'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'date',
                        'ordering' => 'DESC'
                    ]
                ]
            ],
            'date' => [
                'enabled' => true,
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap2' => [
                    'enabled' => 0
                ],
                'bootstrap3' => [
                    'enabled' => 0
                ],
                'bootstrap4' => [
                    'enabled' => 0
                ],
                'bootstrap5' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'loginform' => [
                'enabled' => true,
                'title' => 'Login',
                'greeting' => 'Hi, %s'
            ],
            'menu' => [
                'enabled' => true,
                'menu' => '',
                'base' => '/',
                'startLevel' => 1,
                'maxLevels' => 0,
                'renderTitles' => 0,
                'hoverExpand' => 1,
                'mobileTarget' => 0,
                'forceTarget' => 0
            ],
            'messages' => [
                'enabled' => true
            ],
            'position' => [
                'enabled' => true
            ],
            'widget' => [
                'enabled' => true
            ]
        ],
        'content' => [
            'archive' => [
                'content' => [
                    'enabled' => 1,
                    'type' => 'content',
                    'gexcerpt-length' => 50,
                    'columns' => 'size-100'
                ],
                'featured-image' => [
                    'enabled' => 1,
                    'width' => 1200,
                    'height' => 350,
                    'position' => 'none'
                ],
                'heading' => [
                    'enabled' => 1
                ],
                'meta-author' => [
                    'enabled' => 1,
                    'link' => 1
                ],
                'meta-categories' => [
                    'enabled' => 1,
                    'link' => 1,
                    'prefix' => 'Categories:'
                ],
                'meta-comments' => [
                    'enabled' => 1,
                    'link' => 0
                ],
                'meta-date' => [
                    'enabled' => 1,
                    'link' => 1,
                    'format' => 'j F Y'
                ],
                'meta-tags' => [
                    'enabled' => 0,
                    'link' => 1,
                    'prefix' => 'Tags:'
                ],
                'read-more' => [
                    'label' => 'Read More',
                    'mode' => 'auto'
                ],
                'title' => [
                    'enabled' => 1,
                    'link' => 0
                ]
            ],
            'blog' => [
                'content' => [
                    'enabled' => 1,
                    'type' => 'content',
                    'gexcerpt-length' => 50,
                    'columns' => 'size-100'
                ],
                'featured-image' => [
                    'enabled' => 1,
                    'width' => 1200,
                    'height' => 350,
                    'position' => 'none'
                ],
                'heading' => [
                    'enabled' => 0
                ],
                'meta-author' => [
                    'enabled' => 1,
                    'link' => 1
                ],
                'meta-categories' => [
                    'enabled' => 1,
                    'link' => 1,
                    'prefix' => 'Categories:'
                ],
                'meta-comments' => [
                    'enabled' => 1,
                    'link' => 0
                ],
                'meta-date' => [
                    'enabled' => 1,
                    'link' => 1,
                    'format' => 'j F Y'
                ],
                'meta-tags' => [
                    'enabled' => 0,
                    'link' => 1,
                    'prefix' => 'Tags:'
                ],
                'read-more' => [
                    'label' => 'Read More',
                    'mode' => 'auto'
                ],
                'title' => [
                    'enabled' => 1,
                    'link' => 0
                ]
            ],
            'general' => [
                'wpautop' => [
                    'enabled' => 1
                ]
            ],
            'page' => [
                'featured-image' => [
                    'enabled' => 1,
                    'width' => 1200,
                    'height' => 350,
                    'position' => 'none'
                ],
                'meta-author' => [
                    'enabled' => 0,
                    'link' => 1
                ],
                'meta-date' => [
                    'enabled' => 0,
                    'link' => 1,
                    'format' => 'j F Y'
                ],
                'title' => [
                    'enabled' => 1,
                    'link' => 0
                ]
            ],
            'single' => [
                'featured-image' => [
                    'enabled' => 1,
                    'width' => 1200,
                    'height' => 350,
                    'position' => 'none'
                ],
                'meta-author' => [
                    'enabled' => 1,
                    'link' => 1
                ],
                'meta-categories' => [
                    'enabled' => 1,
                    'link' => 1,
                    'prefix' => 'Categories:'
                ],
                'meta-comments' => [
                    'enabled' => 1,
                    'link' => 0
                ],
                'meta-date' => [
                    'enabled' => 1,
                    'link' => 1,
                    'format' => 'j F Y'
                ],
                'meta-tags' => [
                    'enabled' => 0,
                    'link' => 1,
                    'prefix' => 'Tags:'
                ],
                'title' => [
                    'enabled' => 1,
                    'link' => 0
                ]
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry',
                'attribs' => [
                    'class' => 'gantry'
                ],
                'layout' => [
                    'sections' => 0
                ]
            ],
            'fontawesome' => [
                'enable' => 1,
                'version' => 'fa4',
                'fa4_compatibility' => 1,
                'content_compatibility' => 1
            ]
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#439a86',
                'color-2' => '#8f4dae'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#666666',
                'body-font' => 'roboto, sans-serif',
                'heading-font' => 'roboto, sans-serif'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'feature' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'footer' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'header' => [
                'background' => '#2a816d',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade',
                'hide-on-mobile' => 0
            ],
            'navigation' => [
                'background' => '#439a86',
                'text-color' => '#ffffff',
                'overlay' => 'rgba(0, 0, 0, 0.4)'
            ],
            'offcanvas' => [
                'background' => '#354d59',
                'text-color' => '#ffffff',
                'width' => '17rem',
                'toggle-color' => '#ffffff',
                'toggle-visibility' => 1
            ],
            'showcase' => [
                'background' => '#354d59',
                'image' => '',
                'text-color' => '#ffffff'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#666666'
            ]
        ],
        'index' => [
            'name' => 'home',
            'timestamp' => 1728159487,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1716537824
            ],
            'positions' => [
                'footer' => 'Footer'
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'showcase' => 'Showcase',
                'feature' => 'Feature',
                'subfeature' => 'Subfeature',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'logo' => [
                    'logo-1082' => 'Logo / Image'
                ],
                'menu' => [
                    'menu-4893' => 'Menu'
                ],
                'sample' => [
                    'sample-1' => 'Gantry 5',
                    'sample-2' => 'Getting Started',
                    'sample-3' => 'Key Features'
                ],
                'messages' => [
                    'system-messages-3480' => 'System Messages'
                ],
                'position' => [
                    'position-footer' => 'Footer'
                ],
                'copyright' => [
                    'copyright-7500' => 'Copyright'
                ],
                'social' => [
                    'social-2990' => 'Social'
                ],
                'branding' => [
                    'branding-3794' => 'Branding'
                ],
                'mobile-menu' => [
                    'mobile-menu-5819' => 'Mobile Menu'
                ]
            ],
            'inherit' => [
                
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1716537824
            ],
            'layout' => [
                '/header/' => [
                    
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'logo-1082 30',
                        1 => 'menu-4893 70'
                    ]
                ],
                '/showcase/' => [
                    0 => [
                        0 => 'sample-1'
                    ]
                ],
                '/feature/' => [
                    
                ],
                '/main/' => [
                    0 => [
                        0 => 'system-messages-3480'
                    ],
                    1 => [
                        0 => 'sample-2'
                    ]
                ],
                '/subfeature/' => [
                    0 => [
                        0 => 'sample-3'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'position-footer'
                    ],
                    1 => [
                        0 => 'copyright-7500 33.3',
                        1 => 'social-2990 33.3',
                        2 => 'branding-3794 33.3'
                    ]
                ],
                'offcanvas' => [
                    0 => [
                        0 => 'mobile-menu-5819'
                    ]
                ]
            ],
            'structure' => [
                'header' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'showcase' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'subfeature' => [
                    'type' => 'section',
                    'attributes' => [
                        'class' => 'flush',
                        'boxed' => ''
                    ]
                ],
                'footer' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ]
            ],
            'content' => [
                'logo-1082' => [
                    'title' => 'Logo / Image'
                ],
                'menu-4893' => [
                    'attributes' => [
                        'menu' => 'main-menu'
                    ]
                ],
                'sample-1' => [
                    'title' => 'Gantry 5',
                    'attributes' => [
                        'image' => 'gantry-assets://images/gantry5-logo.png',
                        'headline' => '',
                        'description' => '<p>Gantry 5 is the most customizable and powerful version of the framework yet. Packed full of features such as <a href="http://docs.gantry.org/gantry5/configure/layout-manager">drag-and-drop layout creation</a> and the powerful particle system, Gantry 5 has been designed from the ground up to be lightning fast and hassle free.</p>',
                        'link' => 'http://docs.gantry.org',
                        'linktext' => 'Read More'
                    ]
                ],
                'sample-2' => [
                    'title' => 'Getting Started',
                    'attributes' => [
                        'description' => '<h1 class="center">Getting Started</h1>
<div class="device-promo"><div class="macbook"><div class="macbook-color"></div></div><div class="ipad"><div class="ipad-color"></div></div><div class="iphone"><div class="iphone-color"></div></div></div><p>Welcome to Gantry 5 featuring <strong>Hydrogen</strong>, the first theme built on the Gantry 5 framework. If you want to get started, the best way is to navigate to the Gantry Administrator via your platform\'s Administration panel.</p>

<p>Once you are in the Gantry 5 Administrator, you will be able to edit virtually every aspect of your site from its <strong>Layout</strong> to its <strong>Style</strong>. You can even refine how the menus appear using Gantry 5’s new <strong>Menu Editor</strong>.</p>

<p>You can set different style preferences for different pages, and have them assigned accordingly using the <strong>Assignments</strong> administrative panel.</p>

<div class="info-box"><div class="fa fa-graduation-cap float-left"></div><p>Look for more information on Gantry 5 in our documentation, and stay tuned to the RocketTheme Blog for more information on new features and development updates as development continues.</p>

<p><a href="http://docs.gantry.org" class="button">Learn More</a></p></div>

<h1 class="center">How to Contribute</h1>

<div class="g-grid">
<div class="g-block size-37"><p>Thank you for using Gantry 5 and the Hydrogen theme. We welcome you to contribute to the project by submitting bug reports through <strong>GitHub</strong>, and/or submit your own code changes to the <strong>Gantry 5 project</strong> for consideration.</p>
<p><a href="https://github.com/gantry/gantry5" class="button">Gantry 5 on GitHub</a></p>
</div>
<div class="g-block size-26 middle"><div class="fa fa-github-square"></div></div>

<div class="g-block size-37"><p>If you would like to assist in creating documentation for Gantry 5, you can do so through the <strong>Gantry 5 Documentation</strong> project on <strong>GitHub</strong>.</p>
<p><a href="https://github.com/gantry/docs" class="button">Gantry Docs on GitHub</a></p>
</div>
</div>

<p>Once again, thank you for participating. We hope you enjoy testing Gantry 5 every bit as much as we have enjoyed creating it.</p>'
                    ]
                ],
                'sample-3' => [
                    'title' => 'Key Features',
                    'attributes' => [
                        'headline' => 'Key Features',
                        'description' => '<p>Gantry 5 is packed full of features created to empower the development of designs into fully functional layouts with the absolute minimum effort and fuss</p>',
                        'samples' => [
                            0 => [
                                'icon' => 'fa fa-code',
                                'subtitle' => '',
                                'description' => '<p>Gantry 5 leverages the power of <a href="https://twig.symfony.com/doc/1.x/">Twig</a> to make creating powerful, dynamic themes quick and easy.</p>',
                                'title' => 'Twig Templating'
                            ],
                            1 => [
                                'icon' => 'far fa-newspaper',
                                'subtitle' => '',
                                'description' => '<p>Drag-and-drop functionality gives you the power to place content blocks, resize them, and configure their unique settings in seconds.</p>',
                                'title' => 'Layout Manager'
                            ],
                            2 => [
                                'icon' => 'fa fa-cubes',
                                'subtitle' => '',
                                'description' => '<p>Create, configure, and manage content blocks as well as special features and functionality with the powerful particle system.</p>',
                                'title' => 'Particles System'
                            ]
                        ]
                    ]
                ],
                'position-footer' => [
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ],
                'social-2990' => [
                    'attributes' => [
                        'css' => [
                            'class' => 'social-items'
                        ],
                        'items' => [
                            0 => [
                                'icon' => 'fa fa-twitter',
                                'text' => 'Twitter',
                                'link' => 'http://twitter.com/rockettheme',
                                'name' => 'Twitter'
                            ],
                            1 => [
                                'icon' => 'fa fa-facebook',
                                'text' => 'Facebook',
                                'link' => 'http://facebook.com/rockettheme',
                                'name' => 'Facebook'
                            ],
                            2 => [
                                'icon' => 'fa fa-google',
                                'text' => 'Google',
                                'link' => 'http://plus.google.com/+rockettheme',
                                'name' => 'Google'
                            ],
                            3 => [
                                'icon' => 'fa fa-rss',
                                'text' => 'RSS',
                                'link' => 'http://www.rockettheme.com/product-updates?rss',
                                'name' => 'RSS'
                            ]
                        ]
                    ],
                    'block' => [
                        'variations' => 'center'
                    ]
                ],
                'branding-3794' => [
                    'block' => [
                        'variations' => 'align-right'
                    ]
                ],
                'mobile-menu-5819' => [
                    'title' => 'Mobile Menu'
                ]
            ]
        ],
        'assignments' => [
            'context' => [
                0 => [
                    'is_front_page' => true
                ]
            ]
        ]
    ]
];
