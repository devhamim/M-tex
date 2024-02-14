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
                 {{-- @if ( $abouts->first() != null) --}}
                 <div class="col-lg-12 col-md-12">
                    <div class="about_content">
                        <h1 style="text-align: center">About Us</h1>
                        <p>With an amazing 29-year history in the textile sector, we are a reputable garment buying and sourcing organization. We also have an impact on the development of cutting-edge solutions for manufacturers, retailers, and brands. We have continually stayed true to our purpose, which is to combine outstanding product design and quality with a dedication to sustainable development, compliance excellence, and creative design solutions. We do this with state-of-the-art product and innovation centers strategically located in Bangladesh.</p>
                        <h4 style="font-size: 20px">Our Philosophy,</h4>
                        <p>At the core of our business philosophy lies an unwavering commitment to our customers. Every facet of our operations, spanning from initial contact, design, pricing, to production, is centered around prioritizing customer satisfaction. We specialize in sustainable apparel product development and employ tailored sourcing strategies to meet the unique needs of our clientele.</p>
                        <p>Our dedication to bringing innovation to our work is evident in our continuous pursuit of newness. We proudly offer an extensive multi-category product range, meticulously manufactured in compliant partner factories. As part of our ongoing commitment to sustainability, we persistently refine and advance our sustainable roadmap.</p>
                        <h4 style="font-size: 20px">Our Mission</h4>
                        <p>Our mission is to cultivate enduring partnerships through the fulfillment of our customers' and end consumers' needs, guided by professional and ethical production values. We uphold an unwavering commitment to uncompromised quality and provide fully integrated customer support encompassing marketing and technical expertise. Positioned as a trusted partner for numerous brands and their teams, we steadfastly adhere to the principles of doing things right. Our steadfast advocacy for ethics and transparency is consistently reflected in our daily practices.</p>
                        <h4 style="font-size: 20px">Our Vision</h4>
                        <p>Our vision has always been based on the principles of cooperation, passion, and people. We are unwavering in our resolve to constantly improve our all-encompassing strategy for product creation, sourcing, and purchasing. The primary objective is to methodically handle a variety of needs while furthering our efforts in safe product practices.</p>
                        <h4 style="font-size: 20px">Our Values</h4>
                        <p>At the core of our corporate culture lies a steadfast commitment to creating a positive impact. Our strategic journey commenced with the implementation of our social and ethical compliance blueprint throughout our supply chain.</p>
                        <p>Driven by a dedication to sustainability, we actively collaborate with leading eco-communities within the industry to continually enhance our preferred fiber portfolio. Our ongoing efforts aim not only to elevate industry practices but also to foster positive environmental and societal changes within the communities we serve.</p>
                    </div>
                </div>
             </div>
         </div>
         <!--about section end-->
     </div>
</div>

