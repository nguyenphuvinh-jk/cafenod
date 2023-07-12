
    <!-- banner_section - start
        ================================================== -->
    <section class="banner_section">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <div class="carousel-inner">
                @php
                    $i = 0;
                @endphp
                @foreach($slider as $key => $slide)
                    @php
                        $i++;
                    @endphp
                <div class="carousel-item {{$i==1 ? 'active' : '' }}">
                    <img src="{{asset('public/upload/banner/'.$slide->banner_image)}}" alt="{{$slide->banner_name}}" class="d-block w-100">
                </div>
                @endforeach
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </section>
    <!-- banner_section - end
    ================================================== -->


