<!doctype html>
<html lang="zxx">

<head>
    @include('user.head')
</head>

<body>
    @include('user.header')
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h1>Hat Sanati Malzemeleri</h1>
                            <p>Hattat için hat hayatın ta kendisidir!</p>
                            <a href="{{url('allproducts')}}" class="btn_1">Şimdi satın al</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_img">
            <img src="img/hat5.jpg" width="700px" alt="#" class="img-fluid">
            <img src="img/banner_pattern.png " alt="#" class="pattern_img img-fluid">
        </div>
    </section>
    <!-- banner part start-->


    @include('user.feacher')

    <!-- trending item start-->
    <!-- trending item end-->

    <!-- client review part here -->
    <!-- client review part end -->


    <!-- feature part here -->
    <!-- feature part end -->

    <!-- subscribe part here -->
    <!-- subscribe part end -->

    @include('user.footer')
    @include('user.scripts')

</body>

</html>