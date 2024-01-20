@extends('frontend.layout.app')
@section('content')

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-bgimg="{{asset('frontend')}}/img/M-tex-garments.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb_content" style="padding: 120px 0; color: #fff">
                    <ul>
                        <li><a href="{{url('/')}}">home</a></li>
                        <li>Client</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!--clind area start-->
<div class="banner_area banner-style9 mb-70 mt-30 py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="section_title title_style2">
                    <h2>our Client</h2>
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 py-3">
                <figure class="single_banner">
                    <div class="banner_thumb">
                        <a href="shop.html"><img src="{{asset('frontend')}}/img/bg/banner34.jpg" alt=""></a>
                    </div>
                </figure>
            </div>
            <div class="col-lg-3 col-md-3 py-3">
               <figure class="single_banner">
                    <div class="banner_thumb">
                        <a href="shop.html"><img src="{{asset('frontend')}}/img/bg/banner35.jpg" alt=""></a>
                    </div>
                </figure>
            </div>
            <div class="col-lg-3 col-md-3 py-3">
                <figure class="single_banner">
                    <div class="banner_thumb">
                        <a href="shop.html"><img src="{{asset('frontend')}}/img/bg/banner36.jpg" alt=""></a>
                    </div>
                </figure>
            </div>
            <div class="col-lg-3 col-md-3 py-3">
                <figure class="single_banner">
                     <div class="banner_thumb">
                         <a href="shop.html"><img src="{{asset('frontend')}}/img/bg/banner35.jpg" alt=""></a>
                     </div>
                 </figure>
            </div>
            <div class="col-lg-3 col-md-3 py-3">
                <figure class="single_banner">
                     <div class="banner_thumb">
                         <a href="shop.html"><img src="{{asset('frontend')}}/img/bg/banner35.jpg" alt=""></a>
                     </div>
                 </figure>
            </div>
            <div class="col-lg-3 col-md-3 py-3">
                <figure class="single_banner">
                     <div class="banner_thumb">
                         <a href="shop.html"><img src="{{asset('frontend')}}/img/bg/banner35.jpg" alt=""></a>
                     </div>
                 </figure>
            </div>
            <div class="col-lg-3 col-md-3 py-3">
                <figure class="single_banner">
                     <div class="banner_thumb">
                         <a href="shop.html"><img src="{{asset('frontend')}}/img/bg/banner35.jpg" alt=""></a>
                     </div>
                 </figure>
            </div>
            <div class="col-lg-3 col-md-3 py-3">
                <figure class="single_banner">
                     <div class="banner_thumb">
                         <a href="shop.html"><img src="{{asset('frontend')}}/img/bg/banner35.jpg" alt=""></a>
                     </div>
                 </figure>
            </div>
        </div>
    </div>
</div>
<!--clind area end-->
@endsection
