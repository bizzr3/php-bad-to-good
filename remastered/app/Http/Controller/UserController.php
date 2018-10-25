<?php

namespace App\Http\Controllers;

use Request;
use UserRepo;
use zen\JsonResponse;

class UserController
{

    protected $userRepo;
    protected $productValidator;
    protected $response;

    public function __construct(
        UserRepo $userRepo,
        JsonResponse $response
    ) {
        $this->userRepo = $userRepo;
        $this->response = $response;
    }

    public function getUserEmail(Request $request)
    {
        $params = $request->all();

        $product = $this->userRepo()->getEmailByID($params['user_id']);

        return $this->response->json($product);
    }
}
