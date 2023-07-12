<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>CAFENOD - Coffee shop</title>
    <link rel="shortcut icon" href="{{asset('public/frontend/images/logo/favourite_icon.png')}}">

    @include('components.css')
    @yield('stylesheet')
    @show

</head>

<body>

<!-- body_wrap - start -->
<div>

    @include('components.header')

    <!--body-main-section-->
    <main>

        @yield('content')
    </main>
    <!--body-main-section-->

</div>
<!-- body_wrap - end -->

@include('components.footer')
@include('components.js')
<script type="text/javascript">
    $(document).ready(function () {
        $('#sort').on('change', function () {
           var url = $(this).val();
           if(url){
               window.location=url;
           }

           return false;
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sort_price').on('change', function () {
            var url = $(this).val();
            if(url){
                window.location=url;
            }

            return false;
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sort_price1').on('change', function () {
            var url = $(this).val();
            if(url){
                window.location=url;
            }

            return false;
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sort_price2').on('change', function () {
            var url = $(this).val();
            if(url){
                window.location=url;
            }

            return false;
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#sort_price3').on('change', function () {
            var url = $(this).val();
            if(url){
                window.location=url;
            }

            return false;
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $('.add-to-cart').click(function () {
            swal("Ô la lá!");
        });
    });
</script>

</html>
