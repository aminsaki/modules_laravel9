<?php

namespace torfeh\modules\user\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use torfeh\modules\user\Http\Contracts\ProductRepository;
use torfeh\modules\user\Http\Contracts\UserRepository;

class UserController extends Controller
{
    protected mixed $users;

    public function __construct(UserRepository $userRepository)
    {
        $this->users = $userRepository;
    }
    public  function index(){
       return $this->users->all();
    }
}
