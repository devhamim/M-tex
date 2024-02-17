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
                        <ul id="subjectsNav" style="display: grid" class="offcanvas_main_menu mt-5">
                            <li class="menu-item-has-children">
                                <a href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('about_us') }}">about Us</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="{{ route('about_us') }}">sustainability</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#" title="SUBJECTS">Product ></a>
                                <ul id="subnav">
                                    @foreach ($categories as $category)
                                    <li><a href="{{ route('our.product', $category->id) }}">{{ $category->name }}</a>
                                        <ul>
                                            @foreach ($subcategories as $subcat)
                                            @if ($subcat->category_id == $category->id)
                                                <li><a href="{{ route('our.sub.product', $subcat->id) }}">{{ $subcat->name }}</a></li>
                                            @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    @endforeach
                                </ul>
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
                        {{-- <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span> --}}
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
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="{{ url('/') }}">
                                @if ($setting->first()->logo != null)
                                    <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->logo }}" alt="Logo">
                                @endif
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="header_container_right color_two">
                            <!--main menu start-->
                            <div class="main_menu menu_position">
                                {{-- <nav>
                                    <ul id="subjectsNav">
                                        <li><a href="{{ url('/') }}">home</a></li>
                                        <li><a href="{{ route('about_us') }}">about Us</a></li>
                                        <li><a href="{{ route('our.promise') }}">Promise</a></li>
                                        <li><a href="{{ route('sustainability') }}">sustainability</a></li>
                                        <li>
                                            <a href="#" title="SUBJECTS">Product</a>

                                            <ul id="subnav">
                                                @foreach ($categories as $category)
                                                <li><a href="{{ route('our.product', $category->id) }}">{{ $category->name }}</a>
                                                    <ul>
                                                        @foreach ($subcategories as $subcat)
                                                        @if ($subcat->category_id == $category->id)
                                                            <li><a href="{{ route('our.sub.product', $subcat->id) }}">{{ $subcat->name }}</a></li>
                                                        @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @endforeach
                                            </ul>

                                        </li>

                                        <li><a href="{{ route('our.clients') }}">Client</a></li>
                                        <li><a href="{{ route('our.blog') }}">Blog</a></li>
                                        <li><a href="{{ route('contect') }}"> Contact Us</a></li>
                                    </ul>


                                    @foreach ($categories as $category)
                                                <li><a href="{{ route('our.product', $category->id) }}">{{ $category->name }}</a>
                                                    <ul>
                                                        @foreach ($subcategories as $subcat)
                                                        @if ($subcat->category_id == $category->id)
                                                            <li><a href="{{ route('our.sub.product', $subcat->id) }}">{{ $subcat->name }}</a></li>
                                                        @endif
                                                        @endforeach
                                                    </ul>
                                                </li>
                                                @endforeach
                                </nav> --}}
                                <nav style="text-align: end">
                                    <menu>
                                        <menuitem style="color: #fff">
                                            <a href="{{ url('/') }}">Home</a>
                                        </menuitem>
                                        <menuitem style="color: #fff">
                                            <a href="{{ route('about_us') }}">About Us</a>
                                        </menuitem>
                                        <menuitem style="color: #fff">
                                            <a href="{{ route('our.promise') }}">Promise</a>
                                        </menuitem>
                                        <menuitem style="color: #fff">
                                            <a href="{{ route('sustainability') }}">Sustainability</a>
                                        </menuitem>
                                        <menuitem id="demo1" style="color: #fff">
                                            <a>Product</a>
                                            <menu>
                                                {{-- <menuitem><a>about</a></menuitem> --}}
                                                @foreach ($categories as $category)
                                                    <menuitem style="background: hsla(195, 95%, 68%, 0.9); text-align: center">
                                                        <a href="{{ route('our.product', $category->id) }}">{{ $category->name }}</a>
                                                        <menu >
                                                            @foreach ($subcategories as $subcat)
                                                                @if ($subcat->category_id == $category->id)
                                                                    <menuitem style="background: hsla(195, 95%, 68%, 0.9)">
                                                                        <a href="{{ route('our.sub.product', $subcat->id) }}">{{ $subcat->name }}</a>
                                                                    </menuitem>
                                                                @endif
                                                            @endforeach
                                                        </menu>
                                                    </menuitem>
                                                @endforeach


                                            </menu>
                                        </menuitem>
                                        <menuitem style="color: #fff">
                                            <a href="{{ route('our.clients') }}">Client</a>
                                        </menuitem>
                                        <menuitem style="color: #fff">
                                            <a href="{{ route('our.blog') }}">Blog</a>
                                        </menuitem>
                                        <menuitem style="color: #fff">
                                            <a href="{{ route('contect') }}"> Contact Us</a>
                                        </menuitem>
                                    </menu>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@section('footer_scrip')
<script>
    // For the thumbnail demo! :]

var count = 1
setTimeout(demo, 500)
setTimeout(demo, 700)
setTimeout(demo, 900)
setTimeout(reset, 2000)

setTimeout(demo, 2500)
setTimeout(demo, 2750)
setTimeout(demo, 3050)


var mousein = false
function demo() {
   if(mousein) return
   document.getElementById('demo' + count++)
      .classList.toggle('hover')

}

function demo2() {
   if(mousein) return
   document.getElementById('demo2')
      .classList.toggle('hover')
}

function reset() {
   count = 1
   var hovers = document.querySelectorAll('.hover')
   for(var i = 0; i < hovers.length; i++ ) {
      hovers[i].classList.remove('hover')
   }
}

document.addEventListener('mouseover', function() {
   mousein = true
   reset()
})
</script>
@endsection
