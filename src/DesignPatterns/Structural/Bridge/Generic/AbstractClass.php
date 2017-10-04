<?php

namespace DesignPatterns\Structural\Bridge\Generic;

abstract class AbstractClass
{
    protected $implementor;

    function __construct(ImplementorInterface $implementor)
    {
        $this->implementor = $implementor;
    }
}
