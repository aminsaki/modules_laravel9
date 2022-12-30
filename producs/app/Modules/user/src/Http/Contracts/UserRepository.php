<?php
namespace torfeh\modules\user\Http\Contracts;

use App\Models\User;
use torfeh\modules\bases\Http\Contracts\BaseRepository;


class UserRepository extends BaseRepository
{
    public function model(): mixed
    {
        return User::class;
    }

}
