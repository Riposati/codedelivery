<?php

namespace codedelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use codedelivery\Repositories\OrderItemRepository;
use codedelivery\Models\OrderItem;
use codedelivery\Validators\OrderItemValidator;

/**
 * Class OrderItemRepositoryEloquent
 * @package namespace codedelivery\Repositories;
 */
class OrderItemRepositoryEloquent extends BaseRepository implements OrderItemRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return OrderItem::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
