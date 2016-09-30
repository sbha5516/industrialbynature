<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/industrialclient/templates/it_oxygen/particles/offcanvas-toggle.yaml',
    'modified' => 1475214521,
    'data' => [
        'name' => 'Offcanvas Toggle',
        'description' => 'Display Offcanvas Toggle button.',
        'type' => 'particle',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable Offcanvas Toggle particles.',
                    'default' => true
                ],
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => '<p>Displays the Offcanvas Toggle Button.<br />This particle is designed to be used in the Menu only.</p><p>Once you publish this particle, it hides the original toggle button for the viewport size specified under "Styles" tab -> "Breakpoints" -> "Mobile Menu".</p>'
                ],
                'icon' => [
                    'type' => 'input.icon',
                    'label' => 'Icon',
                    'description' => 'Select the icon for the Offcanvas Toggle button.',
                    'default' => 'fa fa-bars'
                ]
            ]
        ]
    ]
];
