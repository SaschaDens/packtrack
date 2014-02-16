<?php namespace Packtrack\Validators;

class LoginValidator extends Validator{
    protected static $rules = array(
        'email'                 =>  'required|email',
        'password'              =>  'required'
    );
}