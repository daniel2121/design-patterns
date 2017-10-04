<?php

namespace DesignPatterns\Creational\FactoryMethod;

abstract class FactoryAbstract
{
    
    final public function create()
    {
        return $this->build();
    }

    abstract protected function build();
}
