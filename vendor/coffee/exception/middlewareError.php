<?php

namespace coffee\exception;

use Throwable , \Exception;

class middlewareError extends Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message , 600 + $code, $previous);
    }
}