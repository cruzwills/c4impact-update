<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CFIERD</title>

    <link rel="icon" href="{{ asset('assets/images/favicon.ico" type="image/x-icon') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/font-awesome-all.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/imagebg.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/color/theme-color.css')}}" id="jssDefault" rel="stylesheet">
    <link href="{{ asset('assets/css/switcher-style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet">

    @livewireStyles
</head>

<body>

    <header class="main-header">
        <div class="outer-container">
            <div class="header-upper clearfix">
                <div class="outer-box">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="index-2.html"><img src="{{ asset('assets/images/LOGO 2_0.jpg')}}" width="55"  alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-left">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li class="current"><a href="index-2.html">Home</a>

                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Portfolio</a>
                                        <ul>
                                            <li><a href="service.html">Data Analysis</a></li>
                                            <li><a href="service-2.html">Grant Writing</a></li>
                                            <li><a href="service-2.html">Impact Assessment</a></li>
                                            <li><a href="service-2.html">Survey Design</a></li>
                                            <li><a href="service-2.html">Third Party M & E</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">News and Impact</a>
                                        <ul>
                                            <li><a href="about.html">Element</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">About Us</a>
                                        <ul>
                                            <li><a href="service-element.html">Our History</a></li>
                                            <li><a href="faq-element.html">Our Pillars</a></li>
                                            <li><a href="choose-element.html">Our Team</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Opportunities</a>
                                        <ul>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                            <li><a href="blog-standard.html">Blog Standard</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

                <div class="menu-right-content pull-right" style="padding-top:30px;">
                    <div class="phone">Call Us <a href="tel:880762009">+263 785 134 123</a></div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="index-2.html"><img src="assets/images/small-logo.png" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index-2.html"><img src="assets/images/logo-2.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@example.com">info@example.com</a></li>
                </ul>
            </div>
            <div class="social-links">
                <ul class="clearfix">
                    <li><a href="index-2.html"><span class="fab fa-twitter"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-facebook-square"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-pinterest-p"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-instagram"></span></a></li>
                    <li><a href="index-2.html"><span class="fab fa-youtube"></span></a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->


    <!-- banner-section -->
    <section class="banner-section">
        <div class="pattern-box">
            <div class="pattern-1 wow slideInDown" data-wow-delay="500ms" data-wow-duration="1500ms" style="background-image: url(assets/images/shape/pattern-1.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/pattern-2.png);"></div>
        </div>
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <h1>Data Analytics with CFIERD.</h1>
                        <p>Center for Impact Evaluation Association and Research Design (CFIERD) is engaged in social research designs, monitoring and evaluation, impact evaluations and environmental assessments, mobile data collection tools and data analysis service.</p>
                        <div class="btn-box">
                            <a href="about-us.html" class="theme-btn style-one">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image-box wow slideInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <figure class="image image-1"><img src="assets/images/banner/banner-1.png" alt=""></figure>
                        <figure class="image image-2 float-bob-y"><img src="assets/images/banner/banner-2.png" alt=""></figure>
                        <figure class="image image-3 wow slideInDown" data-wow-delay="500ms" data-wow-duration="1500ms"><img src="assets/images/banner/banner-5.png" alt=""></figure>
                        <figure class="image image-4"><img src="assets/images/banner/banner-3.png" alt=""></figure>
                        <figure class="image image-5 rotate-me"><img src="assets/images/banner/banner-4.png" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->

    <!-- about-section -->
    <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 image-column">
                    <div id="image_block_01">
                        <div class="image-box wow slideInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <figure class="image js-tilt"><img src="assets/images/resource/illustration-2.png" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                    <div id="content_block_01">
                        <div class="content-box">
                            <div class="sec-title wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <p>About CFIERD</p>
                                <h2>CFIERD Provides Realtime Data Solutions.</h2>
                            </div>
                            <div class="text wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <p>Dolor sit amet consectetur elit sed eiusmod tempor incidi dunt labore  dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip ex commodo consequat.duis aute irure dolor in reprehenderit.</p>
                            </div>
                            <ul class="list-item clearfix wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                <li>Various Analysis Options</li>
                                <li>Page Load Details (time, size, number of requests)</li>
                                <li>Waterfall, Video and Report History</li>
                            </ul>
                            <div class="btn-box wow slideInUp" data-wow-delay="900ms" data-wow-duration="1500ms"><a href="about.html" class="theme-btn style-one">Read More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->

    <!-- service-section -->
    <section class="service-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <p>Best Services</p>
                <h2>Explore Our Services</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-file"></i></div>
                            <h3><a href="service.html">Big Data Consulting</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-machine-learning"></i></div>
                            <h3><a href="service.html">Machine Learning</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-data-analytics"></i></div>
                            <h3><a href="service.html">Data Analytics</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-laptop"></i></div>
                            <h3><a href="service.html">Computer Vision</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-data-integration"></i></div>
                            <h3><a href="service.html">Internet Of Things</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                    <div class="service-block-one wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-robot"></i></div>
                            <h3><a href="service.html">Artificial Intelligence</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-section end -->

    <!-- cta-section -->
    <section class="cta-section bg-color-2">
        <div class="pattern-box">
            <div class="pattern-1" style="background-image: url(assets/images/shape/pattern-7.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/pattern-8.png);"></div>
        </div>
        <div class="auto-container">
            <div class="content-box text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <h2>Get Ready to Start with CFIERD</h2>
                <a href="index-2.html" class="theme-btn style-three">Learn More</a>
            </div>
        </div>
    </section>
    <!-- cta-sectione end -->

    <!-- main-footer -->
    <footer class="main-footer">
        <div class="auto-container">
            <div class="footer-top">
                <div class="widget-section wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index-2.html"><img src="assets/images/LOGO.jpg" alt=""></a></figure>
                                <div class="text">
                                    <p>Lorem ipsum dolor amet consectetur adipielit sed eiusm tempor incididunt ut labore dolore.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Quick Link</h3>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="index-2.html">Company History</a></li>
                                        <li><a href="index-2.html">About Us</a></li>
                                        <li><a href="index-2.html">Contact Us</a></li>
                                        <li><a href="index-2.html">Services</a></li>
                                        <li><a href="index-2.html">Privacy Policy</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                                    <h3>Services</h3>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <li><a href="index-2.html">Data Analysis</a></li>
                                        <li><a href="index-2.html">Grant Writing</a></li>
                                        <li><a href="index-2.html">Impact Assessment</a></li>
                                        <li><a href="index-2.html">Survey Design</a></li>
                                        <li><a href="index-2.html">Third Party M&E</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contact Info</h3>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <li>Address: 15 Ridge Road, Avondale, Harare</li>
                                        <li>Phone: +263 779 970 322 | +263 779777244 | +263 71 900 3123</li>
                                        <li><a href="mailto:info@c4impacteval.org">Email: info@c4impacteval.org</a></li>
                                    </ul>
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom clearfix">
                <div class="copyright pull-left">
                    <p><a href="index-2.html">CFIERD</a> &copy; {{ date('Y') }} All Right Reserved</p>
                </div>
                <ul class="footer-nav pull-right">
                    <li><a href="index-2.html">Terms of Service</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->

    <!-- jequery plugins -->
    <script src="{{ asset('assets/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.js')}}"></script>
    <script src="{{ asset('assets/js/wow.js')}}"></script>
    <script src="{{ asset('assets/js/validation.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('assets/js/appear.js')}}"></script>
    <script src="{{ asset('assets/js/scrollbar.js')}}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.js')}}"></script>
    <script src="{{ asset('assets/js/jQuery.style.switcher.min.js')}}"></script>
    <script src="{{ asset('assets/js/plugins.js')}}"></script>
    <script src="{{ asset('assets/js/text_animation.js')}}"></script>

    <!-- main-js -->
    <script src="{{ asset('assets/js/script.js')}}"></script>
    @livewireScripts
</body>

</html>
