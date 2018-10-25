<?php

namespace App\Http\Controllers;

use Request;
use App\Repos\CustomerRepo;
use zen\JsonResponse;
use App\Validators\CustomerValidator;

class CustomerController {

    protected $customerRepo;
    protected $customerValidator;
    protected $response;

    public function __construct(
        CustomerRepo $customerRepo,
        CustomerValidator $customerValidator,
        JsonResponse $response
    ) {
        $this->customerRepo      = $customerRepo;
        $this->customerValidator = $customerValidator;
        $this->response          = $response;
    }

    public function create(Request $request) : JsonResponse
    {
        $params = $request->all();

        $this->customerValidator->validateCreate($params);

        $result = $this->customerRepo()->create($params['product_id']); // some response games.

        return $this->response->json($result);
    }
}
