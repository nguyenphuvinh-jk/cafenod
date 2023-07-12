
    <!-- backtotop - start -->
    <div class="backtotop">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- backtotop - end -->

    <div class="top_header fixed-top">
        <div class="content_wrap">
            <div class="container maxw_1560">
                <div class="row align-items-center">
                    <div class="col-lg-12 col-md-12 col-12">
                        <ul class="content_top ul_li text-center align-items-center justify-content-center">
                            <li>
                                <i class="fas fa-phone-volume"></i>
                                08777.164.39
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                484 Lạch Tray, HP
                            </li>

                            <?php
                            $customer_id = Session::get('customer_id');
                            $shipping_id = Session::get('shipping_id');
                            if ($customer_id!=NULL&&$shipping_id==NULL){
                            ?>
                            <li>
                                <a href="{{URL::to('/checkout')}}" class="text-white">Thanh toán</a>
                            </li>
                            <?php
                            }elseif($customer_id!=NULL&&$shipping_id!=NULL){
                            ?>
                            <li>
                                <a href="{{URL::to('/payment')}}" class="text-white">Thanh toán</a>
                            </li>
                            <?php
                            }else{
                            ?>
                            <li>
                                <a href="{{URL::to('/dang-nhap')}}" class="text-white">Thanh toán</a>
                            </li>
                            <?php
                            }
                            ?>

                            <?php
                            $customer_id = Session::get('customer_id');
                            if ($customer_id!=NULL){
                            ?>
                            <li>
                                <a href="{{URL::to('/logout-checkout')}}" class="text-white">Đăng xuất</a>
                            </li>
                            <?php
                            }else{
                            ?>
                            <li>
                                <a href="{{URL::to('/dang-nhap')}}" class="text-white">Đăng nhập</a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- header_section - start
    ================================================== -->
    <header class="header_section fixed-top ">
        <div class="content_wrap">
            <div class="container maxw_1560 ">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-6 col-6">
                        <div class="brand_logo">
                            <a class="brand_link ms-3" href="{{URL::to('/trang-chu')}}">
                                <img src="{{asset('public/frontend/images/logo/logo_white_1x.png')}}"
                                     srcset="{{asset('public/frontend/images/logo/logo_white_2x.png')}} 2x" alt="LOGO CAFENOD">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-6 col-6">
                        <nav class="main_menu navbar navbar-expand-lg">
                            <button class="mobile_menu_btn navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_menu_dropdown" data-bs-target="#main_menu_dropdown_1" data-bs-target="#main_menu_dropdown_2" aria-controls="main_menu_dropdown" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"><i class="fal fa-bars"></i></span>
                            </button>
                            <div class="main_menu_inner collapse navbar-collapse" id="main_menu_dropdown">
                                <ul class="main_menu_list ul_li text-uppercase ">
                                @foreach(App\Category::with('categoryChildren')->where('category_parent_id',0)->where('category_status',1)->get() as $item)
                                        <li class="dropdown">
                                            @if($item->categoryChildren->count()>0)
                                                <a class="nav-link" href="{{URL::to('/'.$item->slug_category_product)}}" role="button" data-bs-toggle="dropdown">
                                                    {{ $item->category_name }}
                                                </a>

                                                <ul class="submenu dropdown-menu" >
                                                    @foreach($item->categoryChildren as $subMenu)
                                                        <li><a href="{{URL::to('/'.$item->slug_category_product.'/'.$subMenu->slug_category_product)}}">{{$subMenu->category_name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <a class="nav-link" href="{{URL::to('/'.$item->slug_category_product)}}" role="button">
                                                    {{ $item->category_name }}
                                                </a>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                            <ul class="header_btns_group ul_li_right">
                                <li>
                                    <button type="button" class="main_search_btn" data-bs-toggle="collapse" data-bs-target="#main_search_collapse" >
                                        <i class="fal fa-search"></i>
                                    </button>
                                </li>
                                <li>
                                    <a type="button" class="cart_btn" href="{{URL::to('/gio-hang')}}">
                                        <i class="fal fa-shopping-bag"></i>
                                        <small class="cart_counter">2</small>
                                    </a>
                                </li>

                                <?php
                                $customer_id = Session::get('customer_id');
                                $shipping_id = Session::get('shipping_id');
                                if ($customer_id!=NULL&&$shipping_id==NULL){
                                ?>
                                <li>
                                    <a type="button" class="cart_btn hiddened" href="{{URL::to('/checkout')}}">
                                        THANH TOÁN
                                    </a>
                                </li>
                                <?php
                                }elseif($customer_id!=NULL&&$shipping_id!=NULL){
                                ?>
                                <li>
                                    <a type="button" class="cart_btn hiddened" href="{{URL::to('/payment')}}">
                                        THANH TOÁN
                                    </a>
                                </li>
                                <?php
                                }else{
                                ?>
                                <li>
                                    <a type="button" class="cart_btn hiddened" href="{{URL::to('/dang-nhap')}}">
                                        THANH TOÁN
                                    </a>
                                </li>
                                <?php
                                }
                                ?>

                                <?php
                                $customer_id = Session::get('customer_id');
                                if ($customer_id!=NULL){
                                ?>
                                <li>
                                    <a type="button" class="cart_btn hiddened me-3" href="{{URL::to('/logout-checkout')}}">
                                        ĐĂNG XUẤT
                                    </a>
                                </li>
                                <?php
                                }else{
                                ?>
                                <li>
                                    <a type="button" class="cart_btn hiddened me-3" href="{{URL::to('/dang-nhap')}}">
                                        ĐĂNG NHẬP
                                    </a>
                                </li>
                                <?php
                                }
                                ?>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- collapse search - start -->
        <div class="main_search_collapse collapse" id="main_search_collapse">
            <div class="main_search_form card">
                <div class="container maxw_1560">
                    <form action="#">
                        <div class="form_item">
                            <input type="search" name="search" placeholder="Tìm kiếm...">
                            <button type="submit" class="submit_btn"><i class="fal fa-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- collapse search - end -->
    </header>
    <!-- header_section - end
    ================================================== -->
