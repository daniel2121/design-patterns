<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibility\StringFilter;

/**
 * This example of CoR does not stick to its essence. This is more like a
 * variation of CoR applied to multiple handlers handling the request.
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
     * @param  string $request
     * @return string|null
     */
    final public function handle($request)
    {
        $processed = $this->handleRequest($request);

        if ($processed <> '')
        {
            if ($this->successor != null)
            {
                // Here we passed the output of handleRequest instead of the original request
                $processed = $this->successor->handle($processed);
            }
        }

        return $processed;
    }

    abstract protected function handleRequest($request);
}
