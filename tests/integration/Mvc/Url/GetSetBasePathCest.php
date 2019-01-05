<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Integration\Mvc\Url;

use Phalcon\Mvc\Url;
use IntegrationTester;

/**
 * Class GetSetBasePathCest
 *
 * @package Phalcon\Test\Integration\Mvc\Url
 */
class GetSetBasePathCest
{
    /**
     * Tests Phalcon\Mvc\Url :: getBasePath()/setBasePath()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcUrlGetSetBasePath(IntegrationTester $I)
    {
        $I->wantToTest("Mvc\Url - getBasePath()/setBasePath()");
        $url = new Url();

        $path = '/en/team';
        $url->setBasePath($path);

        $expected = $path;
        $actual   = $url->getBasePath();
        $I->assertEquals($expected, $actual);
    }
}