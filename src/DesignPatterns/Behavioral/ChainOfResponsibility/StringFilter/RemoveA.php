<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility\StringFilter;

/**
 * Remove 'a' characters
 */
class RemoveA extends Handler
{
    function __construct($successor = null)
    {
        parent::__construct($successor);
    }

    protected function handleRequest($request)
    {
        return "string without a";
    }
}
