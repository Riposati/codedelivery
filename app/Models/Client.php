<?php

namespace codedelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use codedelivery\Models\User;

class Client extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [

        'user_id',
        'phone',
        'address',
        'city',
        'state',
        'zipcode',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id' , 'user_id');
    }

    public function order()
    {
        return $this->hasOne(Order::class, 'user_id' , 'user_id');
    }

}
