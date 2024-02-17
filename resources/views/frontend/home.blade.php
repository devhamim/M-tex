@extends('frontend.layout.app')

@section('content')
<!--slider area start-->
<section class="slider_section slider_s_two">
    <div class="slider_area owl-carousel">
        @foreach ($banners as $banner)
        <div class="single_slider d-flex align-items-center" data-bgimg="{{ asset('uploads/banner') }}/{{ $banner->image }}">
           <div class="container">
               <div class="row">
                   <div class="col-lg-7 col-md-8 col-sm-7">
                       <div class="slider_content" style="text-align: start;">
                           <h1 class="text-white"> {{ $banner->title }}</h1>
                            <p class="text-white">{{ $banner->description }}</p>
                            <a class="btn btn-dark" href="{{route('about_us')}}">About Us</a>
                            <a class="btn btn-dark" href="{{route('contect')}}">Contect</a>
                        </div>
                   </div>
               </div>
           </div>
        </div>
        @endforeach
    </div>
</section>
<!--slider area end-->

<!--about area start-->
@if ($abouts->first() != null)
<section class="mt-5 pt-5">
    <div class="container">
        <div class="about_section ">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="about_thumb">
                        <img src="{{ asset('uploads/about') }}/{{ $abouts->first()->image }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="section_title about_content" style="text-align: start">
                        <h2 style="padding: 0;">{{ $abouts->first()->subtitle }}</h2>
                        <h3 style="font-size: 20px; font-weight: 600; padding-top: 10px">{{ $abouts->first()->title }}</h3>
                        <p> {!! $abouts->first()->description !!}</p>
                        <div class="view__work">
                            <a href="{{route('about_us')}}">Read More </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endif
<!--about area end-->

<!--product area start-->
<div class="product_area color_two mb-62 py-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 m-auto">
               <div class="product-header">
                    <div class="section_title title_style2">
                       <h2 class="mb-3">Products</h2>
                       <h5>Discover sophistication at its finest with M-tex Resources. Our well-curated selection of men's, women's, and children's </h5>
                    </div>
                    <div class="product_tab_btn">
                        <ul class="nav" role="tablist">
                            @foreach ($categorys->take(5) as $key => $category)
                                <li>
                                    <a class="{{ $key === 0 ? 'active' : '' }}" data-bs-toggle="tab" href="#{{ $category->name }}" role="tab" aria-controls="{{ $category->name }}" aria-selected="true">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            @foreach ($categorys as $key =>$category)
                <div class="tab-pane fade show {{ $key === 0 ? 'active' : '' }}" id="{{ $category->name }}" role="tabpanel">
                    <div class="row">
                        @foreach ($products->take(8) as $product)
                            @if($product->category_id == $category->id)
                                <div class="col-lg-3 mb-4">
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img"><img src="{{ asset('uploads/product') }}/{{ $product->image }}" alt=""></a>
                                                    <a class="my-image-links secondary_img" data-gall="gallery01" href="{{ asset('uploads/product') }}/{{ $product->image }}">
                                                        <img src="{{ asset('uploads/product') }}/{{ $product->image }}">
                                                        <div class="product_icon">
                                                            <i class="zmdi zmdi-plus-circle-o"></i>
                                                        </div>
                                                    </a>

                                                </div>
                                                <figcaption class="product_content">
                                                <div class="product_content-header">
                                                        <h4 class="product_name"><a >{{ $product->name }}</a></h4>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </article>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--product area end-->

<!--clind area start-->
<div class="banner_area banner-style9 mb-70 mt-30 py-3" style="background: #f1f1f1">
    <div class="container py-5">
        <div class="row">
            <div class="col-7 col-lg-6">
                <div class="section_title title_style2" style="text-align: start;">
                   <h2 class="mb-3" style="padding: 0;background: #f1f1f1">Our Client</h2>
                   <h5>This Section is under construction</h5>
                </div>
            </div>
            <div class="col-lg-3">

            </div>
            <div class="col-lg-3 col-5 text-end">
                <div class="view__work">
                    <a href="{{route('our.clients')}}">Read More </a>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($clients->take(8) as $client)
                <div class="col-lg-3 col-md-3 py-5">
                    <figure class="single_banner client_hover">
                        <div class="banner_thumb">
                            <a ><img src="{{asset('uploads/client')}}/{{$client->image}}" alt=""></a>
                        </div>
                    </figure>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!--clind area end-->

<!--blog area start-->
<section class="blog_section color_two mb-62 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 m-auto">
                <div class="section_title title_style2">
                   <h2 class="mb-3">Latest Blog</h2>
                   <h5>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut laborum esse vero dolorum harum aliquid veniam aliquam dicta nostrum eos.</h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog_carousel blog_column3 owl-carousel">
                @foreach ($blogs->take(3) as $blog)
                    <div class="col-lg-3">
                        <article class="single_blog">
                            <figure>
                                <div class="blog_thumb">
                                    <a href="{{ route('our.blog.details', $blog->slug) }}"><img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                <h4 class="post_title"><a href="{{ route('our.blog.details', $blog->slug) }}">{{$blog->title}}</a></h4>
                                <div class="articles_date">
                                        <span>{{ $blog->created_at->format('d,M,Y') }}</span>
                                        @if ($blog->rel_to_user->id != null)
                                            <p>{{ $blog->rel_to_user->name }}</p>
                                        @endif
                                    </div>
                                    <footer class="btn_more">
                                        <a href="{{ route('our.blog.details', $blog->slug) }}"> Read more</a>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!--blog area end-->

<!--contect area start-->
<section>
    <div class="container">
        <div class="contact_area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title title_style2">
                           <h2>Contect Us</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                       <div class="contact_message content">
                            <img src="{{asset('frontend/img/contect-h.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                       <div class="contact_message form">
                            <form id="contact-form" method="POST" action="{{ route('customerMessage.store') }}">
                                @csrf
                                <p>
                                   <label> Your Name (required)</label>
                                    <input name="name" placeholder="Name *" type="text">
                                </p>
                                <p>
                                   <label>  Your Email (required)</label>
                                    <input name="email" placeholder="Email *" type="email">
                                </p>
                                <p>
                                   <label>  Your Number (required)</label>
                                    <input name="phone" placeholder="Number *" type="number">
                                </p>
                                <p>
                                   <label>  Subject</label>
                                    <input name="subject" placeholder="Subject *" type="text">
                                </p>
                                <div class="contact_textarea">
                                    <label>  Your Message</label>
                                    <textarea placeholder="Message *" name="message" class="form-control2"></textarea>
                                </div>
                                <button class="btn btn-danger" type="submit"> Send</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contect area end-->

@endsection

@section('footer_scrip')
<script>
    new VenoBox({
    selector: '.my-image-links',
    numeration: true,
    infinigall: true,
    share: true,
    spinner: 'rotating-plane'
});
</script>
@endsection

