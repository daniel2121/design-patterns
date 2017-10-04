<?php

namespace DesignPatterns\Structural\Bridge\Generic;

class ConcreteClass extends AbstractClass
{
    function __construct(ImplementorInterface $implementor)
    {
        parent::__construct($implementor);
    }

    public function function1()
    {
        return $this->implementor->function1();
    }

    public function function2()
    {
        return $this->implementor->function2();
    }
}
