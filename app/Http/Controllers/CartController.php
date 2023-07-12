<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
session_start();

class CartController extends Controller
{
    public function add_to_cart(Request $request){
        $data = $request->all();
        $session_id = substr(md5(microtime()), rand(0,26),5);
        $cart = Session::get('cart');
        if ($cart==true){

        }else{
            $cart[] = array(

            );
        }
    }

    public function save_cart(Request $request){

        $product_id = $request->product_id_hidden;
        $quantity = $request->qty;
        $product_info = DB::table('tbl_product')->where('product_id',$product_id)->first();

        $data['id'] = $product_info->product_id;
        $data['qty'] = $quantity;
        $data['name'] = $product_info->product_name;
        $data['price'] = $product_info->product_price;
        $data['weight'] = $product_info->product_price;
        $data['options']['image'] = $product_info->product_image;
        Cart::add($data);
        Cart::setGlobalTax(10);
        return Redirect::back();
    }

    public function show_cart(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->get();

        return view('shop.components.card')->with('category',$cate_product);
    }

    public function delete_to_cart($rowId){
        Cart::update($rowId,0);
        return Redirect::to('/gio-hang');
    }

    public function update_cart_quantity(Request $request){
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId,$qty);
        return Redirect::to('/gio-hang');
    }
}
