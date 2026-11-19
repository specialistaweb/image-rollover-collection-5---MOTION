<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// For sites configured with TypoScript records (sys_template), e.g. all TYPO3 12 sites.
// Sites using site sets (TYPO3 13/14) add the set "Rollovercollection 5 - MOTION" instead.
ExtensionManagementUtility::addStaticFile(
    'rollovercollection5',
    'Configuration/TypoScript',
    'Rollovercollection 5 - MOTION'
);
