<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CAFENOD - Bài viết</title>
    <link rel="shortcut icon" href="{{asset('public/frontend/images/logo/favourite_icon.png')}}">

    @include('components.css')
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/blog.css')}}">
</head>

<body>
    @include('components.header')

    <!--body-main-section-->
    <main>
        <!-- breadcrumb_section - start
        ================================================== -->
        <section class="breadcrumb_section text-uppercase deco_wrap" style="background-image: url({{asset('public/frontend/images/breadcrumb/breadcrumb_bg_01.jpg')}});">
            <div class="container">
                <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">Tin tức</h1>
                <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
                    <li><a href="{{URL::to('/trang-chu')}}"><i class="fas fa-home"></i>trang chủ</a></li>
                    @if(!isset($category) && !isset($tag) && !isset($search))
                    <li>Tin tức</li>
                    @elseif(isset($category))
                    <li><a href="{{URL::to('/blog')}}">Tin tức</a></li>
                    <li>{{$category->name}}</li>
                    @elseif(isset($tag))
                    <li><a href="{{URL::to('/blog')}}">Tin tức</a></li>
                    <li>{{$tag->name}}</li>
                    @elseif(isset($search))
                    <li><a href="{{URL::to('/blog')}}">Tin tức</a></li>
                    <li>{{'Search: "'.$search.'"'}}</li>
                    @endif
                </ul>
            </div>
        </section>
        <!-- breadcrumb_section - end
        ================================================== -->

        <!-- blog area start -->
        <div class="blog-area pt-120 pb-105">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8">
                        <div class="blog__wrapper mt-none-30">
                            @if(isset($category))
                            @php ($posts = $category->posts())
                            @endif
                            @if(isset($tag))
                            @php ($posts = $tag->posts())
                            @endif
                            @if($posts->count() == 0)
                            <h2 class="text-center title border-effect mb-10 wow fadeInUp" data-wow-delay=".1s">Không có bài viết nào!</h2>
                            @endif
                            @foreach($posts as $post)
                            <article class="blog__post mt-30 wow fadeInUp" data-wow-delay=".1s">
                                <div class="thumb">
                                    <img src="{{asset('public'.Storage::url($post->image))}}" alt="">
                                </div>
                                <ul class="meta mt-20 list-unstyled d-flex align-items-center">
                                    <i class="fal fa-file"></i>
                                    @foreach($post->categories as $category)
                                    <li><a href="#0">{{$category->name}}</a></li>
                                    @endforeach
                                    <li><a href="#0"><i class="fal fa-calendar-alt"></i>{{$post->created_at->diffForHumans()}}</a></li>
                                </ul>
                                <div class="content mt-10">
                                    <h2 class="title border-effect mb-10"><a href="{{URL::to('/blog/'.$post->slug)}}">{{$post->title}}</a></h2>
                                    <p>{{$post->description}}
                                    </p>
                                </div>
                                <div class="bottom mt-35 d-flex align-items-center">
                                    <a href="{{URL::to('/blog/'.$post->slug)}}" class="site-btn">đọc thêm</a>
                                </div>
                            </article>
                            @endforeach
                        </div>
                        <div class="cafena-pagination mt-60 wow fadeInUp" data-wow-delay=".1s">
                            {{$posts->links('pagination.default')}}
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4">
                        <div class="blog__sidebar mt-none-30 wow fadeInUp" data-wow-delay=".1s">
                            <div class="widget mt-30">
                                <h2 class="title">Tìm kiếm</h2>
                                <form action="{{URL::to('/blog')}}" class="search-widget">
                                    <input type="search" name="search" id="search" placeholder="Tìm kiếm bài viết">
                                    <button type="submit"><i class="fal fa-search"> Tìm kiếm</i></button>
                                </form>
                            </div>
                            <div class="widget mt-30">
                                <h2 class="title">Danh mục bài viết</h2>
                                @foreach($categories as $category)
                                <a class="cat-item" href="{{URL::to('/blog/category/'.$category->slug)}}">
                                    {{$category->name}}
                                    <span>{{sprintf("%02d", $category->all_posts->count())}}</span>
                                </a>
                                @endforeach
                            </div>
                            <div class="widget mt-30">
                                <h2 class="title">Bài viết mới</h2>
                                <div class="recent-posts">
                                    @foreach($lastest_posts as $post)
                                    <div class="item d-flex align-items-center">
                                        <div class="thumb">
                                            <img src="{{asset('public'.Storage::url($post->image))}}" alt="">
                                        </div>
                                        <div class="content">
                                            <h5 class="rp-title border-effect">
                                                <a href="{{URL::to('/blog/'.$post->slug)}}">
                                                    {{$post->title}}
                                                </a>
                                            </h5>
                                            <a href="#0" class="date"> <i class="fal fa-calendar-alt"></i>{{$post->created_at->diffForHumans()}}</a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="widget mt-30">
                                <h2 class="title">Tag phổ biến</h2>
                                <div class="tagcloud">
                                    @foreach($tags as $tag)
                                    <a href="{{URL::to('/blog/tag/'.$tag->slug)}}">{{$tag->name}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- blog area end -->
    </main>
    <!--body-main-section-->

    @include('components.footer')
    @include('components.js')
</body>

</html>
