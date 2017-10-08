<?php

namespace DesignPatterns\Structural\Composite\Generic;

class Composite implements ComponentInterface
{
    /**
     * Undocumented variable
     *
     * @var ComponentInterface[]
     */
    protected $components;

    public function operation():string
    {
        $compositeTree = 'Composite[';
        foreach ($this->components as $component) {
            $compositeTree .= $component->operation().'|';
        }
        $compositeTree .= ']';

        return $compositeTree;
    }

    public function addComponent(ComponentInterface $component)
    {
        $this->components[] = $component;
    }
}
