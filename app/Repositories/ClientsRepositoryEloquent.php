<?php

namespace codedelivery\Repositories;


use codedelivery\Models\Client;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use codedelivery\Validators\ClientRepositoryValidator;

/**
 * Class ClientRepositoryRepositoryEloquent
 * @package namespace codedelivery\Repositories;
 */
class ClientsRepositoryEloquent extends BaseRepository implements ClientsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Client::class;
    }

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
