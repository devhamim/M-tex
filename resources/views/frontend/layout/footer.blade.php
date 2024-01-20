<footer class="footer_widgets color_two">
    <div class="footer_top">
        <div class="container">
            <div class="row">
               <div class="col-lg-5">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="widgets_container contact_us">
                               <div class="footer_logo">
                                   @if ($setting->first()->footer_logo != null)
                                        <a href="{{ url('/') }}"><img src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" alt=""></a>
                                    @endif
                               </div>
                                <div class="footer_desc">
                                    @if ( $setting->first()->about != null)
                                        <p>{{ $setting->first()->about }}</p>
                                    @endif
                                </div>

                                @if ($setting->first()->address != null)
                                <p><span>Address:</span> {{ $setting->first()->address }}</p>
                                @endif
                                @if ($setting->first()->number != null)
                                    <p><span>Phone:</span> <a href="tel:{{ $setting->first()->number }}">{{ $setting->first()->number }}</a></p>
                                @endif
                                @if ($setting->first()->email != null)
                                    <p><span>Email:</span> <a target="_blank" href="{{ $setting->first()->email }}">{{ $setting->first()->email }}</a></p>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4">
                            <div class="widgets_container widget_menu">
                                <h3>Pages</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ route('our.blog') }}">About</a></li>
                                        <li><a href="{{ route('our.clients') }}">Client</a></li>
                                        <li><a href="{{ route('our.blog') }}">Blog</a></li>
                                        <li><a href="{{ route('our.privacy.policy') }}">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8 col-sm-8">
                            <div class="widgets_container widget_menu">
                                <h3>Newsletter</h3>
                                <div class="subscribe_form">
                                    <form id="mc-form" class="mc-form footer-newsletter" >
                                        <input id="mc-email" type="email" autocomplete="off" placeholder="Enter you email address" />
                                        <button id="mc-submit"><i class="zmdi zmdi-email-open"></i></button>
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts text-centre">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div><!-- mailchimp-alerts end -->
                                </div>
                                <div class="footer_social">
                                    <h3>follow us on</h3>
                                    <ul>
                                        <li><a href="{{ $setting->first()->facebook }}"><i class="zmdi zmdi-facebook"></i></a></li>
                                        <li><a href="{{ $setting->first()->twitter }}"><i class="zmdi zmdi-twitter"></i></a></li>
                                        <li><a href="{{ $setting->first()->instagram }}"><i class="zmdi zmdi-instagram"></i></a></li>
                                        <li><a href="{{ $setting->first()->linkedin }}"><i class="zmdi zmdi-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer_bottom_container">
                        <div class="copyright_area">
                                @if ($setting->first()->footer != null)
                                    <p>{{ $setting->first()->footer }}  Design & Development by <a href="https://nugortech.com/" class="text-primary">Nugortechit</a></p>
                                @endif
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
