<?php

namespace DesignPatterns\Creational\Factories\SimpleFactory\Phones;

/**
 *
 */
class Nokia implements PhoneInterface
{
    public function call() : string
    {
        return 'Calling from a Nokia';
    }
}
