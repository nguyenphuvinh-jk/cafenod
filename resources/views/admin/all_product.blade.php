@extends('admin_layout')

@section('headSection')
<link href="{{ asset('public/backend/css/datatables.min.css') }}" rel='stylesheet' type='text/css' />
@endsection

@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content">

    <!-- Main content -->
    <section class="panel">
        <header class="panel-heading">Danh sách sản phẩm</header>

        <div class="row panel-body">
            <div class="col-md-12">
                <div class="box" style="border-top: 1px solid #000; padding-top: 1rem">
                    <div class="box-body">
                        @include('components.errors')
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Ảnh liên quan</th>
                                    <th>Đường dẫn</th>
                                    <th>Hình ảnh</th>
                                    <th>Giá</th>
                                    <th>Giá cũ</th>
                                    <th>Danh mục</th>
                                    <th>Trạng thái</th>
                                    <th>Cập nhật</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_product as $key => $pro)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{ $pro->product_name }}</td>
                                    <td><a href="{{URL::to('/add-gallery/'.$pro->product_id)}}">Thêm ảnh liên quan</a></td>
                                    <td>{{ $pro->slug_product }}</td>
                                    <td><img src="public/upload/product/{{$pro->product_image}}" height="60px" width="60px"></td>
                                    <td>{{ number_format($pro->product_price).'đ' }}</td>
                                    <td>{{ number_format($pro->product_price_old).'đ' }}</td>
                                    <td>{{ $pro->category_name }}</td>
                                    <td>{{$pro->product_status==0 ? 'Ẩn': 'Hiển thị'}}</td>
                                    <td>
                                        <a href="{{URL::to('/edit-product/'.$pro->product_id)}}">
                                            <i style="font-size: 20px;" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Có chắc muốn xoá chưa?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}">
                                            <i style="font-size: 20px;" class="fa fa-trash" aria-hidden="false"></i>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('footerSection')
<script src="{{ asset('public/backend/js/datatables.js') }}"></script>
<script>
    $("#example1").DataTable();
</script>

@endsection
