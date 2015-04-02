<?php

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
