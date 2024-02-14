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
                        <li>Sustainability</li>
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
                 <div class="col-lg-12 col-md-12">
                    <div class="about_content">
                        <h1 style="text-align: center">SUSTAINABLITY</h1>
                        <p>At M-TEX Resources, we passionately support worker rights, equitable pay, and sustainability in the fashion industry. By adhering to these values, we enable our customers to make ethical and ecologically conscious purchasing decisions. Moreover, we also promise not to use any components that come from animals in any of our goods.</p>
                        <p>By adhering to strict codes of behavior and international standards, we hope to provide a model for ethical business operations. In addition to being consistent with our basic principles, this unwavering dedication to moral standards enables our clients to make decisions that are in line with their ethical convictions and personal style.</p>
                        <p>We are following international standards and code of conduct.</p>
                        <h4 style="font-size: 20px">ISO Certified</h4>
                        <p class="text-danger">In order to increase customer satisfaction via satisfying customer requirements, this international standard encourages the adoption of a process approach during the development, implementation, and effectiveness improvement of a quality management system.</p>
                        <h4 style="font-size: 20px">amfori@BSCI</h4>
                        <p>Amfori BSCI is an international-recognized social accountability standard that ensure ethical and compliance across your supply chain.</p>
                        <h4 style="font-size: 20px">amfori@BEPI</h4>
                        <p>amfori BEPI (short for amfori business environment performance initiative). It helps companies and their business partners identify and address sustainability issues and focus improvement efforts on topics most relevant to operational activities.</p>
                        <h4 style="font-size: 20px">ACCORD</h4>
                        <p>The International Accord began as the Accord of fire and building safety in Bangladesh in 2013, The 5-year agreement was created to advance workplace safety and address the prevalence of factory accident in the textile and garments industry in Bangladesh. The agreement was initially signed by 40 brands and retailers, 2 global trade unions. During this agreement, more than 220 brands and retailers become signatories to the accord.</p>
                        <h4 style="font-size: 20px">Textile Exchange</h4>
                        <p>Textile Exchange is a global nonprofit. With a robust membership representing leading Brands, retailer and suppliers, Textile exchange a positively impacting the climate through accelerating the use of preferred materials across the global textile industry.</p>
                        <h4 style="font-size: 20px">Global Recycled Standard</h4>
                        <p>The GRS is an international voluntary, full product standard that seta requirements for third-party certification of the recycled content. Chain of custody, social and environmental practice and chemical restriction. The GRS is intended to meet the needs of companies looking to verify the recycled content of their product (both finished and intermediate) and to verify responsible social, environmental and chemical practice in their production.</p>
                        <h4 style="font-size: 20px">OEKO-TEX (Standard – 100)</h4>
                        <p>STANDARD 100 By OEKO-TEX is one of the world’s best-known labels for textile tested for harmful substances.</p>
                        <h4 style="font-size: 20px">GOTS (Global Textile Standard)</h4>
                        <p>The Global Organic Textile Standard (GOTS) is a voluntary, certified standard that covers all aspects of the production of all natural fibers of organic status including textile processing, manufacturing and packaging, Labelling, exportation, importation and distribution.</p>
                        <h4 style="font-size: 20px">Friend Of ZGHC -Vendor</h4>
                        <p>This allows us to gain a deeper understanding of ZDHC’S work further, M-Tex will have access to ZDHC solutions, platform, gateway, Roadmap to zero Toolkit, supplier to zero and training to gain more insight and effective tools for implementing sustainable chemical management all our wet process activities. As part of the “Friend”-Vendors category, we are allowed to access ZDHC Comprehensive report and share own performance aligned with the mission, vision and purpose of ZDHC which support us in fulfilling our sustainability.</p>
                        <h4 style="font-size: 20px">Higg Index</h4>
                        <p>The Higg Index is an apparel and footwear self-assessment standard for assessing environmental and social sustainable throughout the supply chain. It was developed by the sustainable apparel coalition, a nonprofit organization founded by a group of fashion companies and the United States government environmental protection Agency. Across topics such as water use, carbon emissions and labor conditions; consumer goods. Manufacturers, government, NGO’s and consumers can use the Higg Index to inform their individual sustainable strategies and drive collective industry transformations.</p>
                        <h4 style="font-size: 20px">Better work</h4>
                        <p>Better Work a collaboration between the United Nations “International Labour Organization (ILO) and the International Finance Corporation (IFC) a member of the World Bank group isa comprehensive programmed bringing together all levels of the garments industry to improve working conditions, respect of workers’ Labour rights and boost the competitiveness of apparel and footwear business.</p>
                    </div>
                </div>

             </div>
         </div>
         <!--about section end-->
     </div>
 </div>
 <!--blog area start-->
