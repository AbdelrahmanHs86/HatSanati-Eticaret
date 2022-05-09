<!doctype html>
<html lang="zxx">

<head>
    @include('user.head')
</head>

<body>
    @include('user.header')




    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>cart list</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!--================Cart Area =================-->
    <section class="cart_area section_padding">
        <div class="container">
            <div class="cart_inner">

                <div class="table-responsive">
                    <table class="table">

                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carts as $cart)
                            <tr>
                                <td>
                                    <div class="media">
                                        <!-- <div class="d-flex">
                                            <img src="img/arrivel/arrivel_1.png" alt="" />
                                        </div> -->
                                        <div class="media-body">
                                            <p>{{$cart->product_title}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>${{$cart->price}}</h5>
                                </td>
                                <td>
                                    <div class="product_count">

                                        <span class="input-number-decrement"> <i class="ti-minus"></i></span>
                                        <input class="input-number" type="text" value="{{$cart->quantity}}" min="0" max="10">
                                        <span class="input-number-increment"> <i class="ti-plus"></i></span>
                                    </div>
                                </td>
                                <td>
                                    <h5>${{$cart->price}}</h5>
                                </td>
                            </tr>
                            @endforeach
                            <tr class="bottom_button">
                                <td>
                                    <a class="btn_1" href="#">Update Cart</a>
                                </td>
                                <td></td>
                                <td>
                                    <h5>Subtotal</h5>
                                </td>
                                <td>
                                    <h5>$2160.00</h5>
                                </td>
                            </tr>


                        </tbody>
                    </table>


                    <div class="checkout_btn_inner float-right">
                        <a class="btn_1" href="#">Continue Shopping</a>
                        <a class="btn_1 checkout_btn_1" href="#">Proceed to checkout</a>
                    </div>
                </div>

            </div>
    </section>
    <!--================End Cart Area =================-->


    @include('user.footer')
    @include('user.scripts')

</body>

</html>