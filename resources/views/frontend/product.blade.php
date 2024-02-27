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
                        <li>Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- shop-area -->
<div class="product_area color_two mb-62 py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="text-center" style="font-weight: 900">
                    @if ($subcategorys->isNotEmpty())
                        @if ($subcategorys->first()->rel_to_cat == '')
                            <h2>{{ $subcategorys->first()->rel_to_cat }}</h2>
                        @else
                            @if ($categorys->isNotEmpty() && Route::currentRouteName() == 'our.product')
                                <h2>{{ $categorys->first()->name }}</h2>
                            @elseif (Route::currentRouteName() == 'our_sub_product')
                                <h2>{{ $subcategorys->first()->category_id }}</h2>
                            @else
                                <h2>{{ $subcategorys->first()->rel_to_cat->name }}</h2>
                            @endif
                        @endif
                    @else
                        @if ($categorys->isNotEmpty() && Route::currentRouteName() == 'our.product')
                            <h2>{{ $categorys->first()->name }}</h2>
                        @else
                            {{-- <h2>{{ $categorys->first()->name }}</h2> --}}N/A
                        @endif
                    @endif

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 m-auto">
               <div class="product-header">
                    <div class="product_tab_btn">
                        <ul class="nav" role="tablist">
                            @foreach ($subcategorys as $key => $subcategory)
                                <li>
                                    <a class="{{ $key === 0 ? 'active' : '' }}" data-bs-toggle="tab" href="#{{ $subcategory->name }}" role="tab" aria-controls="{{ $subcategory->name }}" aria-selected="true">
                                        {{ $subcategory->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-content">
            @foreach ($subcategorys as $key =>$subcategory)
                <div class="tab-pane fade show {{ $key === 0 ? 'active' : '' }}" id="{{ $subcategory->name }}" role="tabpanel">
                    <div class="row">
                        @foreach ($products as $product)
                            @if($product->subcategory_id == $subcategory->id)
                                <div class="col-lg-3">
                                    <div class="product_items">
                                        <article class="single_product">
                                            <figure>
                                                <div class="product_thumb">
                                                    <a class="primary_img"><img src="{{ asset('uploads/product') }}/{{ $product->image }}" alt=""></a>
                                                    <a class="secondary_img"><img src="{{ asset('uploads/product') }}/{{ $product->image }}" alt=""></a>

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
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="shop_toolbar t_bottom">
                    <div class="pagination">
                        {!! $products->links() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- shop-area-end -->
@endsection


