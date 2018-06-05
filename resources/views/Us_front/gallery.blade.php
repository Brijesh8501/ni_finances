@extends('Us_front.includeexternal.master')
@section('homecontent')
    @include('Us_front.includeexternal.titlebar')
    <!-- Start: Gallery Items
    ============================= -->
    <section id="gallery" class="section-padding-top gallery-page">
        <div class="container">

            <div id="gallery-items" class="row gallery-items">
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary1.jpg">
                        <img src="assets/img/gallery/gallary1.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary2.jpg">
                        <img src="assets/img/gallery/gallary2.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary3.jpg">
                        <img src="assets/img/gallery/gallary3.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary4.jpg">
                        <img src="assets/img/gallery/gallary4.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary5.jpg">
                        <img src="assets/img/gallery/gallary5.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary6.jpg">
                        <img src="assets/img/gallery/gallary6.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary7.jpg">
                        <img src="assets/img/gallery/gallary7.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary8.jpg">
                        <img src="assets/img/gallery/gallary8.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary9.jpg">
                        <img src="assets/img/gallery/gallary9.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary10.jpg">
                        <img src="assets/img/gallery/gallary2.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary6.jpg">
                        <img src="assets/img/gallery/gallary6.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary7.jpg">
                        <img src="assets/img/gallery/gallary7.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary8.jpg">
                        <img src="assets/img/gallery/gallary8.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary9.jpg">
                        <img src="assets/img/gallery/gallary9.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>
                <div class="gallery-load col-lg-4 col-md-6 col-sm-12 single-item">
                    <a href="assets/img/gallery/gallary1.jpg">
                        <img src="assets/img/gallery/gallary10.jpg" alt="" />
                        <div><i class="fas fa-expand"></i></div>
                    </a>
                </div>


                <div class="col-12 more-load">
                    <!-- Load More Content Button  -->
                    <a class="load-btn boxed-btn" href="#" id="gallery-load-pro"><span id="gallery-ti-port-load" class="ti-port-load-hide"></span>Load More <i class="fas fa-angle-down"></i></a>
                </div>

            </div>
        </div>
    </section>
    <!-- End: Gallery Items
    ============================= -->
@endsection
@push('uppercsscontent')
    <link rel="shortcut icon" href="{{  asset('images/us_frontimg/favicon.png ') }}" type="image/x-icon" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{  asset('css/us_frontcss/style.css') }}">
    <link rel="stylesheet" href="{{  asset('css/us_frontcss/responsive.css') }}">


    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
@endpush
@push('downjscontent')
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
    <!--     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqoWGSQYygV-G1P5tVrj-dM2rVHR5wOGY"></script>
        <script src="asset/js/map-script.js"></script>
     -->
    <!-- Custom Script -->
    <script src="{{  asset('js/us_frontjs/custom.js') }}"></script>

@endpush