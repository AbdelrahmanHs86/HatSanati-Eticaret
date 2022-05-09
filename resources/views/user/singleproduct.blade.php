<!doctype html>
<html lang="zxx">

<base href="/public">

<head>
    @include('user.head')
</head>

<body>
    @include('user.header')


    <!-- breadcrumb part start-->
    <section class="breadcrumb_part single_product_breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!--================Single Product Area =================-->
    <div class="product_image_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="product_img_slide owl-carousel">
                        <div class="single_product_img">
                            <img src="/productimage/{{$data->image}}" alt="#" class="img-fluid">
                        </div>

                    </div>
                </div>
                <div class="col-lg-8">
                    @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        {{session()->get('message')}}
                    </div>
                    @endif
                    <div class="single_product_text text-center">
                        <h3>{{$data->title}}</h3>
                        <p>
                            {{$data->description}}
                        </p>

                        <form action="{{url('addcart', $data->id)}}" method="post">
                            @csrf
                            <div class="card_area">
                                <div class="product_count_area">
                                    <p>Quantity</p>
                                    <div class="product_count d-inline-block">
                                        <span class="product_count_item inumber-decrement"> <i class="ti-minus"></i></span>
                                        <input class="product_count_item input-number" type="text" value="1" min="0" max="10" name="quantity">
                                        <span class="product_count_item number-increment"> <i class="ti-plus"></i></span>
                                    </div>
                                    <p>${{$data->quantity}}</p>
                                </div>

                                <div class="add_to_cart">
                                    <input type="submit" class="btn_3" value="add to cart">
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--================End Single Product Area =================-->



    @include('user.footer')
    @include('user.scripts')


</body>

</html>