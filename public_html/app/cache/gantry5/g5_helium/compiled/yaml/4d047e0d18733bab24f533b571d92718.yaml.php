<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/prod/public_html/app/themes/g5_helium/custom/config/kontakt/layout.yaml',
    'modified' => 1733829679,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1716537822
        ],
        'layout' => [
            'navigation' => [
                
            ],
            '/header/' => [
                0 => [
                    0 => 'hero-7488'
                ]
            ],
            'intro' => [
                
            ],
            'features' => [
                
            ],
            'utility' => [
                
            ],
            'above' => [
                
            ],
            'testimonials' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'aside 25' => [
                            
                        ]
                    ],
                    1 => [
                        'mainbar 50' => [
                            
                        ]
                    ],
                    2 => [
                        'sidebar 25' => [
                            
                        ]
                    ]
                ]
            ],
            '/expanded/' => [
                0 => [
                    0 => 'contenttabs-2162'
                ]
            ],
            'footer' => [
                
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'navigation' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => '',
                    'variations' => ''
                ]
            ],
            'intro' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'features' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'utility' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'above' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'testimonials' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'aside' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ],
                'block' => [
                    'fixed' => '1'
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ],
                'block' => [
                    'fixed' => '1'
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => 'nopaddingall',
                    'variations' => ''
                ]
            ],
            'footer' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ]
        ],
        'content' => [
            'hero-7488' => [
                'title' => 'Hero block',
                'attributes' => [
                    'image' => 'gantry-media://heros/kontakt.png',
                    'description' => 'Mit allen Pfoten arbeiten wir mit Hochdruck an dieser Seite, damit ihr etwas interessantes über uns so bald wie möglich lesen könnt',
                    'link' => '#g-contenttabs-contenttabs-2162',
                    'linktext' => 'Frag mich mal'
                ]
            ],
            'contenttabs-2162' => [
                'title' => 'Content Tabs',
                'attributes' => [
                    'class' => '',
                    'title' => 'Kontaktformular',
                    'link' => '/kontakt',
                    'desc' => '<p>Möchtest du ein besonderes Fotoshooting organisieren oder einfach mehr erfahren? Erzähl mir, wen du auf den Fotos sehen möchtest – deine süßen Haustiere und welche genau, alleine oder mit ihren Lieblingsmenschen. Vergiss nicht anzugeben, wo du wohnst und welche Zeit dir am besten passt. Hast du besondere Wünsche oder Ideen für das Thema des Shootings?</p>

<p>Dies ist nur eine Informationsanfrage, die dich zum weiteren nicht verpflichtet. Ich freue mich darauf, mehr über deine Wünsche zu erfahren und die Details deiner einzigartigen Fotosession zu besprechen!</p>

<p>* zeigt erforderliche Felder an</p>',
                    'thumbnail' => 'gantry-media://mics/kontaktformular.png',
                    'image' => 'gantry-media://mics/kontaktformular.jpg',
                    'items' => [
                        0 => [
                            'content' => '[wpforms id="1008"]',
                            'title' => 'Anfrage zur dein Tierfotografin'
                        ],
                        1 => [
                            'content' => 'Demnächst verfügbar',
                            'title' => 'Anfrage für dein Fotoshooting'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
