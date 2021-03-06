<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'image';
    protected $primaryKey = 'id';
    public $timestamps = true;

    public function product(){
        return $this->belongsTo('App\Models\Product','product_id','id');
    }
}
