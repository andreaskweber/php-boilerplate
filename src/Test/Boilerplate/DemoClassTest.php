<?php

/*
 * This file is part of the andreas-weber/php-boilerplate library.
 *
 * (c) Andreas Weber <code@andreas-weber.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AndreasWeber\Boilerplate\Test\Boilerplate;

use AndreasWeber\Boilerplate\Boilerplate\DemoClass;

class DemoClassTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var DemoClass Demo class
     */
    private $demo;

    protected function setUp()
    {
        $this->demo = new DemoClass('Boilerplate');
    }

    public function testNameGetter()
    {
        $this->assertEquals(
            'Boilerplate',
            $this->demo->getName()
        );
    }
}
