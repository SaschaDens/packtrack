<?php namespace Packtrack\Services;

use Packtrack\Validators\LocationValidator;
use Packtrack\Exceptions\ValidationException;
use Location;

class LocationCreatorService {

    protected $validator;

    public function __construct(LocationValidator $validator)
    {
        $this->validator = $validator;
    }

    public function make(array $attributes)
    {
        if($this->validator->isValid($attributes))
        {
            Location::create($attributes);

            return true;
        }

        throw new ValidationException('Location validation failed', $this->validator->getErrors());
    }

    public function update($id, array $attributes)
    {
        if($this->validator->isValid($attributes))
        {
            $location = Location::find($id);
            $location->update($attributes);

            return true;
        }

        throw new ValidationException('Location update validation failed', $this->validator->getErrors());
    }
}