<!DOCTYPE html>
<html lang="en">

@include('admin.head')

<body>
    @include('admin.sidebar')
    @include('admin.header')

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">
                            <!-- [ Main Content ] start -->
                            <div class="col-sm-12">
                                <div class="card">
                                    <!-- <div class="card-header">
                                        <h5>Basic Componant</h5>
                                    </div> -->
                                    @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert">x</button>
                                        {{session()->get('message')}}
                                    </div>
                                    @endif

                                    <div class="card-body">

                                        <h5>Ürün Ekle</h5>
                                        <hr>
                                        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

                                            @csrf
                                            <div class="row">

                                                <div class="col-md-6">

                                                    <div class="form-group">
                                                        <label>Adı</label>
                                                        <input type="text" class="form-control" name="title" placeholder="Ad">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Açıklama</label>
                                                        <input type="text" class="form-control" name="des" placeholder="Açıklama">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Fiyat</label>
                                                        <input type="text" class="form-control" name="price" placeholder="Fiyat">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Adet</label>
                                                        <input type="text" class="form-control" name="quantity" placeholder="Adet">
                                                    </div>



                                                    <div class="form-group">
                                                        <label>Resim</label>
                                                        <input type="file" class="form-control form-control-sm" name="img" placeholder="Resim" accept="image/*">
                                                    </div>

                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>












                                                </div>

                                            </div>
                                        </form>



                                    </div>
                                </div>

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