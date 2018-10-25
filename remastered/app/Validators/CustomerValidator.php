<?php

namespace App\Validators;

class CustomerValidator extends Validartor
{
    public function validateCreate(array $params)
    {
        $rules = ['name|string|max:64']; // Example rules we need for validating parameters

        $this->validator($params, $rules); // throw exception if not match
    }
}
