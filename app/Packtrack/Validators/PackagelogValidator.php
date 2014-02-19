<?php namespace Packtrack\Validators;

class PackagelogValidator extends Validator{
    protected static $rules = array(
        'tracking_code' =>  'required|alpha_num|size:13'
    );
}