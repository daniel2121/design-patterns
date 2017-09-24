<?php

namespace DesignPatterns\Creational\Factories\SimpleFactory\Phones;

/**
 * This PhoneFactory follows the simple factory pattern, which is criticized because
 * it violates the open/close principle (possibly among others)
 */
class PhoneFactory
{
    const SAMSUNG = 'samsung';
    const NOKIA = 'nokia';

    /**
     * @param  string         $type
     * @return PhoneInterface
     */
    public function makePhone($type = '') : PhoneInterface
    {
        switch ($type) {
            case self::SAMSUNG:
                return new Samsung();
                break;
            case self::NOKIA:
                return new Nokia();
                break;
                
            default:
                throw new \Exception('Phone not valid');
                break;
        }
    }
}
