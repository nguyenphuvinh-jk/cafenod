<?php

namespace App\Http\Controllers;

use App\blog_category;
use App\blog_post;
use App\blog_tag;
use App\Banner;
use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
    public function index(){
        $banner = Banner::where('banner_status', 2)->get();
        $slider = Banner::where('banner_status', 1)->get();
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->get();
        $all_product = DB::table('tbl_product')->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')->where('product_status','1')->orderby('product_id','desc')->limit(8)->get();
        $lastest_posts = blog_post::where("status", 1)->orderBy('created_at', 'DESC')->take(4)->get();
        return view('home.home')->with('category',$cate_product)->with('all_product',$all_product)->with('lastest_posts', $lastest_posts)->with('banner',$banner)->with('slider', $slider);
    }

    public function index1(){
        $category_by_id = DB::table('tbl_product')->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')->paginate(20);
        return view('shop.components.product', compact('category_by_id'))->with('breadcrumb_name', 'Cửa hàng cà phê');
    }

    public function blog(){
        $posts = blog_post::where("status", 1)->orderBy('created_at', 'DESC')->paginate(2);
        $lastest_posts = blog_post::where("status", 1)->orderBy('created_at', 'DESC')->take(4)->get();
        $tags = blog_tag::all();
        $categories = blog_category::all();
        return view('blog.blog', compact('posts', 'tags', 'lastest_posts', 'categories'));
    }

    public function contact(){
        return view('contact.contact');
    }

    public function about(){
        return view('about.about_us');
    }
}