<div class="about_page_section" style="background: #f1f1f1">
    <div class="container">
         <!--about section area -->
         <div class="about_section">
             <div class="row">
                <div class="col-lg-12 col-md-12 mt-5">
                    <div class="about_content">
                        <h1 style="text-align: center">Our Management:</h1>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a><img src="{{ asset('frontend/img/about/4.jpg') }}" alt=""></a>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <figcaption class="blog_content">
                                    <h4 class="post_title">Shamima Islam</h4>
                                    <h5>CEO & Chairman</h5>
                                        <footer class="btn_more">
                                            <p>Characterized by qualities of relentlessness, practicality, sensitivity, and discipline, Shamima holds a deep appreciation for the intricacies of the human mind. She values individuals who bring integrity to their work and places a premium on authenticity.</p>
                                            <p>A proponent of outdoor pursuits, Shamima finds relaxation in the company of friends, family, and the tranquility of nature, all while engaging in fulfilling endeavors with M-Tex. Spirituality occupies a significant space in her life, instilling a belief in the interconnectedness of all beings. Her guiding mantra is "Live and let live," reflecting a philosophy that encourages living with passion, demonstrating compassion towards others, and finding joy in laughter and dance as she navigates life's journey.</p>
                                        </footer>
                                    </figcaption>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 col-md-9">
                                <figcaption class="blog_content">
                                    <h4 class="post_title text-end">Md. Moinul Islam</h4>
                                    <h5 class="text-end">Managing Director and COO</h5>
                                        <footer class="btn_more">
                                            <p>With an extensive career spanning over 32 years in various capacities, including technical, operational, and marketing roles, Moinul Islam reflects on his enduring commitment to the industry. He emphasizes, "It is the product and, more significantly, our people that truly motivate me." Moinul seamlessly integrates strategic commercial thinking with a profound passion for sustainability.</p>
                                            <p>For him, the essence lies in harmonizing business objectives with a genuine love for sustainable practices. Moinul finds his inspiration in assembling a team of specialists dedicated to eco-conscious and ethical principles. He affirms that building this team is not just a professional endeavor but his lifeblood, driving him with excitement for the myriad possibilities that the future holds. Moinul Islam's journey embodies a harmonious blend of commercial acumen, sustainability advocacy, and the profound impact of fostering a team aligned with ethical values.</p>
                                        </footer>
                                </figcaption>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a><img src="{{ asset('frontend/img/about/3.jpg') }}" alt=""></a>
                                        </div>
                                    </figure>
                                </article>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a><img src="{{ asset('frontend/img/about/2.jpg') }}" alt=""></a>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <figcaption class="blog_content">
                                    <h4 class="post_title">Md. Mohaimenul Islam</h4>
                                    <h5>Sourcing and innovation</h5>
                                        <footer class="btn_more">
                                            <p>A dedicated adherent to our motto, "Passion for perfection," Mohaimenul brings with him a robust technical background that has serendipitously led him to discover his true calling in Bangladesh. Enthusiastically expressing his affection for the people, the locale, and our products, Mohaimenul's ardor for textile technology has taken him on an inspiring journey across diverse and extraordinary places in Bangladesh.</p>
                                            <p>In his own words, Mohaimenul views each day as an opportunity for fresh growth, believing that one can extract the best from every moment. "I love the process of continual learning and find great joy in collaborating with the team, united in our pursuit of a common goal," he shares. Mohaimenul's commitment encapsulates not only his passion for perfection but also his zest for ongoing development and collaborative efforts within the team.</p>
                                        </footer>
                                    </figcaption>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-9 col-md-9">
                                <figcaption class="blog_content">
                                    <h4 class="post_title text-end">Md. Mehedi Hasan</h4>
                                    <h5 class="text-end">Technical Head</h5>
                                        <footer class="btn_more">
                                            <p>Mehedi aspires to be an outstanding technical ally and a valuable resource for M-Tex Supply partners, contributing significantly to the broader industry. His current focus revolves around virtual development, particularly in the realm of 3D technical applications, and he actively seeks to integrate this cutting-edge technology into various facets of the M-Tex process.</p>
                                            <p>Witnessing the success of our team brings Mehedi immense joy, and he underscores the invigorating impact of the technology we are currently employing. His dedication to being an exceptional technical ally extends beyond personal achievement to a collective enthusiasm that propels the entire team toward greater heights.</p>
                                        </footer>
                                    </figcaption>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a><img src="{{ asset('frontend/img/about/1.jpg') }}" alt=""></a>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3">
                                <article class="single_blog">
                                    <figure>
                                        <div class="blog_thumb">
                                            <a><img src="{{ asset('frontend/img/about/5.png') }}" alt=""></a>
                                        </div>
                                    </figure>
                                </article>
                            </div>
                            <div class="col-lg-9 col-md-9">
                                <figcaption class="blog_content">
                                    <h4 class="post_title">Morshed Alam</h4>
                                    <h5>Supply Chain Management</h5>
                                        <footer class="btn_more">
                                            <p>Relentless pursuit of perfection, along with operational skill and strategic acumen to redefine supply chain paradigms, has defined Morshed Alam's illustrious career. He leads revolutionary projects as a visionary leader, boosting productivity, reducing risks, and building organizational resilience.</p>
                                            <p>Setting the standard for ethical supply chain management, Morshed is a leader in sustainable practices, supporting programs that put social responsibility, ethical sourcing, and environmental stewardship first. Through talent development, teamwork, and the cultivation of an excellence culture, his leadership inspires group achievement and organizational expansion.</p>
                                            <p>Morshed Alam is a shining example of creativity, morality, and influence in the world of supply chains. Come celebrate his lasting legacy as a real giant of the supply chain industry, a visionary leader, and a change-maker.</p>
                                        </footer>
                                    </figcaption>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
         </div>
         <!--about section end-->
     </div>
 </div>
@endsection