<section class="blog_section color_two mb-62 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 m-auto">
                <div class="section_title title_style2">
                   <h2 class="mb-3">ZXY Certifications</h2>
                   <h5></h5>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="blog_carousel blog_column3 owl-carousel">
                    {{-- litem --}}
                    <div class="col-lg-3 pt-5">
                        <article class="single_blog text-center">
                            <figure>
                                <div class="blog_thumb">
                                    <a><img style="width: 50%; margin: 0 auto;" src="{{ asset('frontend/img/sustainability/1.jpeg') }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                <h4 class="post_title"><a>GOTS (Global Textile Standard)</a></h4>
                                    <footer class="btn_more">
                                        <p> The Global Organic Textile Standard (GOTS) is a voluntary, certified standard that covers</p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                        <div class="col-lg-12 m-auto text-center">
                            <div class="popup" onclick="myFunction('popup1')">
                                <strong class="pt-5">Read More</strong>
                                <span class="popuptext" id="popup1">The Global Organic Textile Standard (GOTS) is a voluntary, certified standard that covers all aspects of the production of all natural fibres of organic status including textile processing, manufacturing, packaging, labelling, exportation, importation and distribution.</span>
                            </div>
                        </div>
                    </div>
                    {{-- litem --}}
                    {{-- litem --}}
                    <div class="col-lg-3 pt-5">
                        <article class="single_blog text-center">
                            <figure>
                                <div class="blog_thumb">
                                    <a><img style="width: 50%; margin: 0 auto;" src="{{ asset('frontend/img/sustainability/2.jpeg') }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                <h4 class="post_title"><a>Friend of ZDHC - Vendor</a></h4>
                                    <footer class="btn_more">
                                        <p>This allows us to gain a deeper understanding of ZDHC’s work. Further, ZXY will have access to ZDHC Solutions, Platform, Gateway, Roadmap to Zero</p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                        <div class="col-lg-12 m-auto text-center">
                            <div class="popup" onclick="myFunction('popup11')">
                                <strong class="pt-5">Read More</strong>
                                <span class="popuptext" id="popup11">This allows us to gain a deeper understanding of ZDHC’s work. Further, ZXY will have access to ZDHC Solutions, Platform, Gateway, Roadmap to Zero toolkit, Supplier to Zero and training to gain more insights and effective tools for implementing sustainable chemical management in all our wet processing activities. As part of the ‘Friend - Vendors’ category, we are allowed to access ZDHC comprehensive report and share own performances aligned with the mission, vision and purpose of ZDHC, which supports us in fulfilling our sustainability roadmap 2025 and 2030 commitments for our shared environment, where we operate globally.</span>
                            </div>
                        </div>
                    </div>
                    {{-- litem --}}
                    {{-- litem --}}
                    <div class="col-lg-3 pt-5">
                        <article class="single_blog text-center">
                            <figure>
                                <div class="blog_thumb">
                                    <a><img style="width: 50%; margin: 0 auto;" src="{{ asset('frontend/img/sustainability/3.jpeg') }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                <h4 class="post_title"><a>EcoVadis 2023 (Silver)</a></h4>
                                    <footer class="btn_more">
                                        <p>Since its founding in 2007, EcoVadis has grown to become the world’s largest and most trusted provider of business sustainability</p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                        <div class="col-lg-12 m-auto text-center">
                            <div class="popup" onclick="myFunction('popup12')">
                                <strong class="pt-5">Read More</strong>
                                <span class="popuptext" id="popup12">Since its founding in 2007, EcoVadis has grown to become the world’s largest and most trusted provider of business sustainability ratings, creating a global network of more than 100,000+ rated companies. The EcoVadis sustainability assessment methodology is at the heart of Ratings and Scorecards and is an evaluation of how well a company has integrated the principles of Sustainability/CSR into their business and management system covering Environment, Labour & Human Rights, Ethics and Sustainable Procurement. The 'Silver' level places us in the top 25% of companies with Sustainability Ratings.</span>
                            </div>
                        </div>
                    </div>
                    {{-- litem --}}
                    {{-- litem --}}
                    <div class="col-lg-3 pt-5">
                        <article class="single_blog text-center">
                            <figure>
                                <div class="blog_thumb">
                                    <a><img style="width: 50%; margin: 0 auto;" src="{{ asset('frontend/img/sustainability/4.jpeg') }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                <h4 class="post_title"><a>Higg Index</a></h4>
                                    <footer class="btn_more">
                                        <p>The Higg Index is an apparel and footwear industry self-assessment standard for assessing environmental and social sustainability</p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                        <div class="col-lg-12 m-auto text-center">
                            <div class="popup" onclick="myFunction('popup13')">
                                <strong class="pt-5">Read More</strong>
                                <span class="popuptext" id="popup13">The Higg Index is an apparel and footwear industry self-assessment standard for assessing environmental and social sustainability throughout the supply chain. it was developed by the Sustainable Apparel Coalition, a nonprofit organization founded by a group of fashion companies and the United States government Environmental Protection Agency. Across topics such as water use, carbon emissions, and labor conditions; consumer goods brands, retailers, manufacturers, governments, NGOs and consumers can use the Higg Index to inform their individual sustainability strategies and drive collective industry transformation.</span>
                            </div>
                        </div>
                    </div>
                    {{-- litem --}}
                    {{-- litem --}}
                    <div class="col-lg-3 pt-5">
                        <article class="single_blog text-center">
                            <figure>
                                <div class="blog_thumb">
                                    <a><img style="width: 50%; margin: 0 auto;" src="{{ asset('frontend/img/sustainability/5.jpeg') }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                <h4 class="post_title"><a>ISO (Certified Company) - 9001:2015</a></h4>
                                    <footer class="btn_more">
                                        <p>This International Standard promotes the adoption of a process approach when developing, implementing and improving the effectiveness.</p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                        <div class="col-lg-12 m-auto text-center">
                            <div class="popup" onclick="myFunction('popup6')">
                                <strong class="pt-5">Read More</strong>
                                <span class="popuptext" id="popup6">This International Standard promotes the adoption of a process approach when developing, implementing and improving the effectiveness of a quality management system, to enhance customer satisfaction by meeting customer requirements</span>
                            </div>
                        </div>
                    </div>
                    {{-- litem --}}
                    {{-- litem --}}
                    <div class="col-lg-3 pt-5">
                        <article class="single_blog text-center">
                            <figure>
                                <div class="blog_thumb">
                                    <a><img style="width: 50%; margin: 0 auto;" src="{{ asset('frontend/img/sustainability/6.jpeg') }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                <h4 class="post_title"><a>Textile Exchange</a></h4>
                                    <footer class="btn_more">
                                        <p>Textile Exchange is a global nonprofit. With a robust membership representing leading brands, retailers, and suppliers, Textile</p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                        <div class="col-lg-12 m-auto text-center">
                            <div class="popup" onclick="myFunction('popup15')">
                                <strong class="pt-5">Read More</strong>
                                <span class="popuptext" id="popup15">Textile Exchange is a global nonprofit. With a robust membership representing leading brands, retailers, and suppliers, Textile Exchange is positively impacting the climate through accelerating the use of preferred materials across the global textile industry.</span>
                            </div>
                        </div>
                    </div>
                    {{-- litem --}}
                    {{-- litem --}}
                    <div class="col-lg-3 pt-5">
                        <article class="single_blog text-center">
                            <figure>
                                <div class="blog_thumb">
                                    <a><img style="width: 50%; margin: 0 auto;" src="{{ asset('frontend/img/sustainability/7.jpeg') }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                <h4 class="post_title"><a>Global Recycled Standard</a></h4>
                                    <footer class="btn_more">
                                        <p>The GRS is an international, voluntary, full product standard that sets requirements for third-party certification of recycled</p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                        <div class="col-lg-12 m-auto text-center">
                            <div class="popup" onclick="myFunction('popup16')">
                                <strong class="pt-5">Read More</strong>
                                <span class="popuptext" id="popup16">The GRS is an international, voluntary, full product standard that sets requirements for third-party certification of recycled content, chain of custody, social and environmental practices and chemical restrictions. The GRS is intended to meet the needs of companies looking to verify the recycled content of their products (both finished and intermediate) and to verify responsible social, environmental and chemical practices in their production.</span>
                            </div>
                        </div>
                    </div>
                    {{-- litem --}}
                    {{-- litem --}}
                    <div class="col-lg-3 pt-5">
                        <article class="single_blog text-center">
                            <figure>
                                <div class="blog_thumb">
                                    <a><img style="width: 50%; margin: 0 auto;" src="{{ asset('frontend/img/sustainability/8.jpeg') }}" alt=""></a>
                                </div>
                                <figcaption class="blog_content">
                                <h4 class="post_title"><a>OEKO-TEX (Standard 100)</a></h4>
                                    <footer class="btn_more">
                                        <p>STANDARD 100 by OEKO-TEX® is one of the world's best-known labels for textiles tested for harmful substances.</p>
                                    </footer>
                                </figcaption>
                            </figure>
                        </article>
                        <div class="col-lg-12 m-auto text-center">
                            <div class="popup" onclick="myFunction('popup17')">
                                <strong class="pt-5">Read More</strong>
                                <span class="popuptext" id="popup17">STANDARD 100 by OEKO-TEX® is one of the world's best-known labels for textiles tested for harmful substances.</span>
                            </div>
                        </div>
                    </div>
                    {{-- litem --}}
            </div>
        </div>
    </div>
</section>
<!--blog area end-->
@endsection

@section('footer_scrip')
<script>
    function myFunction(popupId) {
        var popup = document.getElementById(popupId);
        if (popup) {
            popup.classList.toggle("show");
        }
    }
</script>
@endsection
