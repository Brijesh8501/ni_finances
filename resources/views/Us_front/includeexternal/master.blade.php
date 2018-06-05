<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Conceptly, Responsive, Business Template, Bootstrap 4,">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Conceptly - Multipurpose Business HTML5 template</title>
    @stack('uppercsscontent')
</head>

<body>


<!-- Start: Preloader
============================= -->

<div class="preloader">
    <div class="loader" align="center">
        <span><b>N</b></span>
        <span><b>I</b></span>
        <span></span>
        <span></span>
    </div>
</div>

<!-- End: Preloader
============================= -->

<!-- Start: Header Top
============================= -->
<section id="header-top">
    <div class="container">

        <div class="row">
            <div class="col-lg-9 col-md-12 text-lg-left mb-2 mb-lg-0">
                <ul class="header-info d-inline-block">
                    <li><a href="#"><i class="fas fa-phone"></i>+1 514-286-4242</a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i>example@example.com</a></li>
                    <li><a href="#"><i class="fas fa-question"></i>Ask Your Question</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-12 text-center text-lg-right mb-lg-0 mb-1">
                <ul class="header-social d-inline-block">
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End: Header Top
============================= -->

<!-- Start: Search
============================= -->

<div id="search">
    <a href="#" id="close-btn">
        <i class="fa fa-times"></i>
    </a>
    <div>
        <input placeholder="type here" id="searchbox" type="search" />
        <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
    </div>
</div>

<!-- End: Search
============================= -->

<!-- Start: Navigation
============================= -->
<section class="navbar-wrapper">
    <div class="navbar-area sticky-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-6">
                    <div class="logo main">
                        <a href="index.html"><img class="responsive" src="{{  asset('images/us_frontimg/logo.png') }}" alt="Startkit"></a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-10 d-none d-lg-block text-right">
                    <nav class="main-menu">
                        <ul>
                            <li class="active">
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="service">Services</a>
                            </li>
                            <li>
                                <a href="portfolio">Portfolio</a>
                            </li>
                            <li>
                                <a href="about">About</a>
                            </li>
                            <li>
                                <a href="blog">Blog</a>
                            </li>
                            <li><a href="contact">Contact</a></li>
                        </ul>
                    </nav>
                    <ul class="header-right-bar d-lg-inline-block d-none">
                        <li>
                            <a class="quote-btn boxed-btn" href="#">Get a Quote</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-6 text-right">
                    <div class="search-icon"><a class="" href="#search"><i class="fas fa-search"></i></a></div>
                    <div class="cart-icon">
                        <div class="cart-icon-wrapper">
                            <i class="fas fa-shopping-basket"></i>
                            <span class="cart-count">2</span>
                            <h6>Shopping Cart</h6>
                            <p>0 item - $0.00</p>
                        </div>

                        <div class="header-cart-box-wrapper cart-position-style1">
                            <div class="single-cart-box">
                                <div class="cart-image">
                                    <a href="cart.html"><img src="https://dummyimage.com/75x85/232323/fff" alt="" />
                                    </a>
                                </div>
                                <div class="cart-content">
                                    <div class="cart-heading">
                                        <a href="cart.html"> <span class="cart-qty">2 x</span> Wordpress theme</a>
                                    </div>
                                    <div class="cart-price">$200.00</div>
                                </div>
                                <div class="cart-remove deft-remove-icon">
                                    <a href="#"><i class="fas fa-times"></i></a>
                                </div>
                            </div>

                            <div class="clearfix"></div>
                            <div class="single-cart-box">
                                <div class="cart-image">
                                    <a href="cart.html"><img src="https://dummyimage.com/75x85/232323/fff" alt="" />
                                    </a>
                                </div>
                                <div class="cart-content">
                                    <div class="cart-heading">
                                        <a href="cart.html"> <span class="cart-qty">2 x</span> Wordpress theme</a>
                                    </div>
                                    <div class="cart-price">$200.00</div>
                                </div>
                                <div class="cart-remove deft-remove-icon">
                                    <a href="#"><i class="fas fa-times"></i></a>
                                </div>
                            </div>


                            <div class="cart-subtotal">
                                <span class="subttl-text">Grand total</span>
                                <span class="subttl-amt">$465.00</span>
                            </div>

                            <div class="cart-checkout-btn">
                                <a href="checkout.html" class="boxed-btn">Check out <i class="checkout-dir-icon fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Mobile Menu -->
        <div class="mobile-menu-area d-lg-none">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mobile-menu">
                            <nav class="mobile-menu-active">
                                <ul>
                                    <li class="active">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="service.php">Services</a>
                                    </li>
                                    <li class="c-dropdowns">
                                        <a href="">Portfolio</a>
                                        <ul class="cr-dropdown-menu">
                                            <li>
                                                <a href="portfolio-2-column.html">Portfolio 2 Column</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-3-column.html">Portfolio 3 Column</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-4-column.html">Portfolio 4 Column</a>
                                            </li>
                                            <li>
                                                <a href="portfolio-masonary.html">Portfolio Masonry</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="c-dropdowns">
                                        <a href="">Pages</a>
                                        <ul class="cr-dropdown-menu">
                                            <li>
                                                <a href="about-us.php">About</a>
                                            </li>
                                            <li>
                                                <a href="gallery.php">Gallery</a>
                                            </li>
                                            <li>
                                                <a href="pricing.php">Pricing</a>
                                            </li>
                                            <li>
                                                <a href="service.php">Services</a>
                                            </li>
                                            <li>
                                                <a href="">Other Pages</a>
                                                <ul class="cr-sub-dropdown-menu">
                                                    <li>
                                                        <a href="404.html">404 Page</a>
                                                    </li>
                                                    <li>
                                                        <a href="coming-soon.html">Coming Soon</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>

                                    <li class="c-dropdowns">
                                        <a href="">Blog</a>
                                        <ul class="cr-dropdown-menu">
                                            <li>
                                                <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                            </li>
                                            <li>
                                                <a href="blog-full-width.html">Blog Full Width</a>
                                            </li>
                                            <li>
                                                <a href="blog-masonary.html">Blog Masonary</a>
                                            </li>
                                            <li>
                                                <a href="blog-single.html">Blog Details</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li><a href="../Us_front/contact.blade.php">Contact</a></li>
                                </ul>
                            </nav>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mobile Menu -->
    </div>
