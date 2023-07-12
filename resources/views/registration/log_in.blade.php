<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/tai_khoan.css')}}">
    <link rel="shortcut icon" href="{{asset('public/frontend/images/logo/favourite_icon.png')}}">

    @include('components.css')
    @show

</head>

<body>

    <!-- body_wrap - start -->
    <div>

        @include('components.header')

        <section>
            <div class="noi-dung">
                <div class="form">
                    <h2>Đăng Nhập</h2>
                    <form action="{{URL::to('/login-customer')}}" method="post">
                        @csrf
                        <div class="input-form">
                            <span>Tên Người Dùng</span>
                            <input type="text" name="email_account">
                        </div>
                        <div class="input-form">
                            <span>Mật Khẩu</span>
                            <input type="password" name="password_account">
                        </div>
                        <div class="nho-dang-nhap">
                            <label><input type="checkbox" name=""> Nhớ Đăng Nhập</label>
                        </div>
                        <div class="input-form">
                            <input type="submit" value="Đăng Nhập">
                        </div>
                        <div class="input-form">
                            <p>Bạn Chưa Có Tài Khoản? <a href="{{URL::to('/signup-checkout')}}">Đăng Ký</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </section>

    </div>
</body>
<!-- body_wrap - end -->
@include('components.footer')
@include('components.js')