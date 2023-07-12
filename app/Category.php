<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps= false;
    protected $fillable = ['category_parent_id','category_name','slug_category_product','category_desc','category_status'];
    protected $primaryKey='category_id';
    protected $table = 'tbl_category_product';

    public function categoryChildren(){
        return $this->hasMany('App\Category', 'category_parent_id');
    }

    public function product(){
        return $this->hasMany('App\Product');
    }
}
