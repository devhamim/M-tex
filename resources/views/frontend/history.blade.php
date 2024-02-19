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
                        <li>history</li>
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
                        <h1 style="text-align: center">Our Promise</h1>
                        <p>At M-Tex Resources we go beyond merely delivering high quality manufacturing solutions at competitive prices. We are dedicated to offering a wide range of services so that our clients may rely on us for knowledgeable assistance at each stage of the procedure. From initial concept and design to the last phases of deliver, as well as ongoing marketing and merchandising assistance, we are with you every step of the way. To put it simply we take care of everything to ensure client satisfaction prompt delivery, affordable prices, flawless design and unwavering quality.</p>

                        <h4 style="font-size: 20px">TRUSTWORTHY</h4>
                        <p>• As a prestigious brand, we take great satisfaction in upholding a high standard for our goods as well as the services we offer both internally and outside.</p>
                        <p>• By actively sharing our expertise of the most recent advancements in the PPE sector, we keep our clients informed and provide them with state-of-the-art solutions.</p>
                        <p>• We focus on overall cost considerations in our industry-specific product design to give our clients the best possible value. </p>
                        <p>• Maintaining strict standards for ethics, environmental responsibility, and quality, we are dedicated to a comprehensive strategy that embodies our steadfast commitment to excellence.</p>

                        <h4 style="font-size: 20px">INNOVATIVE</h4>
                        <p>• As leaders in the development of new industry standards, we are at the forefront of technical breakthroughs in work attire that is intrinsically flame-retardant.</p>
                        <p>• We are passionate about finding creative solutions that beyond the norm to address the particular problems that our clients face.</p>
                        <p>• Our fabric creation process starts at the fiber level and aims to produce materials with exceptional and one-of-a-kind qualities.</p>
                        <p>• Understanding that different sectors have different safety concerns, we proactively build solutions that really answer the unique requirements of the tasks at hand.</p>

                        <h4 style="font-size: 20px">EXPERTS</h4>
                        <p>• Our staff is committed to providing our customers with expert counsel by being the most qualified consultants in the FR industry. We strive to be the leading specialists in this regard. </p>
                        <p>• By working closely together, we are able to fully comprehend the nuances of our clients' needs and customize solutions that exactly satisfy their demands.</p>
                        <p>• We are dedicated to finding the best solution for each and every customer, putting their safety first, and we offer assistance with risk assessments.</p>
                        <p>• We have an impressive 82-year history in the textile sector and a deep grasp of textiles; our experience is proof of our unwavering dedication to quality.</p>

                        <h4 style="font-size: 20px">Committed to full service at always: </h4>
                        <ul style="list-style: disc; margin-left: 25px">
                            <li>Concept and Design.</li>
                            <li>Sourcing & product development.</li>
                            <li>Supply chain.</li>
                            <li>Product planning and execution.</li>
                            <li>Quality control and supplier assessment.</li>
                            <li>Vendor compliance.</li>
                            <li>Market Expansion.</li>
                            <li>Marketing and merchandising support.</li>
                            <li>Shipping, customs clearance and delivery.</li>
                            <li>Joint venture with suppliers.</li>
                            <li>Negotiations.</li>
                            <li>Production process assessment.</li>
                            <li>Creative problem solving.</li>
                        </ul>
                    </div>
                </div>
             </div>
         </div>
         <!--about section end-->
     </div>
</div>

@endsection
