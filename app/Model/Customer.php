<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    public function comment()
    {
        return $this->hasMany('App\Model\Comment','idUser','id');
    }
}
