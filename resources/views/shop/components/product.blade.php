@extends('shop.shop')

@section('content')
<section class="breadcrumb_section text-uppercase deco_wrap" style="background-image: url({{asset('public/frontend/images/breadcrumb/breadcrumb_bg_01.jpg')}});">
    <div class="container">
        @foreach($category_name as $key => $name)
        <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">{{$name->category_name}}</h1>
        <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
            <li><a href="{{URL::to('/trang-chu')}}"><i class="fas fa-home"></i>trang chủ</a></li>
            <li>{{$name->category_name}}</li>
        </ul>
        @endforeach
    </div>
</section>
<!-- blog area start -->
<div class="shop_section pt-120 pb-105">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="shop-filter-wrapper d-flex justify-content-between align-items-center mb-30 wow fadeInUp" data-wow-delay=".1s">
                    <div class="col-xl-9 col-lg-6 col-md-6">
                        <div class="sf-left">
                            <div class="show-text">
                                <span class="d-inline-flex me-3">Lọc giá: </span>
                                <form>
                                    @csrf
                                    <div class="form-check d-inline-flex me-3">
                                        <input class="form-check-input" type="radio" id="sort_price" name="option1" value="{{Request::url()}}?sort_price=duoi_500">
                                        <label class="form-check-label">Dưới 500K</label>
                                    </div>
                                    <div class="form-check d-inline-flex me-3">
                                        <input class="form-check-input" type="radio" id="sort_price1" name="option1" value="{{Request::url()}}?sort_price=500_1trieu">
                                        <label class="form-check-label">Từ 500K - 1 triệu</label>
                                    </div>
                                    <div class="form-check d-inline-flex me-3">
                                        <input class="form-check-input" type="radio" id="sort_price2" name="option1" value="{{Request::url()}}?sort_price=1trieu_2trieu">
                                        <label class="form-check-label">Từ 1 triệu - 2 triệu</label>
                                    </div>
                                    <div class="form-check d-inline-flex me-3">
                                        <input class="form-check-input" type="radio" id="sort_price3" name="option1" value="{{Request::url()}}?sort_price=tren_2trieu">
                                        <label class="form-check-label">Trên 2 triệu</label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="sf-right justify-content-end align-items-center">
                            <div class="sort-wrapper ml-45">
                                <form>
                                    @csrf
                                    <select name="sort" id="sort">
                                        <option value="{{Request::url()}}?sort_by=name">Mặc định</option>
                                        <option value="{{Request::url()}}?sort_by=tang_dan">Xếp theo giá tăng dần</option>
                                        <option value="{{Request::url()}}?sort_by=giam_dan">Xếp theo giá giảm dần</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-8">
                <div class="tab-content wow fadeInUp" data-wow-delay=".1s" id="shop-tabContent">
                    <div class="tab-pane fade show mt-none-30 active" id="shop-tab-1" role="tabpanel" aria-labelledby="shop-tab-1-tab">
                        <div class="row">
                            <?php
                            $i=0;
                            ?>
                            @foreach($category_by_id as $key => $product)
                            @if($product->product_status==1)
                                        <?php
                                        $i++;
                                        ?>
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
                            @endif
                            @endforeach
                            @if($i==0)
                                <div class="text-center pt-120">
                                    <p>Không có sản phẩm nào!</p>
                                </div>

                                @endif
                        </div>
                    </div>
                </div>
                <div class="cafena-pagination mt-60">
                    {{$category_by_id->links('pagination.default')}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog area end -->
@endsection
