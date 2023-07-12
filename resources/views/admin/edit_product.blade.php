@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật sản phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                    @include('components.errors')
                    @foreach($edit_product as $key => $pro)
                    <form action="{{ URL::to('/update-product/'.$pro->product_id) }}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" value="{{$pro->product_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Đường dẫn sản phẩm</label>
                            <input type="text" name="slug_product" class="form-control" id="exampleInputEmail1" value="{{$pro->product_name}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm mới</label>
                            <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" value="{{$pro->product_price}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm cũ</label>
                            <input type="text" name="product_price_old" class="form-control" id="exampleInputEmail1" value="{{$pro->product_price_old}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                            <img src="{{URL::to('public/upload/product/'.$pro->product_image)}}" height="100px" width="100px">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea type="password" style="resize: none;" rows="5" name="product_desc" class="form-control" id="exampleInputPassword1">{{$pro->product_desc}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                            <textarea id="editor3" type="password" style="resize: none;" rows="5" name="product_content" class="form-control" id="exampleInputPassword1">{{$pro->product_content}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                            <select name="cate_product" class="form-control input-sm m-bot15">
                                @foreach($cate_product as $key => $cate)
                                @if($cate->category_id==$pro->category_id)
                                <option selected value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @else
                                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="0" {{$pro->product_status == 0? 'selected': ''}}>Ẩn</option>
                                <option value="1" {{$pro->product_status == 1? 'selected': ''}}>Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="add_brand_product" class="btn btn-info">Cập nhật</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
</div>
@endsection

@section('footerSection')
<script src="//cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor3');
</script>
@endsection