<?php

namespace torfeh\modules\products\Http\Controllers;

use App\Http\Controllers\Controller;
use torfeh\modules\products\Http\Contracts\ProductRepository;

class ProductController extends Controller
{
    protected mixed $products;

    public function __construct(ProductRepository  $products)
    {
        $this->products = $products;
    }
    public  function index(){
       return   $this->products->all();
    }
}
