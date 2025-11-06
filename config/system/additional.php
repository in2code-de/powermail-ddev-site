<?php

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
    $GLOBALS['TYPO3_CONF_VARS'],
    [
        'MAIL' => [
            'defaultMailFromAddress' => 'docker@localhost',
            'defaultMailFromName' => 'Powermail DDEV Site',
        ],

        'SYS' => [
            'errorHandlerErrors' => E_WARNING | E_USER_ERROR | E_USER_WARNING | E_USER_NOTICE | E_RECOVERABLE_ERROR | E_DEPRECATED | E_USER_DEPRECATED,
            'exceptionalErrors' => E_WARNING | E_RECOVERABLE_ERROR | E_DEPRECATED | E_USER_DEPRECATED,
            'trustedHostsPattern' => 'localhost|powermail-ddev-site.ddev.site',
        ]
    ]
);
