<?php namespace Packtrack\Services;

use Packtrack\Validators\UserValidator;
use Packtrack\Exceptions\ValidationException;
use User;

class UserCreatorService {

    protected $validator;

    public function __construct(UserValidator $validator)
    {
        $this->validator = $validator;
    }

    public function make(array $attributes)
    {
        if($this->validator->isValidCreate($attributes))
        {
            User::create($attributes);

            return true;
        }

        throw new ValidationException('User validation failed', $this->validator->getErrors());
    }

    public function createWorker(array $attributes)
    {
        if($this->validator->isValidCreate($attributes))
        {
            $location = new Location();
            $location->type = 0;
            $location->save();

            $user = new User();
            $user->first_name = $attributes['first_name'];
            $user->last_name = $attributes['last_name'];
            $user->email = $attributes['email'];
            $user->password = $attributes['password'];
            $user->activated = 1;
            $user->permission_level = 1;
            $user->country = $attributes['country'];
            $user->city = $attributes['city'];
            $user->postal_code = $attributes['postal_code'];
            $user->address = $attributes['address'];
            $user->postal_code = $attributes['postal_code'];
            $user->location_id = $location->id;
            $user->save();

            return true;
        }

        throw new ValidationException('User validation failed', $this->validator->getErrors());
    }
}