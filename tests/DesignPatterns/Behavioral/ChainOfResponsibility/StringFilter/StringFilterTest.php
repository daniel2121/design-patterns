<?php

namespace Tests\DesignPatterns\StringFilter;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use DesignPatterns\Behavioral\ChainOfResponsibility\StringFilter\RemoveA;
use DesignPatterns\Behavioral\ChainOfResponsibility\StringFilter\RemoveB;

class StringFilterTest extends WebTestCase
{
    /**
     * @test
     */
    public function remove_a_and_b_from_string()
    {
        $remove_a = new RemoveA(new RemoveB);

        $this->assertEquals("hello", $remove_a->handle("ahbaebalbalbabbaobaaab"));
    }
}
