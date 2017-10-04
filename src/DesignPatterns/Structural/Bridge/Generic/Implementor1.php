<?php

namespace DesignPatterns\Structural\Bridge\Generic;

class Implementor1 implements ImplementorInterface
{
    public function function1()
    {
        return 'Implementor1 function1';
    }
    
    public function function2()
    {
        return 'Implementor1 function2';
    }
}
