<!DOCTYPE html>
<html lang="en">

@include('admin.head')

<body>
    @include('admin.sidebar')
    @include('admin.header')

    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Ürünler Bilgileri</h5>
                                    </div>
                                    @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        {{session()->get('message')}}
                                    </div>
                                    @endif

                                    <div class="card-block table-border-style">
                                        <div class="table-responsive">
                                            <table class="table table-hover">
                                                <thead>
                                                    <!-- <th>id</th> -->
                                                    <th>Title</th>
                                                    <th>Price</th>
                                                    <th>Description</th>
                                                    <th>Quantity</th>
                                                    <th>Image</th>
                                                    <th>Update</th>
                                                    <th>Delete</th>


                                                </thead>
                                                <tbody>
                                                    @foreach($data as $product)
                                                    <tr>
                                                        <!-- <th scope="row">{{$product->id}}</th> -->
                                                        <td>{{$product->title}}</td>
                                                        <td>{{$product->price}}</td>
                                                        <td>{{$product->description}}</td>
                                                        <td>{{$product->quantity}}</td>
                                                        <td><img src="/productimage/{{$product->image}}" height="100px" width="100px" alt=""></td>
                                                        <td><a href="{{url('updateproduct',$product->id)}}" class="btn btn-primary">update</a></td>
                                                        <td><a href="{{url('deleteproducts',$product->id)}}" class="btn btn-danger">delete</a></td>

                                                    </tr>

                                                    @endforeach


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- [ Hover-table ] end -->
                        </div>
                    </div>
                    <!-- [ Main Content ] end -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- [ Main Content ] end -->

    @include('admin.script')

</body>

</html>