<?php namespace Packtrack\Services;

use Packtrack\Validators\PackagelogValidator;
use Packtrack\Exceptions\ValidationException;
use Packagelog;
use Auth;

class PackagelogCreatorService {

    protected $validator;

    public function __construct(PackagelogValidator $validator)
    {
        $this->validator = $validator;
    }

    public function make($package, array $attributes)
    {
        if($this->validator->isValid($attributes))
        {
            Packagelog::create(array(
                'package_id'    =>  $package->id,
                'status'    =>  1,
                'description'   =>  'Test',
                'location_id'   =>  Auth::user()->location->id
            ));

            return true;
        }

        throw new ValidationException('Package validation failed', $this->validator->getErrors());
    }
}