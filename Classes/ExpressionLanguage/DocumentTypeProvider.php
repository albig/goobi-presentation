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

namespace Kitodo\Dlf\ExpressionLanguage;

use TYPO3\CMS\Core\ExpressionLanguage\AbstractProvider;
use TYPO3\CMS\Core\ExpressionLanguage\FunctionsProvider\Typo3ConditionFunctionsProvider;

class DocumentTypeProvider extends AbstractProvider
{
    public function __construct()
    {
         $this->expressionLanguageProviders = [
            DocumentTypeFunctionProvider::class
         ];
    }
}