<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Cart;
use App\Shipping;
use App\Order;
use App\OrderDetails;

session_start();

class CheckoutController extends Controller
{

    public function view_order($orderId){
        $order_by_id = DB::table('tbl_order')
            ->join('tbl_customer','tbl_order.customer_id','=','tbl_customer.customer_id')
            ->join('tbl_shipping','tbl_order.shipping_id','=','tbl_shipping.shipping_id')
            ->join('tbl_order_details','tbl_order.order_id','=','tbl_order_details.order_id')
            ->select('tbl_order.*','tbl_customer.*','tbl_shipping.*','tbl_order_details.*')->first();
        $manageer_order_by_id = view('admin.view_order')->with('order_by_id', $order_by_id);

        return view('admin_layout')->with('admin.view_order', $manageer_order_by_id);

    }

    public function login_checkout(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->get();
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->get();
        return view('registration.log_in')->with('category',$cate_product)->with('all_product',$all_product);
    }

    public function signup_checkout(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->get();
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->get();
        return view('registration.sign_up')->with('category',$cate_product)->with('all_product',$all_product);
    }

    public function add_customer(Request $request){
        $data = array();
        $data['customer_name'] = $request->customer_name;
        $data['customer_email'] = $request->customer_email;
        $data['customer_password'] = md5($request->customer_password);
        $data['customer_phone'] = $request->customer_phone;

        $customer_id = DB::table('tbl_customer')->insertGetId($data);
        Session::put('customer_id', $customer_id);
        Session::put('customer_name', $request->customer_name);

        return Redirect::to('/checkout');
    }

    public function checkout(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->get();
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->get();
        return view('shop.components.check_out')->with('category',$cate_product)->with('all_product',$all_product);
    }

    public function save_checkout_customer(Request $request){
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_address'] = $request->shipping_address;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_desc'] = $request->shipping_desc;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);
        Session::put('shipping_id', $shipping_id);

        return Redirect::to('/payment');
    }

    public function payment(){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->get();
        $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->get();

        return view('shop.components.payment');
    }

    public function logout_checkout(){
        Session::flush();
        return Redirect::to('/dang-nhap');
    }

    public function login_customer(Request $request){
        $email = $request->email_account;
        $password = md5($request->password_account);
        $results = DB::table('tbl_customer')->where('customer_email',$email)->where('customer_password',$password)->first();
        if ($results){
            Session::put('customer_id', $results->customer_id);
            return Redirect::to('/checkout');
        }else{
            return Redirect::to('/dang-nhap');
        }
    }

    public function order_place(Request $request){
        $rand_code = substr(md5(microtime()),rand(0,26),5);
        $data = array();
        //insert payment
        $data['payment_method'] = $request->payment_option;
        $data['payment_status'] = 'Đang chờ xử lý';
        $payment_id = DB::table('tbl_payment')->insertGetId($data);

        //ínsert order
        $order_data = array();
        $order_data['order_code'] = $rand_code;
        $order_data['customer_id'] = Session::get('customer_id');
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = Cart::total();
        $order_data['order_status'] = '1';
        $order_id = DB::table('tbl_order')->insertGetId($order_data);

        //insert order details
        $content = Cart::content();
        foreach ($content as $v_content){
            $order_d = array();
            $order_d['order_code'] = $rand_code;
            $order_d['product_id'] = $v_content->id;
            $order_d['product_name'] = $v_content->name;
            $order_d['product_price'] = $v_content->price;
            $order_d['product_sales_quantity'] = $v_content->qty;
            DB::table('tbl_order_details')->insertGetId($order_d);
        }

        if ($data['payment_method']==1){
            echo 'ck';
        }else{
            Cart::destroy();//xoa gio hang ve rong
            $cate_product = DB::table('tbl_category_product')->where('category_status','0')->get();
            $all_product = DB::table('tbl_product')->where('product_status','0')->orderby('product_id','desc')->get();

            return view('shop.components.cash');
        }
    }

    public function manage_order(){
        $all_order = DB::table('tbl_order')
            ->join('tbl_customer','tbl_customer.customer_id','=','tbl_order.customer_id')
            ->select('tbl_order.*','tbl_customer.customer_name')
            ->orderby('tbl_order.order_id','desc')->get();
        $manageer_order = view('admin.manage_order')->with('all_order', $all_order);
        return view('admin_layout')->with('admin.manage_order', $manageer_order);
    }
}
