<?php
namespace torfeh\modules\bases\Http\Contracts;

use Illuminate\Http\JsonResponse;
interface BaseRepositoryInterface
{
    public  function  all():JsonResponse;
}
