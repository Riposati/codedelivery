<?php

namespace codedelivery\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use codedelivery\Repositories\UserRepository;
use codedelivery\Models\User;
use codedelivery\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent
 * @package namespace codedelivery\Repositories;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }

    public function listas(){

        return $this->model->where(['role' => 'deliveryman'])->lists('name' , 'id');
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
