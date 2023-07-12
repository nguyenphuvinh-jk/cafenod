@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm banner
                </header>
                <?php
                $message = Session::get('message');
                if($message){
                    echo '<span class="text-alert text-red" style="color: red">'.$message.'</span>';
                    Session::put('message',null);
                }
                ?>
                <div class="panel-body">
                    <div class="position-center">
                        @include('components.errors')
                        <form action="{{ URL::to('/insert-banner') }}" method="post" role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên banner</label>
                                <input type="text" name="banner_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ảnh banner</label>
                                <input type="file" name="banner_image" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Trạng thái</label>
                                <select name="banner_status" class="form-control input-sm m-bot15">
                                    <option value="0">Ẩn</option>
                                    <option value="1">Slider</option>
                                    <option value="2">Banner</option>
                                </select>
                            </div>
                            <button type="submit" name="add_banner" class="btn btn-info">Thêm</button>
                        </form>
                    </div>
                </div>
            </section>

        </div>
    </div>
@endsection
