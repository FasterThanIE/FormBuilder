<?php

namespace TomTom\Forms;

use Exception;
use Throwable;

class InvalidTypeException extends Exception
{
    public function __construct($code = 0, Throwable $previous = null) {
        parent::__construct("Invalid form type. Allowed types: ".implode(' ,', FormBuilder::ALLOWED_TYPES), $code, $previous);
    }
}