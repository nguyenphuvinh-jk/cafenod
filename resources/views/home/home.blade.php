<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CAFENOD - Coffee shop</title>
    <link rel="shortcut icon" href="{{asset('public/frontend/images/logo/favourite_icon.png')}}">

    @include('components.css')
    <!-- owl carousel - css include -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/owl.theme.default.min.css')}}">

</head>
@include('components.header')

<body>

    <!--body-main-section-->
    <main>
        @include('home.components.slider')
        <!-- feature_primary_section - start
        ================================================== -->
        <section class="feature_primary_section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="feature_primary box_style justify-content-center align-items-center wow fadeInUp" data-wow-delay=".1s">
                            <div class="item_icon">
                                <img src="{{asset('public/frontend/images/feature/icon_02.png')}}" alt="icon_not_found">
                            </div>
                            <h3 class="item_title text-uppercase">chất lượng</h3>
                            <p class="mb-0 text-center align-content-center align-items-center">
                                Chất lượng cà phê đạt chuẩn toàn cầu
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="feature_primary box_style wow fadeInUp" data-wow-delay=".2s">
                            <div class="item_icon">
                                <img src="{{asset('public/frontend/images/feature/delivery.png')}}" alt="icon_not_found">
                            </div>
                            <h3 class="item_title text-uppercase">giao hàng</h3>
                            <p class="mb-0 text-center align-content-center align-items-center">
                                Giao hàng toàn quốc bảo đảm
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="feature_primary box_style wow fadeInUp" data-wow-delay=".3s">
                            <div class="item_icon">
                                <img src="{{asset('public/frontend/images/feature/give-money.png')}}" alt="icon_not_found">
                            </div>
                            <h3 class="item_title text-uppercase">thanh toán</h3>
                            <p class="mb-0 text-center align-content-center align-items-center">
                                Thanh toán an toàn tuyệt đối
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="feature_primary box_style wow fadeInUp" data-wow-delay=".4s">
                            <div class="item_icon">
                                <img src="{{asset('public/frontend/images/feature/best-price.png')}}" alt="icon_not_found">
                            </div>
                            <h3 class="item_title text-uppercase">giá cả</h3>
                            <p class="mb-0 text-center align-content-center align-items-center">
                                Giá tốt dành cho đối tác mua số lượng lớn
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature_primary_section - end
    ================================================== -->

        <!-- about_section - start
    ================================================== -->
        <section class="about_section pt-120 pb-105">
            <div class="container">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 col-md-6 order-last">
                        <div class="video_ad wow fadeInRight" data-wow-delay=".1s">
                            <iframe
                            width="560"
                            height="315"
                            src="https://www.youtube-nocookie.com/embed/TyclnS01qpE"
                            title="YouTube video player"
                            frameborder="0"
                            allow="autoplay; encrypted-media;"
                            allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="about_content wow fadeInUp" data-wow-delay=".2s">
                            <div class="section_title text-uppercase">
                                <h2 class="small_title"><i class="fas fa-coffee"></i>giới thiệu </h2>
                                <hr class="line-1" />
                                <h3 class="big_title">
                                    câu chuyện của cafenod
                                </h3>
                            </div>
                            <p>
                                Ra đời vào giữa năm 1996 - NOCAFE là 1 nhà máy cà phê non trẻ của Việt Nam, nhưng đã nhanh chóng tạo dựng được uy tín và trở thành thương hiệu cà phê quen thuộc nhất đối với người tiêu dùng cả trong và ngoài nước.
                                Chỉ trong vòng 10 năm, từ một hãng cà phê nhỏ bé nằm giữa thủ phủ cà phê Việt Nam, CAFENOD đã trỗi dậy thành một tập đoàn hùng mạnh với 6 công ty thành viên: Công ty cổ phần CAFENOD, công ty cổ phần cà phê hòa tan CAFENOD, công ty TNHH cà phê CAFENOD, công ty cổ phần thương mại và dịch vụ G7 và công ty liên doanh Vietnam Global Gateway (VGG)...
                            </p>
                            <ul class="btns_group ul_li ">
                                <li>
                                    <a class="btn btn_primary text-uppercase" href="{{URL::to('/gioi-thieu')}}">Đọc thêm</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about_section - end
    ================================================== -->

        <!-- shop_section - start
    ================================================== -->
        <div class="shop_section pt-120 pb-105">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="section_title text-uppercase wow fadeInUp" data-wow-delay=".1s">
                            <h2 class="small_title"><i class="fas fa-coffee"></i>Sale mỗi ngày </h2>
                            <hr class="line-2" />
                            <h3 class="big_title">
                                hôm nay sale gì?
                            </h3>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <a class="btn btn_border border_white text-uppercase float-end wow fadeInUp" data-wow-delay=".2s" href="{{URL::to('/cua-hang-cafe/cafe-hat')}}">xem thêm</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-8">
                        <div class="tab-content" id="shop-tabContent-1">
                            <div class="tab-pane fade show mt-none-30 active" role="tabpanel">
                                <div id="demo-2" class="carousel slide wow fadeInUp" data-wow-delay=".1s" data-bs-ride="carousel">
                                    <!-- The slideshow/carousel -->
                                    <div class="owl-carousel owl-carousel owl-theme owl-loaded owl-drag">
                                        @foreach($all_product as $product)
                                        <div class="item mt-30">
                                            <div class="pp__item pp__item--2 active text-center pt-20 pb-20">
                                                <div class="pp__thumb pp__thumb--2 mt-35">
                                                    <a class="item_image" href="{{URL::to('/chi-tiet-san-pham/'.$product->slug_product)}}">
                                                        <img src="{{URL::to('public/upload/product/'.$product->product_image)}}" class="space_img" alt="">
                                                    </a>
                                                </div>
                                                <div class="pp__content pp__content--2 mt-25">
                                                    <div class="pp__c-top d-flex align-items-center justify-content-center">
                                                        <div class="pp__cat pp__cat--2">
                                                            <small>{{$product->category_name}}</small>
                                                        </div>
                                                    </div>
                                                    <h4 class="pp__title pp__title--2">
                                                        <a href="{{URL::to('/chi-tiet-san-pham/'.$product->slug_product)}}">{{$product->product_name}}</a>
                                                    </h4>
                                                    <div class="pp__price pp__price--2 d-flex align-items-center justify-content-center">
                                                        <h6 class="label">Giá - </h6>
                                                        <span class="price"> {{number_format($product->product_price).'đ'}} / <span class="regular"><del>{{number_format($product->product_price_old).'đ'}}</del></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- Left and right controls/icons -->
                                    <button class="carousel-control-prev" onclick="owl.trigger('prev.owl.carousel')" type="button" data-bs-target="#demo-3" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </button>
                                    <button class="carousel-control-next" onclick="owl.trigger('next.owl.carousel')" type="button" data-bs-target="#demo-3" data-bs-slide="next">
                                        <span class="carousel-control-next-icon"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- shop_section - end
    ================================================== -->

                <!--banner advertisement - start
    ==================================================-->
                <div class="ad_section ptb-50">
                    <div class="container">
                        <div class="row">
                            @foreach($banner as $key => $ban)
                            <div class="col-md-6 col-lg-6 col-xl-6 ">
                                <div class="advertise_1 wow fadeInLeft" data-wow-delay=".2s">
                                    <a href="#">
                                        <img src="{{URL::to('public/upload/banner/'.$ban->banner_image)}}" alt="{{$ban->banner_name}}" class="default">
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!--banner advertisement - end
    ==================================================-->

                <!--shop_section - start
    ==================================================-->
                <div class="shop_section pt-120 pb-105">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="section_title text-uppercase wow fadeInUp" data-wow-delay=".1s">
                                    <h2 class="small_title "><i class="fas fa-coffee"></i>sản phẩm bán chạy nhất </h2>
                                    <hr class="line-3 " />
                                    <h3 class="big_title ">
                                        rinh ngay hôm nay kẻo mất!
                                    </h3>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <a class="btn btn_border border_white text-uppercase float-end wow fadeInUp" data-wow-delay=".2s" href="{{URL::to('/cua-hang-cafe/cafe-rang-xay')}}">xem thêm</a></div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-8">
                                <div class="tab-content" id="shop-tabContent">
                                    <div class="tab-pane mt-none-30 active wow fadeInUp" data-wow-delay=".1s" id="shop-tab-1">
                                        <div class="row">
                                            @foreach($all_product as $product)
                                            <div class="col-xl-3 col-lg-6 col-md-6 mt-30">
                                                <div class="pp__item pp__item--2 active text-center pt-20 pb-20">
                                                    <div class="pp__thumb pp__thumb--2 mt-35">
                                                        <a class="item_image" href="{{URL::to('/chi-tiet-san-pham/'.$product->slug_product)}}">
                                                            <img src="{{URL::to('public/upload/product/'.$product->product_image)}}" class="space_img" alt="">
                                                        </a>
                                                    </div>
                                                    <div class="pp__content pp__content--2 mt-25">
                                                        <div class="pp__c-top d-flex align-items-center justify-content-center">
                                                            <div class="pp__cat pp__cat--2">
                                                                <small>{{$product->category_name}}</small>
                                                            </div>
                                                        </div>
                                                        <h4 class="pp__title pp__title--2">
                                                            <a href="{{URL::to('/chi-tiet-san-pham/'.$product->slug_product)}}">{{$product->product_name}}</a>
                                                        </h4>
                                                        <div class="pp__price pp__price--2 d-flex align-items-center justify-content-center">
                                                            <h6 class="label">Giá - </h6>
                                                            <span class="price"> {{number_format($product->product_price).'đ'}} / <span class="regular"><del>{{number_format($product->product_price_old).'đ'}}</del></span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--shop_section - end
    ==================================================-->

                <!--product_section - start
    ==================================================-->
                <div class="product_section pt-120 pb-105">
                    <div class="container">
                        <div class="section_title text-uppercase text-center">
                            <h2 class="small_title wow fadeInUp" data-wow-delay=".1s"><i class="fas fa-coffee"></i> cafenod có gì?</h2>
                            <hr class="line-4 mx-auto wow fadeInUp" data-wow-delay=".1s">
                            <h3 class="big_title wow fadeInUp" data-wow-delay=".2s">đại lý cafe lớn nhất miền bắc</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-4 con-xl-6">
                                <div class="products text-center align-items-center align-content-center">
                                    <a href="{{URL::to('/cua-hang-cafe/cafe-hat')}}">
                                    <h3 class="text-white mr-1 wow fadeInUp" data-wow-delay=".3s">CAFE HẠT</h3>
                                        <img src="{{asset('public/frontend/images/products/cafe-hat.png')}}" alt="cafe hat" class="img-fluid circle shadow-lg">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 con-xl-6">
                                <div class="products text-center align-items-center align-content-center">
                                    <a href="{{URL::to('/cua-hang-cafe/cafe-hoa-tan')}}">
                                        <h3 class="text-white mr-2 wow fadeInUp" data-wow-delay=".3s">CAFE HÒA TAN</h3>
                                        <img src="{{asset('public/frontend/images/products/cafe-hoa-tan.png')}}" alt="cafe hat" class="img-fluid circle shadow-lg">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4 con-xl-6">
                                <div class="products text-center align-items-center align-content-center">
                                    <a href="{{URL::to('/cua-hang-cafe/cafe-rang-xay')}}">
                                        <h3 class="text-white mr-3 wow fadeInUp" data-wow-delay=".3s">CAFE RANG XAY</h3>
                                        <img src="{{asset('public/frontend/images/products/cafe-rang-xay.png')}}" alt="cafe hat" class="img-fluid circle shadow-lg">
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--produc_section - end
    ==================================================-->

                <!--product_section - start
    ==================================================-->
                <div class="comment_customer_section pt-120 pb-105">
                    <div class="container">
                        <div class="row">
                            <h3 class="text-uppercase text-center align-content-center wow fadeInUp" data-wow-delay=".1s">khách hàng nói gì về nod</h3>
                            <hr class="line-6 mx-auto wow fadeInUp" data-wow-delay=".1s">
                        </div>
                        <div class="row">
                            <div id="demo-3" class="carousel slide" data-bs-ride="carousel">
                                <!-- The slideshow/carousel -->
                                <div class="carousel-inner">
                                    <div class="col-md-12 wow fadeInUp" data-wow-delay=".3s">
                                        <div class="carousel-item active">
                                            <div class="comments">
                                                <i class="fa fa-comment"></i>
                                                <p>
                                                    Lần đầu trải nghiệm mua hàng tại CAFENOD mọi thứ rất tuyệt vời. Nhân viên tư vấn rất nhiệt tình, sản phẩm đa dạng phong phú nhiều sự lựa chọn. Giao hàng nhanh chóng đặt sáng chiều đã nhận được hàng. Cafe hạt rất thơm, màu rất đẹp. Hương vị thì khỏi bàn. Trải nghiệm cafe tại NOD rất tuyệt vời. Lần sau sẽ ủng hộ tiếp.
                                                </p>
                                                <img src="{{asset('public/frontend/images/products/cafe-hat.png')}}" alt="">
                                                <h6 class="text-uppercase">hoàng thị dung</h6>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="comments">
                                                <i class="fa fa-comment"></i>
                                                <p>
                                                    Chất lượng thực phẩm và dịch vụ rất tốt. Thực đơn phong phú với các món thân thiện với trẻ em cũng như hải sản địa phương và thậm chí cả món khai vị cho những người không thích hải sản. Nơi tuyệt vời! Cảm ơn. Chúng tôi hoàn toàn thích mọi thứ ở đó!
                                                </p>
                                                <img src="{{asset('public/frontend/images/products/cafe-hat.png')}}" alt="">
                                                <h6 class="text-uppercase">nguyễn phú vinh</h6>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="comments">
                                                <i class="fa fa-comment"></i>
                                                <p>
                                                    Lần đầu trải nghiệm mua hàng tại CAFENOD mọi thứ rất tuyệt vời. Nhân viên tư vấn rất nhiệt tình, sản phẩm đa dạng phong phú nhiều sự lựa chọn. Giao hàng nhanh chóng đặt sáng chiều đã nhận được hàng. Cafe hạt rất thơm, màu rất đẹp. Hương vị thì khỏi bàn. Trải nghiệm cafe tại NOD rất tuyệt vời. Lần sau sẽ ủng hộ tiếp.
                                                </p>
                                                <img src="{{asset('public/frontend/images/products/cafe-hat.png')}}" alt="">
                                                <h6 class="text-uppercase">bùi huy uy</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Left and right controls/icons -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#demo-3" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon"></span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#demo-3" data-bs-slide="next">
                                    <span class="carousel-control-next-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--product_section - start
    ==================================================-->

                <!-- blog_section - start
    ================================================== -->
                <section class="blog_section sec_ptb_120">
                    <div class="container">
                        <div class="section_title text-uppercase text-center">
                            <h2 class="small_title wow fadeInUp" data-wow-delay=".1s"><i class="fas fa-coffee"></i> Tin tức và bài viết</h2>
                            <hr class="line-5 mx-auto wow fadeInUp" data-wow-delay=".1s">
                            <h3 class="big_title wow fadeInUp" data-wow-delay=".2s">Tin mới nhất trong ngày</h3>
                        </div>

                        <div class="row equal justify-content-center">
                            @foreach($lastest_posts as $post)
                            <div class="col-md-3 col-sm-6 col-sm-6">
                                <div class="blog_grid wow fadeInUp" data-wow-delay=".1s">
                                    <a class="item_image" href="{{URL::to('/blog/'.$post->slug)}}">
                                        <img src="{{asset('public'.Storage::url($post->image))}}" alt="image_not_found">
                                    </a>
                                    <div class="item_content">
                                        <h3 class="item_title text-uppercase">
                                            <a href="{{URL::to('/blog/'.$post->slug)}}">{{$post->title}}</a>
                                        </h3>
                                        <p>
                                            {{$post->description}}
                                        </p>
                                        <a class="btn_text text-uppercase" href="{{URL::to('/blog/'.$post->slug)}}"><span>Đọc thêm</span> <i class="far fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </section>
                <!-- blog_section - end
    ================================================== -->

    </main>
    <!--body-main-section-->

    @include('components.footer')

    @include('components.js')

    <script src="{{asset('public/frontend/js/owl.carousel.js')}}"></script>
    <script>
        const owl = $('.owl-carousel')
        owl.owlCarousel({
            loop: true,
            margin: 10,
            dots: false,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
</body>

</html>
