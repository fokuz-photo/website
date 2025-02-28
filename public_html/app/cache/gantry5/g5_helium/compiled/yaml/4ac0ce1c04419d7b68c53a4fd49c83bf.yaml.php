<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/mnt/web215/a2/02/510687002/htdocs/prod/public_html/app/plugins/gantry5/engines/nucleus/particles/loginform.yaml',
    'modified' => 1733829649,
    'data' => [
        'name' => 'Login Form',
        'description' => 'Display Login Form.',
        'type' => 'particle',
        'icon' => 'fa-user',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Login Form particle.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the form.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'default' => 'Login'
                ],
                'greeting' => [
                    'type' => 'input.text',
                    'label' => 'Greeting',
                    'description' => 'Customize the text to be displayed as an user greeting.',
                    'default' => 'Hi, %s'
                ],
                'pretext' => [
                    'type' => 'input.text',
                    'label' => 'Pre Text',
                    'description' => 'Customize the text to be displayed before the login form.'
                ],
                'posttext' => [
                    'type' => 'input.text',
                    'label' => 'Post Text',
                    'description' => 'Customize the text to be displayed after the login form.'
                ]
            ]
        ]
    ]
];
