<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps= false;
    protected $fillable = ['order_code','shipping_id','customer_id','payment_id','order_status','order_total','created_at'];
    protected $primaryKey='order_id';
    protected $table = 'tbl_order';
}
