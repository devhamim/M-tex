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
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->

<!-- contact-area -->
<div class="contact_area pt-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-6 m-auto">
                <div class="text-center">
                    <h3>Contact us</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
               <div class="contact_message content">

                     <p>If you have any questions about our product and our services please do not hesitate to contact with us.</p>

                     <h3 style="margin-bottom: 5px"><strong>M-Tex Resources</strong></h3>
                    <p>Uniqueness | Quality | Commitment</p>
                    <ul>
                        <li><i class="fa fa-map-marker"></i><strong>Register Office:</strong> 20 Sukrabad, Flat No: C2, Dhanmondi, Dhaka – 1207</li>
                        <li><i class="fa fa-map-marker"></i><strong>Corporate Office:</strong> Road No: 11, House No; 532, Baridhara DOHS, Dhaka – 1206.</li>
                        @if ($settings->first()->number != null)
                            <li><i class="fa fa-phone"></i><strong>Mobile No:</strong> <a href="tel:{{$settings->first()->number}}">{{$settings->first()->number}}</a>  </li>
                        @endif
                            <li><i class="fa fa-phone"></i><strong>Tel No:</strong> <a href="tel:+880 48111852">+880 48111852</a>  </li>
                        @if ($settings->first()->email != null)
                            <li><i class="fa fa-envelope-o"></i><a href="{{$settings->first()->email}}">{{$settings->first()->email}}</a></li>
                            @endif
                            <li><i class="fa fa-envelope-o"></i><a href="moinul.islam@mtex-res.com">moinul.islam@mtex-res.com</a></li>
                    </ul>
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
                        <button type="submit"> Send</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- contact-area-end -->
<div class=" mt-60">
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.843894557041!2d90.37510988576508!3d23.75294553369265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b941aaf7b751%3A0xaf31491bf006b21!2s20%20Sukrabad%20Rd%2C%20Dhaka%201215!5e0!3m2!1sen!2sbd!4v1708321213622!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
 </div>
@endsection
