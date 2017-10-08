<?php

namespace Tests\DesignPatterns\Structural\Composite\Generic;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use DesignPatterns\Structural\Composite\Generic\Composite;
use DesignPatterns\Structural\Composite\Generic\Leaf;

class GenericTest extends WebTestCase
{
    /** @test */
    public function composite_with_one_leaf()
    {
        $composite = new Composite();

        $composite->addComponent(new Leaf());

        $this->assertEquals('Composite[Leaf|]' , $composite->operation());
    }

    /** @test */
    public function composite_with_two_leaf()
    {
        $composite = new Composite();

        $composite->addComponent(new Leaf());
        $composite->addComponent(new Leaf());

        $this->assertEquals('Composite[Leaf|Leaf|]' , $composite->operation());
    }

    /** @test */
    public function composite_with_nested_composite()
    {
        $compositeParent = new Composite();
        
        $compositeParent->addComponent(new Leaf());
        $compositeParent->addComponent(new Leaf());
        
        $compositeChild = new Composite();

        $compositeChild->addComponent(new Leaf());

        $compositeParent->addComponent($compositeChild);

        $this->assertEquals('Composite[Leaf|Leaf|Composite[Leaf|]|]' , $compositeParent->operation());
    }
}
