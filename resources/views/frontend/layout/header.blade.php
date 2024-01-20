<div class="offcanvas_menu offcanvas_two">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>

                    <div id="menu" class="text-left ">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('about_us') }}">about Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <div class="dropdown-menu-drop">
                                    <button class="menu-btn">Product ></button>
                                    <div class="menu-content">
                                        @foreach ($categories as $category)
                                            <div class="links-hidden category">
                                                <a href="{{ route('our.product', $category->id) }}">{{ $category->name }}</a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('our.clients') }}">Client</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('our.blog') }}">Blog</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('contect') }}"> Contact Us</a>
                            </li>
                        </ul>
                    </div>

                    <div class="offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                        <ul>
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                            <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--offcanvas menu area end-->

<header>
    <div class="main_header header_two">
        <div class="header_container sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                @if ($setting->first()->logo != null)
                                    <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="Logo">
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="header_container_right color_two">
                            <!--main menu start-->
                            <div class="main_menu menu_position">
                                <nav>
                                    <ul>
                                        <li><a href="{{ url('/') }}">home</a></li>
                                        <li><a href="{{ route('about_us') }}">about Us</a></li>
                                        <li>
                                            <div class="dropdown-menu-drop">
                                                <button class="menu-btn">Product ></button>
                                                <div class="menu-content">
                                                    @foreach ($categories as $category)
                                                        <div class="links-hidden category">
                                                            <a href="{{ route('our.product', $category->id) }}">{{ $category->name }}</a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="{{ route('our.clients') }}">Client</a></li>
                                        <li><a href="{{ route('our.blog') }}">Blog</a></li>
                                        <li><a href="{{ route('contect') }}"> Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

