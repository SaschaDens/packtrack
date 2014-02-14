<?php namespace Packtrack\Services;

use Packtrack\Validators\PackageValidator;
use Packtrack\Validators\ValidationException;
use Package;

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
            Package::create($attributes);

            return true;
        }

        throw new ValidationException('Task validation failed', $this->validator->getErrors());
    }
}