<?php namespace Packtrack\Validators;

use Validator as V;

abstract class Validator {

    protected $errors;

    public function isValid(array $attributes)
    {
        $v = V::make($attributes, static::$rules);

        if($v->fails())
        {
            $this->errors = $v->messages();
            return false;
        }

        return true;
    }

    public function isValidCreate(array $attributes)
    {
        $v = V::make($attributes, static::$create_rules);

        if($v->fails())
        {
            $this->errors = $v->messages();
            return false;
        }

        return true;
    }

    public function getErrors()
    {
        return $this->errors;
    }
}