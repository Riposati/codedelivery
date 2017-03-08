<?php

namespace codedelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use codedelivery\Repositories\ProductRepository;
use codedelivery\Models\Product;
use codedelivery\Validators\ProductValidator;

/**
 * Class ProductRepositoryEloquent
 * @package namespace codedelivery\Repositories;
 */
class ProductRepositoryEloquent extends BaseRepository implements ProductRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Product::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
