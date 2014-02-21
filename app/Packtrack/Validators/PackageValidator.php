<?php namespace Packtrack\Validators;

class PackageValidator extends Validator{
    protected static $rules = array(
        'client_id'     =>  '',
        'reciever_name'    =>  'required',
        'country'    =>  'required',
        'city'       =>  'required',
        'address'    =>  'required',
        'postal_code' =>  'required',
        'tracking_code' =>  'unique:package',
        'reciever_mail' =>  'email|required_with:description',
        'description'   =>  ''
    );
}