<?php namespace Packtrack\Services;

use Packtrack\Validators\PackageValidator;
use Packtrack\Validators\ValidationException;
use Package;
use Auth;

class PackageCreatorService {

    protected $validator;

    public function __construct(PackageValidator $validator)
    {
        $this->validator = $validator;
    }

    public function make(array $attributes)
    {
        if($this->validator->isValid($attributes))
        {
            Package::create(array(
                'user_id'           =>  Auth::user()->id,
                'address'        =>  $attributes['address'],
                'city'           =>  $attributes['city'],
                'postal_code'     =>  $attributes['postal_code'],
                'country'        =>  $attributes['country'],
                'reciever_mail'     =>  $attributes['reciever_mail'],
                'description'       =>  $attributes['description'],
            ));

            return true;
        }

        throw new ValidationException('Task validation failed', $this->validator->getErrors());
    }
}