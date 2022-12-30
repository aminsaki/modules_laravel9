<?php

namespace App\Http\Controllers;

use App\Models\Basekt;

class BasketController extends Controller
{
   public function index(){
       $list = ['user_id'=>'1','product_id'=>'3'];

       $result = Basekt::create($list)->toSql();
       dd($result);

   }
}
