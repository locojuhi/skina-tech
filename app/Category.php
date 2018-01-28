<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    
    public function parent_category(){
        return $this->belongsTo('App\Category', 'parent_id', 'id');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }


    protected $dates = ['deleted_at'];
    protected $fillable = [
        'name',
        'parent_id'
    ];
}
