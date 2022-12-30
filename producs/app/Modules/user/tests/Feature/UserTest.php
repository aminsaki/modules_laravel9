<?php

namespace torfeh\modules\user\tests\Feature;

use App\Models\User;
use Symfony\Component\HttpFoundation\Response;
use Tests\TestCase;

class UserTest extends TestCase
{

    public function test_method_user_list()
    {
        $response = $this->get('api/users');
        $response->assertStatus(Response::HTTP_OK);
    }

}
