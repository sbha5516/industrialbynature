<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/industrialclient/templates/it_oxygen/blueprints/styles/offcanvas.yaml',
    'modified' => 1475214521,
    'data' => [
        'name' => 'Offcanvas Section',
        'description' => 'Paramters for the Off Canvas sidepanel section.',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background Color',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text Color',
                    'default' => '#91929c'
                ],
                'width' => [
                    'type' => 'input.text',
                    'label' => 'Panel Width',
                    'description' => 'Set offcanvas size in rem, em, px, or percentage unit values',
                    'default' => '17rem',
                    'pattern' => '\\d+(\\.\\d+){0,1}(rem|em|ex|ch|vw|vh|vmin|vmax|%|px|cm|mm|in|pt|pc)'
                ],
                'toggle-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Toggle Color',
                    'default' => '#91929c'
                ],
                'toggle-position' => [
                    'type' => 'select.select',
                    'label' => 'Toggle Position.',
                    'default' => 'left',
                    'options' => [
                        'left' => 'Left',
                        'right' => 'Right'
                    ]
                ],
                'overlay' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Overlay',
                    'description' => 'Set the color of the page overlay when the certain menu modes are active.',
                    'default' => 'rgba(0, 0, 0, 0.6)'
                ]
            ]
        ]
    ]
];
