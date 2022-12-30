<?php

namespace torfeh\modules\products\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\checkoutCartJob;
use App\Jobs\ProducJob;
use torfeh\modules\products\Http\Requests\BasketRequest;
use torfeh\modules\products\Http\Requests\checkoutCartRequest;

class BasketController extends Controller
{
    public function create(BasketRequest  $request)
    {
        ProducJob::dispatch($request->all());
       return "True";
    }
    public  function show(checkoutCartRequest $request){
       checkoutCartJob::dispatch($request->all());
    }
}
