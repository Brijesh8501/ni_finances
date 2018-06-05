@extends('Us_front.includeexternal.master')
@section('homecontent')
    @include('Us_front.includeexternal.titlebar')

    <!-- Start: Contact Info
    ============================= -->
    
    <section id="contact-info" class="section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-lg-0 mb-5 single-box text-center">
                    <img src="assets/img/icons/address.png" alt="">
                    <h3>Address</h3>
                    <p>450 Fifth Avenue, 31th floor New York <br> NY 10118-3299 USA</p>
                </div>
                <div class="col-lg-4 col-sm-6 mb-lg-0 mb-5 single-box text-center">
                    <img src="assets/img/icons/mail.png" alt="">
                    <h3>E-mail</h3>
                    <p>info@website.com <br>contact@website.com</p>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0 single-box text-center">
                    <img src="assets/img/icons/phone.png" alt="">
                    <h3>Phone</h3>
                    <p>+001 989 159 081, <br>+002 167 427 7542</p>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Contact Info
    ============================= -->

    <!-- Start: Contact Info
    ============================= -->
    
    <section id="send-message">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 order-2 order-md-2">
                    <div id="map"></div>
                </div>
                <div class="col-lg-6 col-md-6 order-md-2 order-sm-1 contact-us-form">
                    <h3>Send Us a Message</h3>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" placeholder="Phone" required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" placeholder="Subject">
                        </div>
                        <div class="col-sm-12 form-group">
                            <textarea class="form-control" rows="3" placeholder="Your Mesage"></textarea>
                        </div>
                        <button class="boxed-btn">Send Us a Message</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Contact Info
    ============================= -->

    <!-- Start: Call to action
    ============================= -->

    <section id="cta">
        <div class="container">
            <div class="row cta">
                <div class="col-lg-9 col-md-7 col-12 text-md-left text-center mb-md-0 mb-4">
                    <h3>Become a Part of Community !</h3>
                    <p>Get in touch with us and send some basic info for a quick quote</p>
                </div>
                <div class="col-lg-3 col-md-5 col-12 text-md-right text-center">
                    <a href="#" class="boxed-btn purchase-btn"><i class="fas fa-shopping-cart"></i>purchase now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Call to action
    ============================= -->
    @endsection
@push('uppercsscontent')
    <link rel="shortcut icon" href="{{  asset('images/us_frontimg/favicon.png ') }}" type="image/x-icon" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{  asset('css/us_frontcss/style.css') }}">
    <link rel="stylesheet" href="{{  asset('css/us_frontcss/responsive.css') }}">

@endpush
@push('downjscontent')
     <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <!-- Scripts -->
    <script src="{{  asset('js/us_frontjs/jquery-3.2.1.min.js') }}"></script>
    <script src="{{  asset('js/us_frontjs/popper.min.js') }}"></script>
    <script src="{{  asset('js/us_frontjs/bootstrap.min.js') }}"></script>
    <script src="{{  asset('js/us_frontjs/jquery.sticky.js') }}"></script>
    <script src="{{  asset('js/us_frontjs/owl.carousel.min.js') }}"></script>
    <script src="{{  asset('js/us_frontjs/jquery.shuffle.min.js') }}"></script>
    <script src="{{  asset('js/us_frontjs/jquery.counterup.min.js') }}"></script>
    <script src="{{  asset('js/us_frontjs/wow.min.js') }}"></script>
    <script src="{{  asset('js/us_frontjs/jquery.meanmenu.min.js') }}"></script>
    <script src="{{  asset('js/us_frontjs/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{  asset('js/us_frontjs/jquery.hoverdir.js') }}"></script>

    <!-- Map Script -->
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqoWGSQYygV-G1P5tVrj-dM2rVHR5wOGY"></script>
        <script src="asset/js/map-script.js"></script>

    <!-- Custom Script -->
    <script src="{{  asset('js/us_frontjs/custom.js') }}"></script>

@endpush