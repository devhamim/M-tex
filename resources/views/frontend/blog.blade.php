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
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<div class="blog_page_section mt-57">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12">
                <div class="blog_wrapper">
                    <div class="blog_header">
                        <h1>Blog</h1>
                        <h5 class="mt-3">Welcome to our Blog – Your Gateway to Industry Insights and Expertise. Stay informed with the latest trends, best practices, and thought leadership articles curated by our team of experts. Explore the knowledge hub that empowers your business growth.</h5>
                    </div>
                    <div class="row">
                        @foreach ($blogs as $blog)
                            <div class="col-lg-6 col-md-6">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a href="{{ route('our.blog.details', $blog->slug) }}"><img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt=""></a>
                                        </div>
                                        <figcaption class="blog_content">
                                        <h4 class="post_title"><a href="{{ route('our.blog.details', $blog->slug) }}">{{ $blog->title }}</a></h4>
                                            <footer class="btn_more">
                                                <a href="{{ route('our.blog.details', $blog->slug) }}"> Read more <i class="zmdi zmdi-long-arrow-right"></i></a>
                                            </footer>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="blog_sidebar_widget">
                    <div class="widget_list widget_post">
                        <div class="widget_title">
                            <h3>Recent Posts</h3>
                        </div>
                        @foreach ($blogs as $blog)
                            <div class="post_wrapper">
                                <div class="post_thumb">
                                    <a href="{{ route('our.blog.details', $blog->slug) }}"><img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt=""></a>
                                </div>
                                <div class="post_info">
                                    <h4><a href="{{ route('our.blog.details', $blog->slug) }}">{{ $blog->title }}</a></h4>
                                    <span>{{ $blog->created_at->format('d,M,Y') }} </span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div class="widget_list comments">
                       <div class="widget_title">
                            <h3>Recent Comments</h3>
                        </div>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/comment2.png.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <span> <a href="#">demo</a> says:</span>
                                <a href="blog-details.html">Quisque semper nunc</a>
                            </div>
                        </div>
                         <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/comment2.png.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <span><a href="#">admin</a> says:</span>
                                <a href="blog-details.html">Quisque orci porta...</a>
                            </div>
                        </div>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/comment2.png.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <span><a href="#">demo</a> says:</span>
                                <a href="blog-details.html">Quisque semper nunc</a>
                            </div>
                        </div>
                        <div class="post_wrapper">
                            <div class="post_thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/comment2.png.jpg" alt=""></a>
                            </div>
                            <div class="post_info">
                                <span><a href="#">admin</a> says:</span>
                                <a href="blog-details.html">Quisque semper nunc</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="shop_toolbar t_bottom">
                    <div class="pagination">
                        {!! $blogs->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
