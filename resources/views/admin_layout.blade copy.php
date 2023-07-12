
<!DOCTYPE html>
<head>
    <title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/bootstrap.min.css') }}" >
    <!-- //bootstrap-css -->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <!-- Custom CSS -->
    <link href="{{ asset('public/backend/css/style.css?v=').time() }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('public/backend/css/style-responsive.css') }}" rel="stylesheet"/>
    <!-- font CSS -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/font.css') }}" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('public/backend/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('public/backend/css/morris.css') }}" type="text/css"/>
    <!-- calendar -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/monthly.css') }}">
    <!-- //calendar -->
    <!-- //font-awesome icons -->
    <script src="{{ asset('public/backend/js/jquery2.0.3.min.js') }}"></script>
    <script src="{{ asset('public/backend/js/raphael-min.js') }}"></script>
    <script src="{{ asset('public/backend/js/morris.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/sweetalert.css')}}">

    <link href="{{ asset('public/backend/css/bootstrap3-wysihtml5.min.css') }}" rel='stylesheet' type='text/css' />
    @section('headSection')
    @show
</head>
<body>
<section id="container">
    <!--header start-->
    <header class="header fixed-top clearfix">
        <!--logo start-->
        <div class="brand">
            <a href="{{URL::to('/admin')}}" class="logo">
                ADMIN
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->
        <div class="top-nav clearfix">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <!-- <li>
                    <input type="text" class="form-control search" placeholder=" Search">
                </li> -->
                <!-- user login dropdown start-->
                <!-- <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="{{asset('public/backend/images/2.png')}}">
                        <span class="username">
                            <?php
                            $name = Session::get('admin_name');
                            if ($name){
                                echo $name;
                                Session::put('admin_name', null);
                            }
                            ?>
                        </span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> Đăng xuất</a></li>
                    </ul> -->
                </li>
                <!-- user login dropdown end -->

            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse">
            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">
                    <li>
                        <a class="active" href="{{URL::to('/dashboard')}}">
                            <i class="fa fa-dashboard"></i>
                            <span>Tổng Quan</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Banner</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ URL::to('/add-banner') }}">Thêm banner</a></li>
                            <li><a href="{{ URL::to('/all-banner') }}">Liệt kê banner</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Danh mục sản phẩm</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ URL::to('/add-category-product') }}">Thêm danh mục sản phẩm</a></li>
                            <li><a href="{{ URL::to('/all-category-product') }}">Liệt kê danh mục sản phẩm</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Sản phẩm</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ URL::to('/add-product') }}">Thêm sản phẩm</a></li>
                            <li><a href="{{ URL::to('/all-product') }}">Liệt kê sản phẩm</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Tin tức</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ URL::to('/admin/blog_post') }}">Danh sách bài viết</a></li>
                            <li><a href="{{ URL::to('/admin/blog_tag') }}">Tag bài viết</a></li>
                            <li><a href="{{ URL::to('/admin/blog_category') }}">Danh mục bài viết</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Đơn hàng</span>
                        </a>
                        <ul class="sub">
                            <li><a href="{{ URL::to('/manage-order') }}">Xử lý đơn hàng</a></li>
                            <li><a href="{{ URL::to('/history-order') }}">Lịch sử đơn hàng</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            @yield('admin_content')
        </section>
        <!-- footer -->
        <div class="footer">
            <div class="wthree-copyright">
                <p>© 2022 Visitors. All rights reserved | Design by <a href="http://w3layouts.com">TeamBTL-Web-N4</a></p>
            </div>
        </div>
        <!-- / footer -->
    </section>
    <!--main content end-->
