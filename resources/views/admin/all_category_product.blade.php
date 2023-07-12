@extends('admin_layout')

@section('headSection')
<link href="{{ asset('public/backend/css/datatables.min.css') }}" rel='stylesheet' type='text/css' />
@endsection

@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content">

    <!-- Main content -->
    <section class="panel">
        <header class="panel-heading">Danh mục sản phẩm</header>

        <div class="row panel-body">
            <div class="col-md-12">
                <div class="box" style="border-top: 1px solid #000; padding-top: 1rem">
                    <div class="box-body">
                        @include('components.errors')
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tên danh mục</th>
                                    <th>Thuộc danh mục</th>
                                    <th>Đường dẫn</th>
                                    <th>Trạng thái</th>
                                    <th>Cập nhật</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_category_product as $key => $cate_pro)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{ $cate_pro->category_name }}</td>
                                    <td>
                                        @if($cate_pro->category_parent_id==0)
                                        <p style="color: red">Danh muc cha</p>
                                        @else
                                        @foreach($all_category_product as $key => $cate_sub_pro)
                                        @if($cate_sub_pro->category_id==$cate_pro->category_parent_id)
                                        <p style="color: #1d2124">{{$cate_sub_pro->category_name}}</p>
                                        @endif
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>{{ $cate_pro->slug_category_product }}</td>
                                    <td>{{$cate_pro->category_status==1 ? 'Hiển thị': 'Ẩn'}}</td>
                                    <td>
                                        <a href="{{URL::to('/edit-category-product/'.$cate_pro->category_id)}}">
                                            <i style="font-size: 20px;" class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a onclick="return confirm('Có chắc muốn xoá chưa?')" href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}">
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