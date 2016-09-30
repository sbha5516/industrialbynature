<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/industrialclient/templates/it_oxygen/gantry/theme.yaml',
    'modified' => 1475214522,
    'data' => [
        'details' => [
            'name' => 'Oxygen',
            'version' => '1.4.0',
            'icon' => 'paper-plane',
            'date' => 'November, 2015',
            'author' => [
                'name' => 'InspireTheme LTD',
                'email' => 'office@inspiretheme.com',
                'link' => 'http://www.inspiretheme.com'
            ],
            'documentation' => [
                'link' => 'http://docs.gantry.org/gantry5'
            ],
            'support' => [
                'link' => 'http://www.inspiretheme.com'
            ],
            'updates' => NULL,
            'copyright' => '(C) InspireTheme LTD. All rights reserved.',
            'license' => 'GPLv2',
            'description' => 'Oxygen Theme',
            'images' => [
                'thumbnail' => 'admin/images/preset1.png',
                'preview' => 'admin/images/preset1.png'
            ]
        ],
        'configuration' => [
            'gantry' => [
                'platform' => 'joomla',
                'engine' => 'nucleus'
            ],
            'theme' => [
                'parent' => 'it_oxygen',
                'base' => 'gantry-theme://common',
                'file' => 'gantry-theme://include/theme.php',
                'class' => '\\Gantry\\Framework\\Theme'
            ],
            'fonts' => [
                'roboto' => [
                    400 => 'gantry-theme://fonts/roboto_regular_macroman/Roboto-Regular-webfont',
                    500 => 'gantry-theme://fonts/roboto_medium_macroman/Roboto-Medium-webfont',
                    700 => 'gantry-theme://fonts/roboto_bold_macroman/Roboto-Bold-webfont'
                ]
            ],
            'css' => [
                'compiler' => '\\Gantry\\Component\\Stylesheet\\ScssCompiler',
                'paths' => [
                    0 => 'gantry-theme://scss',
                    1 => 'gantry-engine://scss'
                ],
                'files' => [
                    0 => 'oxygen',
                    1 => 'oxygen-joomla',
                    2 => 'custom'
                ],
                'persistent' => [
                    0 => 'oxygen'
                ],
                'overrides' => [
                    0 => 'oxygen-joomla',
                    1 => 'custom'
                ]
            ],
            'block-variations' => [
                'Box Variations' => [
                    'box1' => 'Box 1',
                    'box2' => 'Box 2',
                    'box3' => 'Box 3',
                    'box4' => 'Box 4'
                ],
                'Effects' => [
                    'shadow' => 'Shadow 1',
                    'shadow2' => 'Shadow 2',
                    'rounded' => 'Rounded',
                    'square' => 'Square'
                ],
                'Utility' => [
                    'disabled' => 'Disabled',
                    'align-right' => 'Align Right',
                    'align-left' => 'Align Left',
                    'center' => 'Center',
                    'full-width' => 'Full Width',
                    'equal-height' => 'Equal Height',
                    'nomarginall' => 'No Margin',
                    'nopaddingall' => 'No Padding'
                ]
            ]
        ],
        'admin' => [
            'styles' => [
                'core' => [
                    0 => 'base',
                    1 => 'fonts',
                    2 => 'fontsizes',
                    3 => 'accent'
                ],
                'section' => [
                    0 => 'drawer',
                    1 => 'top',
                    2 => 'header',
                    3 => 'navigation',
                    4 => 'breadcrumb',
                    5 => 'fullwidth',
                    6 => 'showcase',
                    7 => 'intro',
                    8 => 'feature',
                    9 => 'subfeature',
                    10 => 'utility',
                    11 => 'maintop',
                    12 => 'systemmessages',
                    13 => 'sidebar',
                    14 => 'mainbody',
                    15 => 'aside',
                    16 => 'mainbottom',
                    17 => 'extension',
                    18 => 'additional',
                    19 => 'prebottom',
                    20 => 'bottom',
                    21 => 'afterbottom',
                    22 => 'last',
                    23 => 'footer',
                    24 => 'copyright'
                ],
                'configuration' => [
                    0 => 'breakpoints'
                ]
            ]
        ]
    ]
];
