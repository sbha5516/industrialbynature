<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/industrialclient/templates/it_oxygen/blueprints/styles/mainbottom.yaml',
    'modified' => 1475214521,
    'data' => [
        'name' => 'Mainbottom Styles',
        'description' => 'Mainbottom styles for the Oxygen theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background Color',
                    'default' => '#ffffff'
                ],
                'background-image' => [
                    'type' => 'input.imagepicker',
                    'label' => 'Background Image',
                    'default' => ''
                ],
                'background-repeat' => [
                    'type' => 'select.select',
                    'label' => 'Background Repeat',
                    'default' => 'no-repeat',
                    'options' => [
                        'no-repeat' => 'No Repeat',
                        'repeat' => 'Repeat',
                        'repeat-x' => 'Repeat-x',
                        'repeat-y' => 'Repeat-y'
                    ]
                ],
                'background-size' => [
                    'type' => 'select.select',
                    'label' => 'Background Size',
                    'default' => 'auto',
                    'options' => [
                        'auto' => 'Auto',
                        '100%' => '100%',
                        'cover' => 'Cover'
                    ]
                ],
                'background-attachment' => [
                    'type' => 'select.select',
                    'label' => 'Background Attach.',
                    'default' => 'scroll',
                    'options' => [
                        'scroll' => 'Scroll',
                        'fixed' => 'Fixed'
                    ]
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text Color',
                    'default' => '#91929c'
                ],
                'heading-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Heading Color',
                    'default' => '#2d3d4d'
                ]
            ]
        ]
    ]
];
