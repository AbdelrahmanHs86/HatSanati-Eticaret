   <!--::header part start::-->
   <header class="main_menu home_menu">
       <div class="container">
           <div class="row align-items-center justify-content-center">
               <div class="col-lg-12">
                   <nav class="navbar navbar-expand-lg navbar-light">
                       <a class="" href="index.html">
                           <h2> Hat Sanati</h2>
                       </a>
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="menu_icon"><i class="fas fa-bars"></i></span>
                       </button>

                       <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                           <ul class="navbar-nav">
                               <li class="nav-item">
                                   <a class="nav-link" href="{{url('/')}}">Home</a>
                               </li>
                               <li class="nav-item">
                                   <a class="nav-link" href="{{url('about')}}">about</a>
                               </li>
                               <li class="nav-item dropdown">
                                   <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                       product
                                   </a>
                                   <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                                       <a class="dropdown-item" href="{{url('allproducts')}}"> product list</a>


                                   </div>
                               </li>

                               <li class="nav-item">
                                   <a class="nav-link" href="{{url('contact')}}">Contact</a>
                               </li>

                               <li class="nav-item flex align-items-center">
                                   @if (Route::has('login'))

                                   @auth
                                   <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                                   <a href="{{url('cart')}}">

                                       <i class="flaticon-shopping-cart-black-shape">{{$count}}</i>
                                   </a>
                                   <x-app-layout>
                                   </x-app-layout>
                                   @else
                               <li> <a href="{{ route('login') }}" class="nav-link">Log in</a></li>

                               @if (Route::has('register'))
                               <li> <a href="{{ route('register') }}" class="nav-link">Register</a></li>
                               @endif
                               @endauth

                               @endif
                               </li>

                           </ul>
                       </div>

                       <div class="hearer_icon d-flex align-items-center">
                           <!-- <a id="search_1" href="javascript:void(0)"><i class="ti-search"></i></a>
                           <a href="cart.html">

                               
                           </a> -->
                       </div>
                   </nav>
               </div>
           </div>
       </div>
       <div class="search_input" id="search_input_box">
           <div class="container ">
               <form class="d-flex justify-content-between search-inner">
                   <input type="text" class="form-control" id="search_input" placeholder="Search Here">
                   <button type="submit" class="btn"></button>
                   <span class="ti-close" id="close_search" title="Close Search"></span>
               </form>
           </div>
       </div>
   </header>
   <!-- Header part end-->