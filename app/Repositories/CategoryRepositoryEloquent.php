<?php

namespace codedelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use codedelivery\Repositories\CategoryRepository;
use codedelivery\Models\Category;
use codedelivery\Validators\CategoryValidator;

/**
 * Class CategoryRepositoryEloquent
 * @package namespace codedelivery\Repositories;
 */
class CategoryRepositoryEloquent extends BaseRepository implements CategoryRepository
{
    public function listas(){

        return $this->model->lists('name' , 'id');
    }


    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
