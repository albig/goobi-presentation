<?php

/**
 * (c) Kitodo. Key to digital objects e.V. <contact@kitodo.org>
 *
 * This file is part of the Kitodo and TYPO3 projects.
 *
 * @license GNU General Public License version 3 or later.
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

// Register backend module.
if (\TYPO3_MODE === 'BE') {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule(
        'web',
        'dlfNewTenantModule',
        '',
        '',
        [
            'routeTarget' => \Kitodo\Dlf\Module\NewTenant::class . '::main',
            'access' => 'admin',
            'name' => 'web_dlfNewTenantModule',
            'icon' => 'EXT:dlf/Resources/Public/Icons/Extension.svg',
            'labels' => 'LLL:EXT:dlf/Resources/Private/Language/NewTenant.xml'
        ]
    );
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addNavigationComponent('tools_dlfNewTenantModule', 'typo3-pagetree', 'dlf');
}
