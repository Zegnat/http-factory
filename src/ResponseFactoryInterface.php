<?php

namespace Interop\Http\Factory;

use Psr\Http\Message\ResponseInterface;

interface ResponseFactoryInterface
{
    /**
     * Create a new response.
     *
     * @param integer $code HTTP status code
     * @param string $reasonPhrase HTTP reason phrase
     *
     * @return ResponseInterface
     */
    public function createResponse($code = 200, $reasonPhrase = '');
}
