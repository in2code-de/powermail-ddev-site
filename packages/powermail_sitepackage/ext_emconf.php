<?php

/**
 * Extension Manager/Repository config file for ext "powermail_sitepackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Powermail Sitepackage',
    'description' => 'Powermail development site',
    'category' => 'distribution',
    'constraints' => [
        'depends' => [
            'typo3' => '*',
            'bootstrap_package' => '*'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'In2code\\PowermailSitepackage\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Marcus Schwemer',
    'author_email' => 'Marcus Schwemer',
    'author_company' => 'in2code GmbH',
    'version' => '1.0.0',
];
