<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility\StringFilter;

/**
 * Remove 'a' characters
 */
class RemoveB extends Handler
{
    function __construct($successor = null)
    {
        parent::__construct($successor);
    }

    protected function handleRequest($request)
    {
        return str_replace('b', '', $request);
    }
}
