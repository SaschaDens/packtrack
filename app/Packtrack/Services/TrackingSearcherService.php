<?php namespace Packtrack\Services;

use Packtrack\Validators\PackagelogValidator;
use Packtrack\Exceptions\ValidationException;


class TrackingSearcherService {

    protected $validator;

    public function __construct(PackagelogValidator $validator)
    {
        $this->validator = $validator;
    }

    public function search(array $attributes)
    {
        if($this->validator->isValid($attributes))
        {
            return true;
        }

        throw new ValidationException('Tracking validation failed', $this->validator->getErrors());
    }
}