</section>
<script src="{{ asset('public/backend/js/bootstrap.js') }}"></script>
<script src="{{ asset('public/backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
<script src="{{ asset('public/backend/js/scripts.js') }}"></script>
<script src="{{ asset('public/backend/js/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('public/backend/js/jquery.nicescroll.js') }}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{ asset('public/backend/js/flot-chart/excanvas.min.js') }}"></script><![endif]-->
<script src="{{ asset('public/backend/js/jquery.scrollTo.js') }}"></script>
<script src="{{asset('public/frontend/js/sweetalert.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function (){
        load_gallery();

        function load_gallery(){
            var pro_id=$('.pro_id').val();
            var _token = $('input[name="_token"]').val();
            /*alert(pro_id)*/
            $.ajax({
                url:"{{url('/select-gallery')}}",
                method:"POST",
                data:{pro_id:pro_id,_token:_token},
                success:function (data){
                    $('#gallery_load').html(data);
                }
            });
        }

        $('#file').change(function () {
            var error = '';
            var files = $('#file')[0].files;

            if(files.length>4){
                error +='<p>Chọn tối đa 4 ảnh</p>';
            }else if(files.length==''){
                error +='<p>Không đượ bỏ trống ảnh</p>';
            }else if(files.size>2000000){
                error +='<p>File ảnh không được lớn hơn 2MB</p>';
            }

            if (error==''){

            }else {
                $('#file').val('');
                $('#error_gallery').html('<span class="text-danger">'+error+'</span>');
                return false;
            }
        });

        $(document).on('blur', '.edit_image_name', function () {
            var gal_id = $(this).data('gal_id');
            var gal_text = $(this).text();
            var _token = $('input[name="_token"]').val();

            $.ajax({
                url:"{{url('/update-gallery')}}",
                method:"POST",
                data:{gal_id:gal_id,gal_text:gal_text,_token:_token},
                success:function (data){
                    load_gallery();
                    $('#error_gallery').html('<span class="text-danger">Đã cập nhật tên ảnh</span>');
                }
            });
        });

        $(document).on('click', '.delete-galery', function () {
            var gal_id = $(this).data('gal_id');
            var _token = $('input[name="_token"]').val();

            if (confirm('Bạn muốn xóa ảnh này?')) {
                $.ajax({
                    url: "{{url('/delete-gallery')}}",
                    method: "POST",
                    data: {gal_id: gal_id, _token: _token},
                    success: function (data) {
                        load_gallery();
                        $('#error_gallery').html('<span class="text-danger">Xóa ảnh thành công</span>');
                    }
                });
            }
        });

        $(document).on('change', '.file_image', function () {
            var gal_id = $(this).data('gal_id');
            var image = document.getElementById("file-"+gal_id).files[0];

            var form_data = new FormData();
            form_data.append("file", document.getElementById("file-"+gal_id).files[0]);
            form_data.append("gal_id", gal_id);
            $.ajax({
                url:"{{url('/update-image-gallery')}}",
                method:"POST",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: form_data,
                contentType: false,
                cache: false,
                processData: false,
                success:function (data){
                    load_gallery();
                    $('#error_gallery').html('<span class="text-danger">Đã cập nhật hình ảnh</span>');
                }
            });
        });

    });
</script>
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
        jQuery('.small-graph-box').hover(function() {
            jQuery(this).find('.box-button').fadeIn('fast');
        }, function() {
            jQuery(this).find('.box-button').fadeOut('fast');
        });
        jQuery('.small-graph-box .box-close').click(function() {
            jQuery(this).closest('.small-graph-box').fadeOut(200);
            return false;
        });

        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }

        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
            behaveLikeLine: true,
            gridEnabled: false,
            gridLineColor: '#dddddd',
            axes: true,
            resize: true,
            smooth:true,
            pointSize: 0,
            lineWidth: 0,
            fillOpacity:0.85,
            data: [
                {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},

            ],
            lineColors:['#eb6f6f','#926383','#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });


    });
</script>
<script src="{{ asset('public/backend/js/bootstrap3-wysihtml5.all.min.js') }}"></script>
<!-- calendar -->
<script type="text/javascript" src="{{ asset('public/backend/js/monthly.js') }}"></script>
<script type="text/javascript">
    $(window).load( function() {

        $('#mycalendar').monthly({
            mode: 'event',

        });

        $('#mycalendar2').monthly({
            mode: 'picker',
            target: '#mytarget',
            setWidth: '250px',
            startHidden: true,
            showTrigger: '#mytarget',
            stylePast: true,
            disablePast: true
        });

        switch(window.location.protocol) {
            case 'http:':
            case 'https:':
                // running on a server, should be good.
                break;
            case 'file:':
                alert('Just a heads-up, events will not work when run locally.');
        }

    });
</script>

@section('footerSection')
@show
<!-- //calendar -->
</body>
