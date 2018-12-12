<?php

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Session\Adapter\Files;

use IntegrationTester;

class RemoveCest
{
    /**
     * Tests Phalcon\Session\Adapter\Files :: remove()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function sessionAdapterFilesRemove(IntegrationTester $I)
    {
        $I->wantToTest("Session\Adapter\Files - remove()");
        $I->skipTest("Need implementation");
    }
}