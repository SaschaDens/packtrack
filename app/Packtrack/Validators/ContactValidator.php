<?php namespace Packtrack\Validators;

class ContactValidator extends Validator{
    protected static $create_rules = array(
        'first_name'            =>  'required',
        'last_name'             =>  'required',
        'email'                 =>  'required|email',
        'question'              =>  'required'
    );
}