@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm sản phẩm
            </header>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert text-danger justify-content-center text-center">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>
            <div class="panel-body">
                <div class="position-center">
                    @include('components.errors')
                    <form action="{{ URL::to('/save-product') }}" method="post" role="form" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="tên product">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Đường dẫn sản phẩm</label>
                            <input type="text" name="slug_product" class="form-control" id="exampleInputEmail1" placeholder="slug product">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                            <input type="text" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="giá product">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phẩm cũ</label>
                            <input type="text" name="product_price_old" class="form-control" id="exampleInputEmail1" placeholder="giá product">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                            <textarea type="password" style="resize: none;" rows="5" name="product_desc" class="form-control" id="exampleInputPassword1" placeholder="Mô tả product"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                            <textarea id="editor2" type="password" style="resize: none;" rows="5" name="product_content" class="form-control" id="exampleInputPassword1" placeholder="Mô tả product"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                            <select name="cate_product" class="form-control input-sm m-bot15">
                                @foreach($cate_product as $key => $cate)
                                <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái</label>
                            <select name="product_status" class="form-control input-sm m-bot15">
                                <option value="1">Hiển thị</option>
                                <option value="0">Ẩn</option>
                            </select>
                        </div>
                        <button type="submit" name="add_brand_product" class="btn btn-info">Thêm</button>
                    </form>
                </div>
            </div>
        </section>

    </div>
</div>
@endsection

@section('footerSection')
<script src="//cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
<script>
    CKEDITOR.replace('editor2');
</script>

@endsection