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
            $package_id = $package->id;
            $location_id = Auth::user()->location->id;
            $status = (Packagelog::registered($package_id, $location_id))? 0 : 1;

            Packagelog::create(array(
                'package_id'    =>  $package_id,
                'status'    =>  $status,
                //'description'   =>  $attributes['description'],
                'location_id'   =>  $location_id
            ));

            return true;
        }

        throw new ValidationException('Package validation failed', $this->validator->getErrors());
    }
}