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
                        <li>about us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->


<div class="about_page_section">
    <div class="container">
         <!--about section area -->
         <div class="about_section">
             <div class="row">
                 @if ( $abouts->first() != null)
                 <div class="col-lg-6 col-md-12">
                    <div class="about_content">
                        <h5>{{ $abouts->first()->subtitle }}</h5>
                        <h1>{{ $abouts->first()->title }}</h1>
                        <p>{!! $abouts->first()->description !!}</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about_thumb">
                        <img src="{{ asset('uploads/about') }}/{{ $abouts->first()->image }}" alt="">
                    </div>
                </div>
                 @endif

             </div>
         </div>
         <!--about section end-->
     </div>
 </div>
@endsection
