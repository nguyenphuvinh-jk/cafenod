@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Cập nhật danh mục sản phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                    @include('components.errors')
                    @foreach($edit_category_product as $key => $edit_value)
                    <form action="{{ URL::to('/update-category-product/'.$edit_value->category_id) }}" method="post" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" value="{{ $edit_value->category_name }}" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Đường dẫn</label>
                            <input type="text" value="{{ $edit_value->slug_category_product }}" name="slug_category_product" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả danh mục</label>
                            <textarea type="password" style="resize: none;" rows="5" name="category_product_desc" class="form-control" id="exampleInputPassword1">{{ $edit_value->category_desc }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Thuộc danh mục</label>
                            <select name="category_parent" class="form-control input-sm m-bot15">
                                <option value="0" {{$edit_value->category_parent_id==0? 'selected' : ''}}>---Danh muc cha---</option>
                                @foreach($category as $key => $val)
                                <option value="{{$val->category_id}}" {{$edit_value->category_parent_id==$val->category_id? 'selected' : ''}}>{{$val->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Trạng thái</label>
                            <select name="category_product_status" class="form-control input-sm m-bot15">
                                <option value="0" {{$edit_value->category_status == 0? 'selected': ''}}>Ẩn</option>
                                <option value="1" {{$edit_value->category_status == 1? 'selected': ''}}>Hiển thị</option>
                            </select>
                        </div>
                        <button type="submit" name="update_category_product" class="btn btn-info">Cập nhật</button>
                    </form>
                    @endforeach
                </div>
            </div>
        </section>

    </div>
</div>
@endsection