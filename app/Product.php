<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    public function category(){
        return $this->belongsTo('App\Category');
    }

    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'stock',
        'price',
        'category_id'
    ];
}
