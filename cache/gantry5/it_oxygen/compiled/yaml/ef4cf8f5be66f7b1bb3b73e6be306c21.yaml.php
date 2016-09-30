<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/industrialclient/templates/it_oxygen/blueprints/styles/fonts.yaml',
    'modified' => 1475214521,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the InspireTheme theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'body-font' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'family=Varela+Round'
                ],
                'heading-font' => [
                    'type' => 'input.fonts',
                    'label' => 'Heading Font',
                    'default' => 'family=Varela+Round'
                ],
                'menu-font' => [
                    'type' => 'input.fonts',
                    'label' => 'Menu Font',
                    'default' => 'family=Varela+Round'
                ]
            ]
        ]
    ]
];
