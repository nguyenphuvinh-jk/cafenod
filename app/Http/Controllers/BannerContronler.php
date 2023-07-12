<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use File;
use App\Banner;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class BannerContronler extends Controller
{
    public function all_banner(){
        $all_banner = Banner::orderBy('banner_id','DESC')->get();
        return view('admin.list_banner')->with(compact('all_banner'));
    }

    public function add_banner(){
        return view('admin.add_banner');
    }

    public function insert_banner(Request $request){

        $data = $request->all();
        $get_image = $request->file('banner_image');

        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/upload/banner', $new_image);

            $banner = new Banner();
            $banner->banner_name = $data['banner_name'];
            $banner->banner_image = $new_image;
            $banner->banner_status = $data['banner_status'];
            $banner->save();
            Session::put('message','Thêm banner thành công');
            return Redirect::to('add-banner');
        }else{
            Session::put('message','Làm ơn thêm hình ảnh');
            return Redirect::to('add-banner');
        }

    }
    public function delete_banner(Request $request, $banner_id){
        $banner = banner::find($banner_id);
        $banner->delete();
        Session::put('message','Xóa banner thành công');
        return redirect()->back();

    }
}