</section>
<!-- End: Navigation
============================= -->

<!-- Master content starts-->
    @yield('homecontent')

    <!-- Master content ends-->

<!-- Start: Footer Sidebar
 ============================= -->
<footer id="footer-widgets">
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-4">
                <aside class="widget widget_about">
                    <div class="footer-logo"><img src="{{  asset('images/us_frontimg/logo.png') }}" alt=""></div>
                    <p>There are many variations of dummy passages of Lorem Ipsum a available, but the majority have suffered that is alteration in some that form  injected humour or randomised.</p>
                    <ul class="widget-social">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>

                </aside>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12 mb-lg-0 mb-4">
                <aside class="widget widget_links">
                    <h4 class="widget-title">Usefull Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </aside>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 mb-lg-0 mb-md-0 mb-4">
                <aside class="widget widget_recent">
                    <h4 class="widget-title">Latest News</h4>
                    <ul>
                        <li class="latest-news">
                            <a href="#">
                                <img src="{{  asset('images/us_frontimg/news-widget/news-widget-01.jpg') }}" alt="">
                                <h5>Top Energy Trend Business</h5>
                                <p>August 15, 2017</p>
                            </a>
                        </li>
                        <li class="latest-news">
                            <a href="#">
                                <img src="{{  asset('images/us_frontimg/news-widget/news-widget-02.jpg') }}" alt="">
                                <h5>Chief Financial Officer Role</h5>
                                <p>August 15, 2017</p>
                            </a>
                        </li>
                        <li class="latest-news">
                            <a href="#">
                                <img src="{{  asset('images/us_frontimg/news-widget/news-widget-03.jpg ') }}" alt="">
                                <h5>Our to Sustainability Team</h5>
                                <p>August 15, 2017</p>
                            </a>
                        </li>
                    </ul>
                </aside>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <aside class="widget widget_contact">
                    <h4 class="widget-title">Contact information</h4>
                    <ul>
                        <li><i class="fas fa-map-marker"></i>1102 Saint Marys, Jackson Blvd, Chicago, United States</li>
                        <li><i class="fas fa-envelope"></i>exampleemail.com</li>
                        <li><i class="fas fa-phone"></i>(123) 456 789 1002</li>
                    </ul>
                    <form class="#" action="#">
                        <input type="text" placeholder="Enter your email">
                        <button class="subscribe-btn boxed-btn" type="submit">Subscribe</button>
                    </form>
                </aside>
            </div>
        </div>

    </div>
</footer>
<!-- End: Footer Sidebar
============================= -->

<!-- Start: Footer Copyright
============================= -->

<section id="footer-copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 text-lg-left text-center mb-lg-0 mb-3 copyright-text"><p>Copyrights © 2018 All Rights Reserved, Powered by <a href="#">Conceptly</a>.</p></div>
            <div class="col-lg-6 col-12">
                <ul class="text-lg-right text-center payment-method">
                    <li><a href="#"><i class="fab fa-paypal"></i></a></li>
                    <li><a href="#"><i class="fab fa-cc-visa"></i></a></li>
                    <li><a href="#"><i class="fab fa-cc-mastercard"></i></a></li>
                    <li><a href="#"><i class="fab fa-cc-amazon-pay"></i></a></li>
                </ul>
                <a href="#" class="scrollup boxed-btn"><i class="fas fa-arrow-up"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- End: Footer Copyright
============================= -->

@stack('downjscontent')
</body>

</html>