<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontend/css/tai_khoan.css')}}">

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
                    <h2>Đăng Ký</h2>
                    <form action="{{URL::to('/add-customer')}}" method="post">
                        @csrf
                        <div class="input-form">
                            <span>Tên người dùng</span>
                            <input type="text" name="customer_name">
                        </div>
                        <div class="input-form">
                            <span>Email</span>
                            <input type="email" name="customer_email">
                        </div>
                        <div class="input-form">
                            <span>Mật khẩu</span>
                            <input type="password" name="customer_password">
                        </div>
                        <div class="input-form">
                            <span>Phone</span>
                            <input type="text" name="customer_phone">
                        </div>
                        <div class="nho-dang-nhap">
                            <label><input type="checkbox" name=""> Đồng ý với các điều khoản để đăng ký</label>
                        </div>
                        <div class="input-form">
                            <input type="submit" value="ĐĂNG KÝ">
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