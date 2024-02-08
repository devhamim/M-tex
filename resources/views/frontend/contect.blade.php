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
                        <li>Contect</li>
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
                    <h3>contact us</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
               <div class="contact_message content">

                     <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human. qui sequitur mutationem consuetudium lectorum. Mirum est notare quam</p>
                    <ul>
                        <li><i class="fa fa-map-marker"></i><strong>Register Office:</strong> M-Tex Resources Uniqueness | Quality | Commitment 20 Sukrabad, Flat No: C2, Dhanmondi, Dhaka – 1207</li>
                        <li><i class="fa fa-map-marker"></i><strong>Corporate Office:</strong> M-Tex Resources Road No: 11, House No; 532, Baridhara DOHS, Dhaka – 1206.</li>
                        @if ($settings->first()->number != null)
                            <li><i class="fa fa-phone"></i><strong>Mobile No:</strong> <a href="tel:{{$settings->first()->number}}">{{$settings->first()->number}}</a>  </li>
                        @endif
                            <li><i class="fa fa-phone"></i><strong>Tel No:</strong> <a href="tel:+880 48111852">+880 48111852</a>  </li>
                        @if ($settings->first()->email != null)
                            <li><i class="fa fa-envelope-o"></i><a href="#">{{$settings->first()->email}}</a></li>
                        @endif
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116833.95338886736!2d90.41968899999999!3d23.7808405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1705312613142!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
 </div>
@endsection
