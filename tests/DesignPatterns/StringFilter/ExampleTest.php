<?php

namespace Tests\DesignPatterns\StringFilter;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ExampleTest extends WebTestCase
{
    /* @test */
    public function testing_test()
    {
        $remove_a = new \DesignPatterns\Behavioral\ChainOfResponsibility\StringFilter\RemoveA();


        $this->assertEquals("string without a", $remove_a->handle("hello"));
    }
}
