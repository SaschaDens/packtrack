<?php namespace Packtrack\Exceptions;

use Exception;

class PermissionException extends Exception {

    protected $errors;
    public function __construct($message, $code = 0, Exception $previous = null)
    {
        //$this->errors = $errors;
        parent::__construct($message, $code, $previous);
    }
}