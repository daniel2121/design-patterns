<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility\StringFilter;

/**
 *
 */
abstract class Handler
{
    /**
     * @var Handler
     */
    private $successor;

    function __construct($successor = null)
    {
        $this->successor = $successor;
    }

    /**
     * [handle description]
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    final public function handle($request)
    {
        $processed = $this->handleRequest($request);

        if ($processed === null)
        {
            if ($this->successor != null)
            {
                $processed = $this->successor->handle($request);
            }
        }

        return $processed;
    }

    abstract protected function handleRequest($request);
}
