<?php

namespace App\Http\Controllers;

use Request;
use ProductRepo;
use zen\JsonResponse;

class ProductController {

    protected $productRepo;
    protected $response;

    public function __construct(
        ProductRepo $productRepo,
        JsonResponse $response
    ) {
        $this->productRepo = $productRepo;
        $this->response    = $response;
    }

    public function getProduct(Request $request) : JsonResponse
    {
        $params = $request->all();

        $product = $this->productRepo()->getProductByID($params['product_id']);

        return $this->response->json($product);
    }
}
