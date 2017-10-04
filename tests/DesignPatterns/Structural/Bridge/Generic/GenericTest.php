<?php

namespace Tests\DesignPatterns\Structural\Bridge\Generic;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use DesignPatterns\Structural\Bridge\Generic\ConcreteClass;
use DesignPatterns\Structural\Bridge\Generic\Implementor1;

class GenericTest extends WebTestCase
{
    /** @test */
    public function implementor1()
    {
        $cc = new ConcreteClass(new Implementor1());

        $this->assertEquals('Implementor1 function1' ,$cc->function1());
        $this->assertEquals('Implementor1 function2' ,$cc->function2());
    }
}
