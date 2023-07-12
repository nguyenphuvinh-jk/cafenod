<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps= false;
    protected $fillable = ['product_name','slug_product','category_id','product_content','product_price','product_price_old','product_image','product_desc','product_status'];
    protected $primaryKey='product_id';
    protected $table = 'tbl_product';

    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }
}
