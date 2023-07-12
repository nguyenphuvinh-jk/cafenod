@extends('admin_layout')

@section('headSection')
<link href="{{ asset('public/backend/css/datatables.min.css') }}" rel='stylesheet' type='text/css' />
@endsection

@section('admin_content')
<!-- Content Wrapper. Contains page content -->
<div class="content">

    <!-- Main content -->
    <section class="panel">
        <header class="panel-heading">Danh sách banner</header>

        <?php
        $message = Session::get('message');
        if ($message) {
            echo '<span class="text-alert text-red" style="color: red">' . $message . '</span>';
            Session::put('message', null);
        }
        ?>
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
                                    <th>Hình ảnh</th>
                                    <th>Trạng thái</th>
                                    <th>Xoá</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_banner as $key => $pro)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{ $pro->banner_name }}</td>
                                    <td><img src="public/upload/banner/{{$pro->banner_image}}" width="100%"></td>
                                    <td>{{$pro->banner_status==0 ? 'Ẩn': 'Hiển thị'}}</td>
                                    <td>
                                        <a onclick="return confirm('Có chắc muốn xoá chưa?')" href="{{URL::to('/delete-banner/'.$pro->banner_id)}}">
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