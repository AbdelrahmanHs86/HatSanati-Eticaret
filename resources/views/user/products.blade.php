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
                        <h2>product list</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!-- product list part start-->
    <section class="product_list section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="product_sidebar">
                        <div class="single_sedebar">
                            <form action="{{url('search')}}" method="get">
                                @csrf
                                <input type="search" name="search" placeholder="Search keyword">
                                <i class="ti-search"></i>
                            </form>
                        </div>
                        <!-- <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">Category <i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><a href="#">Category 1</a></p>
                                    <p><a href="#">Category 2</a></p>
                                    <p><a href="#">Category 3</a></p>
                                    <p><a href="#">Category 4</a></p>
                                </div>
                            </div>
                        </div>
                        <div class="single_sedebar">
                            <div class="select_option">
                                <div class="select_option_list">Type <i class="right fas fa-caret-down"></i> </div>
                                <div class="select_option_dropdown">
                                    <p><a href="#">Type 1</a></p>
                                    <p><a href="#">Type 2</a></p>
                                    <p><a href="#">Type 3</a></p>
                                    <p><a href="#">Type 4</a></p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="product_list">
                        <div class="row">
                            @foreach($data as $product)
                            <div class="col-lg-6 col-sm-6">
                                <div class="single_product_item">
                                    <img src="/productimage/{{$product->image}}" width="300px" alt="#" class="img-fluid mx-auto d-block">
                                    <h3> <a href="{{url('singleproduct',$product->id)}}">{{$product->title}}</a> </h3>
                                    <p>From ${{$product->price}}</p>
                                </div>
                            </div>

                            @endforeach
                        </div>

                        @if(method_exists($data,'links'))
                        <div class="d-flex justify-content-center">
                            {!! $data->links() !!}
                        </div>
                        @endif
                        <!-- <div class="load_more_btn text-center">
                            <a href="#" class="btn_3">Load More</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product list part end-->

    @include('user.footer')
    @include('user.scripts')

</body>

</html>