@extends('admin_layout')
@section('admin_content')
    <div class="row">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông tin người mua
                </div>
                <div class="table-responsive">
                    <?php
                    $message = Session::get('message');
                    if ($message){
                        echo '<span class="text-alert text-danger justify-content-center text-center">'.$message.'</span>';
                        Session::put('message', null);
                    }
                    ?>
                    <table class="table table-striped b-t b-light">
                        <thead>
                        <tr>
                            <th>Tên nguoi dat</th>
                            <th>SDT</th>
                            <th>Email</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$customer->customer_name}}</td>
                                <td>{{$customer->customer_phone}}</td>
                                <td>{{$customer->customer_email}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>

        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Thông tin vận chuyển
                </div>
                <div class="table-responsive">
                    <?php
                    $message = Session::get('message');
                    if ($message){
                        echo '<span class="text-alert text-danger justify-content-center text-center">'.$message.'</span>';
                        Session::put('message', null);
                    }
                    ?>
                    <table class="table table-striped b-t b-light">
                        <thead>
                        <tr>
                            <th>Tên nguoi nhan hang</th>
                            <th>Dia chi</th>
                            <th>SDT</th>
                            <th>Ghi chu</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$shipping->shipping_name}}</td>
                            <td>{{$shipping->shipping_address}}</td>
                            <td>{{$shipping->shipping_phone}}</td>
                            <td>{{$shipping->shipping_desc}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <br>

        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Chi tiết đơn hàng
                </div>
                <div class="table-responsive">
                    <?php
                    $message = Session::get('message');
                    if ($message){
                        echo '<span class="text-alert text-danger justify-content-center text-center">'.$message.'</span>';
                        Session::put('message', null);
                    }
                    ?>
                    <table class="table table-striped b-t b-light">
                        <thead>
                        <tr>
                            <th>STT</th>
                            <th>Ten sp</th>
                            <th>SL</th>
                            <th>Gia</th>
                            <th>Tong tien</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i=0;
                        $total = 0;
                        ?>

                        @foreach($order_details_product as $key => $details)
                            <?php
                            $i++;
                            $subtotal = $details->product_price*$details->product_sales_quantity;
                            $total += $subtotal;
                            ?>
                        <tr>
                            <td>{{$i}}</td>
                            <td>{{$details->product_name}}</td>
                            <td>{{$details->product_sales_quantity}}</td>
                            <td>{{number_format($details->product_price)}}đ</td>
                            <td>{{number_format($subtotal)}}đ</td>
                        </tr>
                        @endforeach
                        <tr>
                            <td>Tổng đơn hàng: {{number_format($total)}}đ</td>
                        </tr>
                        </tbody>
                    </table>
                    <a href="{{url('/print-order/'.$details->order_code)}}">In don hang</a>
                </div>
            </div>
        </div>
    </div>
@endsection
