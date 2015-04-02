<?php

/*
 * This file is part of the andreas-weber/php-boilerplate library.
 *
 * (c) Andreas Weber <code@andreas-weber.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AndreasWeber\Boilerplate\Boilerplate;

class DemoClass
{
    /**
     * @var string Name
     */
    private $name;

    /**
     * __construct()
     *
     * @param string $name Name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
