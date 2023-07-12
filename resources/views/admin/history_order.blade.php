@extends('admin_layout')

@section('headSection')
<link href="{{ asset('public/backend/css/datatables.min.css') }}" rel='stylesheet' type='text/css' />
@endsection

@section('admin_content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content">

        <!-- Main content -->
        <section class="panel">
            <header class="panel-heading">Quản lý đơn hàng</header>

            <div class="row panel-body">
                <div class="col-md-12">
                    <div class="box" style="border-top: 1px solid #000; padding-top: 1rem">
                        <div class="box-body">
                            @include('components.errors')
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Mã đơn hàng</th>
                                    <th>Thời gian đặt</th>
                                    <th>Tình trạng đơn hàng</th>
                                    <th>Xem chi tiết</th>
                                    <th>Cập nhật</th>
                                    <th>Xóa</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($order as $key => $v_order)
                                    @if($v_order->order_status=='0')
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{ $v_order->order_code }}</td>
                                            <td>{{ $v_order->created_at }}</td>
                                            <td>Đã xử lý</td>
                                            <td>
                                                <a href="{{URL::to('/view-order/'.$v_order->order_code)}}">
                                                    <i style="font-size: 20px;" class="fa fa-solid fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="{{URL::to('/edit-order/'.$v_order->order_code)}}">
                                                    <i style="font-size: 20px;" class="fa fa-pencil-square-o" aria-hidden="false"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a onclick="return confirm('Có chắc muốn xoá chưa?')" href="{{URL::to('/delete-order/'.$v_order->order_code)}}">
                                                    <i style="font-size: 20px;" class="fa fa-trash" aria-hidden="false"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endif
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
