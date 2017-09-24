<?php

namespace DesignPatterns\Creational\Factories\SimpleFactory\Phones;

/**
 *
 */
class Samsung implements PhoneInterface
{
    public function call() : string
    {
        return 'Calling from a Samsung';
    }
}
