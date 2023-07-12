<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $timestamps= false;
    protected $fillable = ['shipping_name','shipping_address','shipping_phone','shipping_email','shipping_desc'];
    protected $primaryKey='shipping_id';
    protected $table = 'tbl_shipping';
}
