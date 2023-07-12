@extends('shop.shop')

@section('stylesheet')
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/minh-style.css')}}">
@endsection

@section('content')
    <section class="breadcrumb_section text-uppercase deco_wrap" style="background-image: url({{asset('public/frontend/images/breadcrumb/breadcrumb_bg_01.jpg')}});">
        <div class="container">
            <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">đặt hàng thành công</h1>
            <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
                <li><a href="{{URL::to('/trang-chu')}}"><i class="fas fa-home"></i>trang chủ</a></li>
                <li>thanh toán</li>
            </ul>
        </div>
    </section>
    <div class="checkout-area m-5">
        <div class="container wow fadeInUp" data-wow-delay=".1s">
            <div class="row ">
                <div class="col-xl-12">
                    <div class="cart-wrapper checkout-wrapper">
                        <h5 class="text-uppercase">cảm ơn quý khách đã đặt hàng!</h5>
                        <p>Lưu ý:</p>
                        <p>Đơn hàng sẽ được gửi đến quý khách trong 3-5 ngày nữa quý khách nên để ý điện thoại để CAFENOD được phục vụ một cách nhanh nhất.</p>
                        <p>Khi nhận được hàng quý khách nên kiểm tra tên đơn hàng, mã vận đơn, người gửi ... để tránh sai xót đáng tiếc xảy ra.</p>
                        <p>Để đổi trả đơn hàng được áp dụng sau khi quý khách nhận được hàng không quá 3 ngày. Sau 3 ngày quý khách hoàn toàn chịu trách nhiệm về đơn hàng của mình. Mọi thồn tin liên quan đến việc đổi trả vui lòng liên hệ với chúng tôi thông qua ....</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
