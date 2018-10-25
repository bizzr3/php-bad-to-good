<?php

namespace App\Repos;

use App\Models\Product;


class ProductRepo extends Repository
{

    protected $product;

    public function __construct(
        Product $product
    ) {
        $this->product = $product;
    }

    public function getProductByID(int $product_id) : array
    {

        // example output:

//        $result = [
//            'id' => '666',
//            'name' => 'Fluffy unicorn',
//            'description' => 'It\'s so fluffy you\'ll melt and bring it to the park and eat ice cream. https://timedotcom.files.wordpress.com/2015/03/deadpool.jpg',
//            'price' => ['amount' => 10000, 'currency' => 'USD']
//        ];

        return $this->product->findOrFail($product_id);
    }
}
