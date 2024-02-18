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
            <div class="col-lg-10 m-auto">
                <div class="section_title title_style2">
                    <h2>our Client</h2>
                    {{-- <h5>Our customers are the foundation of M-Tex Resources' success. We work with a wide spectrum of companies, from vibrant startups to market leaders, providing specialized solutions and building enduring relationships. Examine the success stories of our happy customers to see how we can help your company reach new heights.</h5> --}}
                 </div>
            </div>
        </div>
        <div class="row">
            @foreach ($clients as $client)
                <div class="col-lg-3 col-md-3 py-5">
                    <figure class="single_banner">
                        <div class="banner_thumb">
                            <a><img src="{{asset('uploads/client')}}/{{$client->image}}" alt=""></a>
                        </div>
                    </figure>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--clind area end-->
@endsection
