<?php
namespace torfeh\modules\products\Http\Contracts;

use torfeh\modules\bases\Http\Contracts\BaseRepository;
use torfeh\modules\products\Models\Product;


class ProductRepository extends BaseRepository
{
    public function model(): mixed
    {
        return Product::class;
    }

}
