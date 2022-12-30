<?php

namespace App\Http\Controllers;

use App\Jobs\ProducJob;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        ProducJob::dispatch(User::all()->toJson());
    }
}
