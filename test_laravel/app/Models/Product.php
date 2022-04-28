<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function image(){
        return $this->hasOne('App\Models\Image','product_id','id');
    }
}
