<?php

namespace Junges\TimeHelpers\Exceptions;

use Exception;

class InvalidTimeOperationMethodException extends Exception
{
    public static function methodNotListed(string $method)
    {
        return new static("[{$method}] method is not valid. You must use 'add' or 'sub'.");
    }
}
