@extends('shop.shop')

@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/minh-style.css')}}">
@endsection

@section('content')
    <section class="breadcrumb_section text-uppercase deco_wrap" style="background-image: url({{asset('public/frontend/images/breadcrumb/breadcrumb_bg_01.jpg')}});">
        <div class="container">
            <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">giỏ hàng</h1>
            <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
                <li><a href="{{URL::to('/trang-chu')}}"><i class="fas fa-home"></i>trang chủ</a></li>
                <li>giỏ hàng</li>
            </ul>
        </div>
    </section>
    <!-- cart area start -->
    <div class="cart-area pt-120 pb-120">
        <div class="container wow fadeInUp" data-wow-delay=".1s">
            <div class="row">
                <div class="col-xl-12">
                    <div class="cart-wrapper">
                        <div class="table-content table-responsive">
                            <?php
                            $content = Cart::content();
                            ?>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th class="product-thumbnail">Ảnh sản phẩm</th>
                                    <th class="cart-product-name">Tên sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Tổng tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($content as $value_content)
                                <tr>
                                    <td class="product-thumbnail">
                                        <a href="#" class="img">
                                            <img src="{{URL::to('/public/upload/product/'.$value_content->options->image)}}" alt=" ">
                                        </a>
                                        <a href="{{URL::to('/delete-to-cart/'.$value_content->rowId)}}" class="product-remove"><i class="fal fa-times"></i></a>
                                    </td>
                                    <td class="product-name"><a href="#">{{$value_content->name}}</a></td>
                                    <td class="product-price"><span class="amount">{{number_format($value_content->price).'đ'}}</span></td>
                                    <td class="product-quantity">
                                        <form action="{{URL::to('/update-cart-quantity')}}" method="post">
                                            @csrf
                                        <input type="number" value="{{$value_content->qty}}" min="1" name="cart_quantity">
                                        <input type="hidden" value="{{$value_content->rowId}}" name="rowId_cart">
                                        <input type="submit" value="Cap nhat" name="update_qty" class="bg-white border border-2">
                                        </form>
                                    </td>
                                    <td class="product-subtotal"><span class="amount">
                                            <?php
                                                $subtotal = $value_content->price * $value_content->qty;
                                            echo number_format($subtotal).'đ';
                                            ?>
                                        </span></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-xl-3 col-lg-7">
                    <div class="cart-total mt-100 m-lg-5">
                        <h2 class="title text-uppercase">Tổng tiền</h2>
                        <div class="ct-sub">
                            <span>Tổng tiền</span>
                            <span>{{Cart::pricetotal(0).'đ'}}</span>
                        </div>
                        <div class="ct-sub">
                            <span>Phí vận chuyển</span>
                            <span>{{Cart::tax(0).'đ'}}</span>
                        </div>
                        <div class="ct-sub ct-sub__total">
                            <span>Thanh toán</span>
                            <span>{{Cart::total(0).'đ'}}</span>

                        </div>
                        <?php
                        $customer_id = Session::get('customer_id');
                        if ($customer_id!=NULL){
                        ?>
                        <a href="{{URL::to('/checkout')}}" class="site-btn">Thanh toán ngay</a>
                        <?php
                        }else{
                        ?>
                        <a href="{{URL::to('/dang-nhap')}}" class="site-btn">Thanh toán ngay</a>
                        <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart area end -->
@endsection
