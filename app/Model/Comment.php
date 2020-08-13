<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    public function news()
    {
        return $this->belongsTo('App\Model\News','idTinTuc','id');
    }

    public function customer()
    {
        return $this->belongsTo('App\Model\Customer','idUser','id');
    }
}
