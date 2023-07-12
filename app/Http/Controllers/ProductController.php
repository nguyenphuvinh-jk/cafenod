<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\Product;
use App\Gallery;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class ProductController extends Controller
{
    public function add_product(){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        return view('admin.add_product')->with('cate_product', $cate_product);
    }

    public function all_product(){
        $all_product = DB::table('tbl_product')
            ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
            ->orderby('tbl_product.product_id')->get();
        $manageer_product = view('admin.all_product')->with('all_product', $all_product);
        return view('admin_layout')->with('admin.all_product', $manageer_product);
    }

    public function save_product(Request $request){
        $this->validate($request, [
            "product_name" => "required|unique:tbl_product,product_name",
            "slug_product" => "required|unique:tbl_product,slug_product",
            "product_price" => "required",
            "product_desc" => "required",
            "product_content" => "required",
        ]);

        $data=array();
        $data['product_name'] = $request->product_name;
        $data['slug_product'] = $request->slug_product;
        $data['product_price'] = $request->product_price;
        $data['product_price_old'] = $request->product_price_old;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->cate_product;
        $data['product_status'] = $request->product_status;

        $get_image = $request->file('product_image');
        if ($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product', $new_image);
            $data['product_image'] = $new_image;
        }
        else $data['product_image'] = '';
        DB::table('tbl_product')->insert($data);
        Session::flash('message','Thêm sản phẩm thành công!');
        return Redirect::to('all-product');
    }

    public function edit_product($product_id){
        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get();
        $edit_product = DB::table('tbl_product')->where('product_id', $product_id)->get();
        $manageer_product = view('admin.edit_product')->with('edit_product', $edit_product)->with('cate_product',$cate_product);
        return view('admin_layout')->with('admin.edit_product', $manageer_product);
    }

    public function update_product(Request $request,$product_id){
        $this->validate($request, [
            "product_name" => "required",
            "slug_product" => "required",
            "product_price" => "required",
            "product_desc" => "required",
            "product_content" => "required",
        ]);
        $data=array();
        $data['product_name'] = $request->product_name;
        $data['slug_product'] = $request->slug_product;
        $data['product_price'] = $request->product_price;
        $data['product_price_old'] = $request->product_price_old;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->cate_product;
        $data['product_status'] = $request->product_status;

        $get_image = $request->file('product_image');
        if ($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/product', $new_image);
            $data['product_image'] = $new_image;
        }

        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        Session::flash('message','Cập nhật sản phẩm thành công!');
        return Redirect::to('all-product');
    }

    public function delete_product($product_id){
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        Session::flash('message','Xoá sản phẩm thành công!');
        return Redirect::to('all-product');
    }

    /*public function details_product($product_id){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $gallery = Gallery::where('product_id', $product_id)->get();
        $details_product = DB::table('tbl_product')
            ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
            ->where('tbl_product.product_id',$product_id)->get();
        return view('shop.components.product_details')->with('category',$cate_product)
            ->with('details_product',$details_product)->with('gallery', $gallery);
    }*/

    public function details_product($slug_product , Request $request){

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();

        $details_product = DB::table('tbl_product')
            ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
            ->where('tbl_product.slug_product',$slug_product)->get();

        foreach($details_product as $key => $value){
            $category_id = $value->category_id;
            $product_id = $value->product_id;
        }

        $gallery = Gallery::where('product_id', $product_id)->get();

        return view('shop.components.product_details')->with('category',$cate_product)
            ->with('details_product',$details_product)->with('gallery', $gallery);

    }

}
