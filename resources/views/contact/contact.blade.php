<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CAFENOD - Liên hệ</title>
    <link rel="shortcut icon" href="{{asset('public/frontend/images/logo/favourite_icon.png')}}">

    @include('components.css')
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/stylecontact.css')}}">

</head>

<body>

    @include('components.header')
    <main>
        <section class="breadcrumb_section text-uppercase deco_wrap" style="background-image: url({{asset('public/frontend/images/breadcrumb/breadcrumb_bg_01.jpg')}});">
            <div class="container">
                <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">Liên hệ</h1>
                <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
                    <li><a href="{{URL::to('/trang-chu')}}"><i class="fas fa-home"></i>trang chủ</a></li>
                    <li>Liên hệ</li>
                </ul>
            </div>
        </section>

        <!-- form_section - start
    ================================================== -->
        <div class="contact-area sec_ptb_120">
            <div class="container">
                <div class="row single-form g-0 wow fadeInUp" data-wow-delay=".1s">
                    <div class="main_contact_info_wrap">
                        <div class="contact_info_item">
                            <div class="item_icon"><i class="fal fa-envelope"></i></div>
                            <div class="item_content">
                                <h3 class="item_title text-uppercase">Email</h3>
                                <p>cafenod@gmail.com</p>
                                <p>Info@gmail.com</p>
                            </div>
                        </div>
                        <div class="contact_info_item">
                            <div class="item_icon"><i class="fal fa-map-marker-alt"></i></div>
                            <div class="item_content">
                                <h3 class="item_title text-uppercase">địa chỉ</h3>
                                <p>484 Lạch Tray, Đổng Quốc Bình, Lê Chân, Hải Phòng, Việt Nam</p>
                            </div>
                        </div>
                        <div class="contact_info_item">
                            <div class="item_icon"><i class="fal fa-phone"></i></div>
                            <div class="item_content">
                                <h3 class="item_title text-uppercase">SDT</h3>
                                <p>(+84) - 68.7771.6438</p>
                                <p>(+84) - 59.4594.9594</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row single-form g-0 wow fadeInUp" data-wow-delay=".1s">
                    <form action="{{URL::to('/add-contact')}}" method="post">
                        <div class="mb-3 d-flex">
                            <div class="w-50">
                                <label for="exampleInputEmail1" class="form-label">Tên</label>
                                <input style="width: 99%" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="w-50">
                                <label for="exampleInputEmail1" class="form-label">SDT</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="mb-3 d-flex">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input style="width: 99%" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Nội dung</label>
                            <textarea class="form-control" id="exampleInputPassword2"></textarea>
                        </div>
                        <input type="submit" value="Gửi" class="btn btn_border border_y text-uppercase float-end wow fadeInUp" data-wow-delay=".1s">

                    </form>
                </div>
            </div>
        </div>
        <!-- form_section - end
    ================================================== -->

        <!-- map_section - start
    ================================================== -->
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="map-area wow fadeInUp" data-wow-delay=".1s">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14915.454388585717!2d106.6860355286244!3d20.83721387763757!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7a9c2ee478df%3A0x6039ffe1614ede5c!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBIw6BuZyBo4bqjaSBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1666340726298!5m2!1svi!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <!-- map_section - end
    ================================================== -->
    </main>

    @include('components.footer')
    @include('components.js')

</body>

</html>
