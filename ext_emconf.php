<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'image rollover collection 5 - MOTION',
    'description' => 'MOTION: nine modern hover layouts, CSS only (arch, accordion, frosted glass, 3D tilt, glowing border, bento grid, black and white to colour, full screen view, curtain) for the content elements textmedia, media, textpic and image. Requires bootstrap_package (Bootstrap 5).',
    'category' => 'fe',
    'version' => '1.0.0',
    'state' => 'stable',
    'author' => 'Giulia Tuveri',
    'author_email' => 'gt@specialistaweb.it',
    'author_company' => 'Specialistaweb',
    'constraints' => [
        'depends' => [
            'php' => '8.1.0-8.5.99',
            'typo3' => '12.4.0-14.4.99',
            'bootstrap_package' => '14.0.0-16.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
