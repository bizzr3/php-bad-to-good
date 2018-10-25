<?php

namespace App\Repos;

use App\Models\Users;


class UserRepo extends Repository
{

    protected $user;

    public function __construct(
        Users $user
    ) {
        $this->user = $user;
    }

    public function getEmailByID(int $user_id) : array
    {

        // example output:
//        $result = [
//            'email' => 'contact@zemrooms.com'
//        ];


        return $this->product->findOrFail($user_id);
    }
}
