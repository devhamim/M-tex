
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @if ($setting->first()->title != null)
        <title>{{ $setting->first()->title }}</title>
    @endif
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    @if ($setting->first()->favicon != null)
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">
    @endif

    <!-- CSS
    ========================= -->
    <!--bootstrap min css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
    <!--owl carousel min css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/owl.carousel.min.css">
    <!--slick min css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/slick.css">
    <!--magnific popup min css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/magnific-popup.css">
    <!--font awesome css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/font.awesome.css">
    <!--ionicons min css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/ionicons.min.css">
    <!--material design min css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/material.design.min.css">
    <!--animate css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/animate.css">
    <!--jquery ui min css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/jquery-ui.min.css">
    <!--slinky menu css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/slinky.menu.css">
    <!--plugins css-->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/plugins.css">

    <link rel="stylesheet" href="{{asset('frontend/css/venobox.min.css')}}">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">

    <!--modernizr min js here-->
    <script src="{{asset('frontend')}}/js/vendor/modernizr-3.7.1.min.js"></script>

    <style>

        /* ============ */
        /* Main */
        #subjectsNav {
    list-style: none;
}

#subjectsNav li {
    display: block;
    float: left;
    position: relative;
    color: #fff;
    font-size: 18px;
    font-weight: bold;
}

#subjectsNav li a:hover {
    color: #ff6140;
}

#subnav li {
    margin: 10px 0;
}

#subjectsNav ul {
    background-color: rgba(32, 32, 32, 0.9);
    opacity: 0;
    height: 0;
    transition: opacity 0.5s, height 0.5s;
}

#subjectsNav li:hover > ul {
    opacity: 1;
    height: auto;
}

/* Sub-menu */
#subjectsNav ul {
    list-style: none;
    left: -25px;
    margin: 20px 0;
    padding: 0 30px;
    position: absolute;
    z-index: 99999;
}

#subjectsNav ul li {
    float: none;
    display: block;
}

#subjectsNav ul ul {
    top: -80%;
    left: 125%;
}

/* Define the fadeIn animation */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}


       /* Popup container - can be anything you want */
.popup {
  /* position: relative; */
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 100%;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 10px;
    position: absolute;
    z-index: 999;
    bottom: 0%;
    right: 0%;
    margin-left: 0;
    height: auto; /* Set height to auto */
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;}
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
    </style>

</head>

<body>

    <!--header area start-->

    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>

    @include('frontend.layout.header')
    <!--header area end-->

    @yield('content')

    <!--footer area start-->
    @include('frontend.layout.footer')
    <!--footer area end-->

    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><i class="zmdi zmdi-close"></i></span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" >
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{asset('frontend')}}/img/product/productbig1.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{asset('frontend')}}/img/product/productbig2.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{asset('frontend')}}/img/product/productbig3.jpg" alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="{{asset('frontend')}}/img/product/productbig4.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li >
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{asset('frontend')}}/img/product/product1.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                 <a class="nav-link" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{asset('frontend')}}/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{asset('frontend')}}/img/product/product3.jpg" alt=""></a>
                                            </li>
                                            <li>
                                               <a class="nav-link" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{asset('frontend')}}/img/product/product8.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Donec Ac Tempus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price" >$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                           <h2>size</h2>
                                           <select class="select_option">
                                               <option selected value="1">s</option>
                                               <option value="1">m</option>
                                               <option value="1">l</option>
                                               <option value="1">xl</option>
                                               <option value="1">xxl</option>
                                           </select>
                                        </div>
                                        <div class="variants_color">
                                           <h2>color</h2>
                                           <select class="select_option">
                                               <option selected value="1">purple</option>
                                               <option value="1">violet</option>
                                               <option value="1">black</option>
                                               <option value="1">pink</option>
                                               <option value="1">orange</option>
                                           </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="2" value="1" type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->


<!-- JS
============================================ -->
<!--jquery min js-->
{{-- <script src="{{asset('frontend')}}/js/vendor/jquery-3.4.1.min.js"></script> --}}
<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<!--popper min js-->
<script src="{{asset('frontend')}}/js/popper.js"></script>
<!--bootstrap min js-->
<script src="{{asset('frontend')}}/js/bootstrap.min.js"></script>
<!--owl carousel min js-->
<script src="{{asset('frontend')}}/js/owl.carousel.min.js"></script>

<script src="{{asset('frontend/js/venobox.min.js')}}"></script>
<!--slick min js-->
<script src="{{asset('frontend')}}/js/slick.min.js"></script>
<!--magnific popup min js-->
<script src="{{asset('frontend')}}/js/jquery.magnific-popup.min.js"></script>
<!--counterup min js-->
<script src="{{asset('frontend')}}/js/jquery.counterup.min.js"></script>
<!--jquery countdown min js-->
<script src="{{asset('frontend')}}/js/jquery.countdown.js"></script>
<!--jquery ui min js-->
<script src="{{asset('frontend')}}/js/jquery.ui.js"></script>
<!--jquery elevatezoom min js-->
<script src="{{asset('frontend')}}/js/jquery.elevatezoom.js"></script>
<!--isotope packaged min js-->
<script src="{{asset('frontend')}}/js/isotope.pkgd.min.js"></script>
<!--slinky menu js-->
<script src="{{asset('frontend')}}/js/slinky.menu.js"></script>
<!-- Plugins JS -->
<script src="{{asset('frontend')}}/js/plugins.js"></script>

<!-- Main JS -->
<script src="{{asset('frontend')}}/js/main.js"></script>


    @yield('footer_scrip')


</body>

</html>
