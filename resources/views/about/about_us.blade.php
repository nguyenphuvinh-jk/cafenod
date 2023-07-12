<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CAFENOD - Coffee shop</title>
    <link rel="shortcut icon" href="assets/images/logo/favourite_icon.png">

    @include('components.css')
</head>

<body>

    <!-- body_wrap - start -->
    <div>

        @include('components.header')
        <!--body-main-section-->
        <main>
            <section class="breadcrumb_section text-uppercase deco_wrap" style="background-image: url({{asset('public/frontend/images/breadcrumb/breadcrumb_bg_01.jpg')}});">
                <div class="container">
                    <h1 class="page_title text-white wow fadeInUp" data-wow-delay=".1s">Giới thiệu</h1>
                    <ul class="breadcrumb_nav ul_li wow fadeInUp" data-wow-delay=".2s">
                        <li><a href="{{URL::to('/trang-chu')}}"><i class="fas fa-home"></i>trang chủ</a></li>
                        <li>Giới thiệu</li>
                    </ul>
                </div>
            </section>
            <!-- about_section - start
        ================================================== -->
            <section class="about_section pt-120 pb-105">
                <div class="container">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 col-md-6 order-last">
                            <div class="video_ad wow fadeInRight" data-wow-delay=".1s">
                            <iframe src="{{ url('https://www.youtube.com/embed/5Peo-ivmupE') }}" width="560" height="315" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="about_content">
                                <div class="section_title text-uppercase">
                                    <h2 class="small_title"><i class="fas fa-coffee"></i>giới thiệu </h2>
                                    <hr class="line-1 wow fadeInUp" data-wow-delay=".1s" />
                                    <h3 class="big_title wow fadeInUp" data-wow-delay=".1s">
                                        câu chuyện của cafenod
                                    </h3>
                                </div>
                                <div class="wow fadeInUp" data-wow-delay=".2s">
                                    <p>Năm 1995, một doanh nhân Việt Kiều trẻ tuổi – David Thái đã trở về Việt Nam khi tình yêu và khát vọng cống hiến cho quê hương thôi thúc. Vì cha mẹ đều là người Việt, ngay từ khi còn nhỏ, anh đã được nghe nhiều câu chuyện thú vị và các giá trị truyền thống đầy tự hào về đất nước hình chữ S. Nên dù tiếp nhận nền giáo dục phương Tây, dòng máu Việt vẫn không ngừng chảy và đưa anh trở về tìm hiểu văn hóa quê hương.</p>
                                    <p> Từ tình yêu với Việt Nam và niềm đam mê cà phê, năm 1999, thương hiệu CAFENOD ra đời với khát vọng nâng tầm di sản cà phê lâu đời của Việt Nam và lan rộng tinh thần tự hào, kết nối hài hoà giữa truyền thống với hiện đại.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="about_content wow fadeInUp" data-wow-delay=".2s">
                            <div>
                                <p>Bằng việc sử dụng nguồn nguyên liệu sạch, thuần Việt kết hợp với công thức pha phin độc đáo, CAFENOD nhanh chóng chinh phục được những khách hàng khó tính nhất bằng hương vị đậm đà, “chuẩn gu” theo đúng chất cà phê Việt.</p>
                                <img class="mx-auto d-block pb-1" src="{{asset('public/frontend/images/banners/sale-3.png')}}" alt="IMG">
                                <p>Giá trị Việt còn được chú trọng và nâng tầm không chỉ qua thiết kế của từng chiếc ly, chiếc cốc, mà còn cả ở những gói cà phê rang, xay đúng chuẩn, những hình vẽ trang trí thể hiện nét đẹp văn hóa, mang lại cảm giác gần gũi đời thường nhưng vẫn rất tinh tế và hiện đại trong không gian mở, tràn ngập ánh sáng của từng quán cà phê.</p>
                                <p>Với CAFENOD, có thể nói David Thái đã mang hết tâm tư và khát vọng của mình để tạo nên một sản phẩm cà phê thấm nhuần những giá trị truyền thống Việt, kết hợp độc đáo với nhịp sống hiện đại của một Việt Nam mới đầy năng động.</p>
                                <p>Kể từ lần đầu ra mắt, với gần 20 năm phục vụ cà phê Việt cho người Việt, CAFENOD đã và đang gần gũi hơn với cuộc sống của người Việt, thay đổi thói quen và mang đến cho người Việt một trải nghiệm hoàn toàn mới trong việc thưởng thức và trải nghiệm cà phê, nhưng vẫn không mất đi những giá trị truyền thống vốn có.</p>
                                <img class="mx-auto d-block pb-1" src="{{asset('public/frontend/images/about/okla-1.jpg')}}" alt="IMG">
                                <p>Sinh ra để phục vụ những giá trị Việt, mỗi ngày tại CAFENOD tự hào để mang đến cho thực khách những ly cà phê phin đậm đà, những ly trà thơm ngon, những món ăn Việt đầy kí ức tuổi thơ, mà điển hình là bộ đôi “Bánh Mì – Phin Sữa Đá” đầy thân thương, đã trở thành bạn chí cốt trong những bữa “đói lòng” của nhiều thực khách đến quán.</p>
                                <p>Tất cả những chi tiết nhỏ nhất trong việc chọn nguyên vật liệu thô và trong cả trang trí, đều được CAFENOD chú ý, để nâng tầm giá trị Việt, để CAFENOD trở thành thương hiệu được yêu thích nhất về khẩu vị, phong cách cà phê và trà Việt Nam hiện đại, nhưng vẫn giữ giá cả hợp lý, gần gũi và sẵn sàng phục vụ mọi khách hàng, mọi lúc, mọi nơi.</p>
                                <p>Sứ mệnh ấy, được thể hiện bằng những chiến lược kinh doanh rất bài bản và cụ thể như tập trung phát triển và nghiên cứu để phục vụ cộng đồng người Việt với những sản phẩm chất lượng, ổn định và hợp khẩu vị với mức giá phù hợp túi tiền.</p>
                                <p>Với gần 300 quán cà phê trên 21 tỉnh thành, và còn hơn thế nữa, … người Việt nay được thưởng thức những ly cà phê đậm đà, những ly trà thơm ngon trong một không gian quán gần gũi, thoải mái, nơi giao thoa giữa nét truyền thống và hiện đại, đậm chất Việt.</p>
                                <img class="mx-auto d-block w-50 pb-1" src="{{asset('public/frontend/images/about/oknha.jpg')}}" alt="IMG">
                                <p>Tinh thần nhân văn của người Việt còn được CAFENOD lan toả thông qua những hoạt động vì cộng đồng như tài trợ, giao lưu và giúp đỡ các tổ chức, trường học trong nước. Và CAFENOD hiểu rằng, việc đồng hành cùng những chiến dịch bảo vệ môi trường sẽ còn là định hướng lâu dài của cả thương hiệu. Chính khát khao được lan tỏa nguồn gốc Việt, niềm tự hào được phục vụ người Việt đã giúp CAFENOD chưa một ngày nào đi chệch sứ mệnh của mình.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="about_content wow fadeInUp" data-wow-delay=".2s">
                            <div class="section_title text-uppercase">
                                <h2 class="small_title">Hành trình lan tỏa niềm tự hào sinh ra từ đất Việt</h2>
                            </div>
                            <div>
                                <p>Cũng sinh ra từ đất Việt, CAFENOD hiểu rằng người Việt luôn mang trong mình nỗi tự ti đè nặng vô hình. Người Việt tự ti vì vóc dáng thấp bé. Người Việt tự ti vì chúng ta sinh ra ở một mảnh đất nhỏ, không giàu có như các cường quốc thế giới.</p>
                                <p>Nhưng CAFENOD hiểu được người Việt chúng ta còn có những giá trị khác để tự hào, để phát huy các thế mạnh sẵn có. Chúng ta tin là chúng ta có thể, và chúng ta luôn TỰ HÀO SINH RA TỪ ĐẤT VIỆT.</p>
                                <p>LUÔN TỰ HÀO, vì chúng ta:</p>
                                <h6>“NƠI CAO NÀO Ở DÁNG VÓC - MÀ LÀ Ở GÓC NHÌN RỘNG MỞ”</h6>
                                <p>Người Việt tuy không cao ở vóc dáng nhưng từ xưa đã nổi tiếng khắp khu vực và thế giới vì sự khéo léo. Chúng ta đã từng sở hữu những thương cảng lớn, sầm uất, kết nối các nền văn hóa Á - Âu như Óc Eo, Vân Đồn, …Ngày nay, thế hệ người Việt năng động cũng không ngừng học hỏi để hội nhập quốc tế thời kỳ mới.</p>
                                <img class="mx-auto d-block w-50 pb-2" src="{{asset('public/frontend/images/about/gt-2.jpg')}}" alt="IMG">
                                <h6>“NƠI GIÀU KHÔNG CHỈ BẠC VÀNG MÀ LÀ DI SẢN GIANG SAN TỰ HÀO”</h6>
                                <p>Từ những di sản rừng vàng – biển bạc trải dài suốt hơn 3000km đất Việt, nơi đâu bạn cũng có thể tìm thấy những phong cảnh đẹp mê lòng người, những nền văn hóa đa sắc màu giao thoa.</p>
                                <p>Từ Bắc đến Nam, dù là những thắng cảnh, những nền văn hoá và con người nào trên đất Việt, vẫn luôn là những điều đáng tự hào, là niềm cảm hứng vô tận, là tình yêu quê hương đất nước của rất nhiều người con Việt Nam.</p>
                                <img class="mx-auto d-block w-50 pb-2" src="{{asset('public/frontend/images/about/gt-3.jpg')}}" alt="IMG">
                                <h6>“NƠI NHANH CHẲNG PHẢI TỐC ĐỘ - MÀ Ở ĐỘ NHẠY CHỐP LẤY THỜI CƠ”</h6>
                                <p>Những doanh nhân Việt thời hiện đại tiếp nối cha ông luôn nhạy bén trong kinh doanh và làm nên những thương hiệu Việt Nam xứng tầm thế giới và CAFENOD tự hào đóng góp một phần nhỏ bé trong cuộc hành trình nâng tầm những giá trị Việt</p>
                                <img class="mx-auto d-block w-50 pb-2" src="{{asset('public/frontend/images/about/gt-4.jpg')}}" alt="IMG">
                                <h6> “NƠI TỰ HÀO DÂNG TRÀO TRONG MÁU ĐỂ MANG VÀO TRONG CẢ CÀ PHÊ”</h6>
                                <p>Những di sản Việt, dù ở thời nào, cũng vẫn trường tồn, đã là niềm cảm hứng đầy tự hào để chúng tôi mang vào trong từng ly cà phê phin, từng ly trà, từng món ăn, từng phong cách thiết kế quán, để khi tự hào nghĩ về cà phê và những giá trị Việt, bạn có thể tự hào nghĩ về CAFENOD.</p>
                                <img class="mx-auto d-block w-50 pb-2" src="{{asset('public/frontend/images/about/gt-5.jpg')}}" alt="IMG">
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="about_content wow fadeInUp" data-wow-delay=".2s">
                            <div class="section_title text-uppercase">
                                <h2 class="small_title">Thấu hiểu khẩu vị người Việt hơn bất kỳ ai</h2>
                            </div>
                            <div>
                                <p>Tại CAFENOD, tận tâm là kim chỉ nam để chúng tôi thấu hiểu người Việt không chỉ trong từng đường nét trang trí quán, giao thoa giữa đương đại và truyền thống mà còn trong hàng triệu sản phẩm tinh chọn, tỉ mỉ phục vụ mỗi ngày.</p>
                            </div>
                            <div class="section_title text-uppercase">
                                <h2 class="small_title">Là nơi để lan tỏa, kết nối và thuộc về</h2>
                            </div>
                            <div>
                                <p>CAFENOD, tự hào là thương hiệu Việt Nam, lan tỏa, kết nối triệu khách hàng Việt và là nơi để tất mọi người cùng thuộc về.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about_section - end
        ================================================== -->

        </main>
        <!--body-main-section-->

    </div>
    <!-- body_wrap - end -->
    @include('components.footer')
    @include('components.js')
</body>

</html>