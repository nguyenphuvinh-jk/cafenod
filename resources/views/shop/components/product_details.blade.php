@extends('shop.shop')


@section('content')
    <section class="breadcrumb_section text-uppercase deco_wrap" style="background-image: url({{asset('public/frontend/images/breadcrumb/breadcrumb_bg_01.jpg')}});">
        <div class="container">
            <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">chi tiết sản phẩm</h1>
            <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
                <li><a href="{{URL::to('/trang-chu')}}"><i class="fas fa-home"></i>trang chủ</a></li>
                <li>cửa hàng cafe</li>
            </ul>
        </div>
    </section>

    @foreach($details_product as $key => $value)
    <!-- details_section - end
    ================================================== -->
    <section class="details_section shop_details sec_ptb_120 bg_default_gray">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-md-center justify-content-sm-center">
                <div class="col-lg-6 col-md-7">
                    <div class="details_image_wrap wow fadeInUp" data-wow-delay=".1s">
                        <img src="{{URL::to('/public/upload/product/'.$value->product_image)}}" class="space_img img_fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-6 col-md-7">
                    <div class="details_content wow fadeInUp" data-wow-delay=".2s">
                        <div class="details_flex_title">
                            <h2 class="details_title text-uppercase">{{$value->product_name}}</h2>
                        </div>
                        <div class="text-uppercase">
                            <span class="badge bg-secondary">{{$value->category_name}}</span>
                        </div>
                        <h5 class="mt-2 mb-2">Mô tả: Cà Phê Hạt Rang Mộc Trung Nguyên Legend Success 1 340g</h5>
                        <div class="details_price">
                            <span class="price_text"><del>{{number_format($value->product_price_old).'đ'}}</del> /
                                <strong class="price_text_1">{{number_format($value->product_price).'đ'}}
                                    <span class="text-uppercase badge bg-danger text-center align-items-center justify-content-center ">33,33% giảm</span>
                                </strong>
                            </span>
                        </div>
                        <div class="delivery mb-2">
                            <i class="fas fa-truck"></i>
                            Miễn phí vẫn chuyển toàn quốc
                        </div>
                        <form action="{{URL::to('/save-cart')}}" method="post">
                            @csrf
                        <ul class="btns_group ul_li">
                            <li>
                                <div class="quantity_input quantity_boxed">
                                    <h4 class="quantity_title text-uppercase">Số lượng:</h4>
                                    <input name="qty" type="number" value="1" min="1">
                                    <input name="product_id_hidden" type="hidden" value="{{$value->product_id}}" >
                                </div>
                            </li>
                            <li><button name="add-to-cart" class="btn btn_secondary text-uppercase ms-2 add-to-cart" type="submit">Thêm vào giỏ hàng</button></li>
                        </ul>
                        </form>
                        <div class="details_wishlist_btn">
                        </div>
                        <div class="details_share_links">
                            <h4 class="list_title"><i class="fas fa-share"></i> Chia sẻ</h4>
                            <ul class="social_links social_icons ul_li">
                                <li><a href="#!"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#!"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#!"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#!"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="image_similar_products wow fadeInUp" data-wow-delay=".1s">
                <div class="row ">
                    <h6 class="title_products">Ảnh sản phẩm</h6>
                    @foreach($gallery as $key => $gal)
                    <div class="col-3">
                        <img class="img-fluid" src="{{asset('public/upload/gallery/'.$gal->gallery_image)}}" alt="{{$gal->gallery_name}}">
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="product_description_wrap wow fadeInUp" data-wow-delay=".1s">
                <div class="row">
                    <h6 class="title_products">Mô tả sản phẩm</h6>
                    <pre>{{$value->product_desc}}</pre>
                </div>
            </div>
        </div>
    </section>
    <!-- details_section - end
    ================================================== -->
    @endforeach
@endsection

{{--@section('script')
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>
@endsection--}}
