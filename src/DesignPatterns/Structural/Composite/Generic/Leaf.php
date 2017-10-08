<?php

namespace DesignPatterns\Structural\Composite\Generic;

class Leaf implements ComponentInterface
{
    /**
     * Undocumented function
     *
     * @return string
     */
    public function operation():string
    {
        return 'Leaf';
    }
}
