<?php

namespace Tests\DesignPatterns\Creational\Factories\SimpleFactory\Phones;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use DesignPatterns\Creational\Factories\SimpleFactory\Phones\PhoneFactory;
use DesignPatterns\Creational\Factories\SimpleFactory\Phones\Samsung;
use DesignPatterns\Creational\Factories\SimpleFactory\Phones\Nokia;

class PhonesTest extends WebTestCase
{
    /** @test */
    public function create_a_samsung()
    {
        $factory = new PhoneFactory();
        $samsung = $factory->makePhone(PhoneFactory::SAMSUNG);

        $this->assertInstanceOf(Samsung::class, $samsung);
    }

    /** @test */
    public function create_a_nokia()
    {
        $factory = new PhoneFactory();
        $nokia = $factory->makePhone(PhoneFactory::NOKIA);

        $this->assertInstanceOf(Nokia::class, $nokia);
    }
}
