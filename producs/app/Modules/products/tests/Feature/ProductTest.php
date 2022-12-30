<?php

namespace torfeh\modules\products\tests\Feature;

use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class ProductTest extends TestCase
{

    public function test_method_user_list()
    {
        $response = $this->get('api/products');
        $response->assertStatus(Response::HTTP_OK);
    }

}
