<?php

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
