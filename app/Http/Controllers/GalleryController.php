<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Product;
use App\Gallery;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class GalleryController extends Controller
{
    public function add_gallery($product_id){
        $pro_id = $product_id;
        return view('admin.add_gallery')->with(compact('pro_id'));
    }

    public function insert_gallery(Request $request, $pro_id){
        $get_iamge = $request->file('file');
        if ($get_iamge){
            foreach ($get_iamge as $image){
                $get_name_image = $image->getClientOriginalName();
                $name_image = current(explode('.', $get_name_image));
                $new_image = $name_image.rand(0,99).'.'.$image->getClientOriginalExtension();
                $image->move('public/upload/gallery', $new_image);
                $gallery = new Gallery();
                $gallery->gallery_name = $new_image;
                $gallery->gallery_image = $new_image;
                $gallery->product_id = $pro_id;
                $gallery->save();
            }
        }

        Session::flash('message','Thêm ảnh thành công!');
        return redirect()->back();
    }

    public function delete_gallery(Request $request){
        $gal_id = $request->gal_id;
        $gallery = Gallery::find($gal_id);
        unlink('public/upload/gallery/'.$gallery->gallery_image);
        $gallery->delete();
    }

    public function update_gallery(Request $request){
        $gal_id = $request->gal_id;
        $gal_text = $request->gal_text;
        $gallery = Gallery::find($gal_id);
        $gallery->gallery_name = $gal_text;
        $gallery->save();
    }

    public function update_image_gallery(Request $request){
        $get_iamge = $request->file('file');
        $gal_id = $request->gal_id;
        if ($get_iamge){
            $get_name_image = $get_iamge->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_iamge->getClientOriginalExtension();
            $get_iamge->move('public/upload/gallery', $new_image);
            $gallery = Gallery::find($gal_id);
            unlink('public/upload/gallery/'.$gallery->gallery_image);
            $gallery->gallery_image = $new_image;

            $gallery->save();
        }
    }

    public function select_gallery(Request $request){
        $product_id = $request->pro_id;
        $gallery = Gallery::where('product_id',$product_id)->get();
        $gallery_count = $gallery->count();

        $output = '
<form>
'.csrf_field().'
        <table class="table table-bordered table-striped">
                                                <thead>
                                                <tr>
                                                    <th>No.</th>
                                                    <th>Tên hình ảnh</th>
                                                    <th>Hình ảnh</th>
                                                    <th>Xoá</th>
                                                </tr>
                                                </thead>
                                                <tbody>
        ';

        if ($gallery_count>0){
            $i=0;
            foreach ($gallery as $key => $gal){
                $i++;
                $output .='
                    <tr>
                    <td>'.$i.'</td>
                    <td contenteditable class="edit_image_name" data-gal_id="'.$gal->gallery_id.'">'.$gal->gallery_name.'</td>
                    <td>
                    <img class="center-block" width="20%" src="'.url('public/upload/gallery/'.$gal->gallery_image).'">
                    <input type="file" class="file_image center-block" style="width: 40%" data-gal_id="'.$gal->gallery_id.'" id="file-'.$gal->gallery_id.'" name="file" accept="image/*">
                    </td>
                    <td>
                    <button type="button" data-gal_id="'.$gal->gallery_id.'" class="btn btn-xs btn-danger delete-galery">Xóa</button>
</td>
</tr>
                ';
            }
        }else{
            $output .='
                    <tr>
                    <td colspan="4">Chưa có ảnh liên quan</td>
</tr>
</tbody>
</table>
</form>
                ';
        }

        echo $output;
    }
}
