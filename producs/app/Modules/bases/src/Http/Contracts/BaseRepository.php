<?php
namespace torfeh\modules\bases\Http\Contracts;

use Illuminate\Http\JsonResponse;
abstract class BaseRepository implements BaseRepositoryInterface
{
    abstract public function model(): mixed;

    protected mixed $model;

    public function __construct()
    {
        $this->model = app($this->model());
    }

    public function all():JsonResponse
    {
        return response()
            ->json([
                'status' => 'true',
                'data' => $this->model->all(),
                'messages' => 'list'
            ]);
    }
}
