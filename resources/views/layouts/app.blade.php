<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="icon" href="{{ asset('assets/images/favicon.ico" type="image/x-icon') }}">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap"
        rel="stylesheet">

    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/font-awesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/imagebg.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/color/theme-color.css" id="jssDefault') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/switcher-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<body class="boxed_wrapper ltr">

    <header class="main-header">
        <div class="outer-container">
            <div class="header-upper clearfix">
                <div class="outer-box ">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="index-2.html"><img src="{{asset('assets/images/LOGO.png')}}" alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md pull-right  navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="service.html">Services</a></li>
                                    <li class="dropdown"><a href="index-2.html">Pages</a>
                                        <ul class="megamenu">
                                            <li><a href="about.html">About Us</a></li>
                                            <li><a href="service.html">Services One</a></li>
                                            <li><a href="team-element-2.html">Team Elements 02</a></li>
                                            <li><a href="feature-element-1.html">Feature Elements 01</a></li>
                                            <li><a href="portfolio.html">Portfolio Grid</a></li>
                                            <li><a href="service-2.html">Services Two</a></li>
                                            <li><a href="counter-element-1.html">Counter Elements 01</a></li>
                                            <li><a href="feature-element-2.html">Feature Elements 02</a></li>
                                            <li><a href="portfolio-2.html">Portfolio Masonry</a></li>
                                            <li><a href="error.html">Error Page</a></li>
                                            <li><a href="counter-element-2.html">Counter Elements 02</a></li>
                                            <li><a href="about-element-1.html">About Elements 01</a></li>
                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="about-element-2.html">About Elements 02</a></li>
                                            <li><a href="team.html">Our Team</a></li>
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                            <li><a href="service-element.html">Service Elements</a></li>
                                            <li><a href="process-element-1.html">Process Elements 01</a></li>
                                            <li><a href="faq.html">Faq's</a></li>
                                            <li><a href="blog-standard.html">Blog Standard</a></li>
                                            <li><a href="faq-element.html">Faq's Elements</a></li>
                                            <li><a href="process-element-2.html">Process Elements 02</a></li>
                                            <li><a href="pricing.html">Pricing Plan</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="choose-element.html">Choose Elements</a></li>
                                            <li><a href="team-element-1.html">Team Elements 01</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Elements</a>
                                        <ul>
                                            <li class="dropdown"><a href="index-2.html">Feature Elements</a>
                                                <ul>
                                                    <li><a href="feature-element-1.html">Feature Elements 01</a></li>
                                                    <li><a href="feature-element-2.html">Feature Elements 02</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="index-2.html">About Elements</a>
                                                <ul>
                                                    <li><a href="about-element-1.html">About Elements 01</a></li>
                                                    <li><a href="about-element-2.html">About Elements 02</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="index-2.html">Blog Elements</a>
                                                <ul>
                                                    <li><a href="blog-element-1.html">Blog Elements 01</a></li>
                                                    <li><a href="blog-element-2.html">Blog Elements 02</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="index-2.html">Process Elements</a>
                                                <ul>
                                                    <li><a href="process-element-1.html">Process Elements 01</a></li>
                                                    <li><a href="process-element-2.html">Process Elements 02</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="index-2.html">Counter Elements</a>
                                                <ul>
                                                    <li><a href="counter-element-1.html">Counter Elements 01</a></li>
                                                    <li><a href="counter-element-2.html">Counter Elements 02</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="index-2.html">Team Elements</a>
                                                <ul>
                                                    <li><a href="team-element-1.html">Team Elements 01</a></li>
                                                    <li><a href="team-element-2.html">Team Elements 02</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="service-element.html">Service Elements</a></li>
                                            <li><a href="faq-element.html">Faq's Elements</a></li>
                                            <li><a href="choose-element.html">Choose Elements</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="index-2.html">Blog</a>
                                        <ul>
                                            <li><a href="blog-grid.html">Blog Grid</a></li>
                                            <li><a href="blog-masonry.html">Blog Masonry</a></li>
                                            <li><a href="blog-standard.html">Blog Standard</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="index-2.html"><img src="{{asset('assets/images/LOGO.jpg')}}" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </header>

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

    {{ $slot }}

    <footer class="main-footer">
        <div class="auto-container">
            <div class="footer-top">
                <div class="widget-section wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo"><a href="index-2.html"><img src="assets/images/footer-logo.png" alt=""></a></figure>
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
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                                    <h3>Contact Info</h3>
                                </div>
                                <div class="widget-content">
                                    <ul>
                                        <li>Flat 20, Reynolds Neck, North Hele naville, FV77 8WS</li>
                                        <li><a href="tel:23055873407">+2(305) 587-3407</a></li>
                                        <li><a href="mailto:info@example.com">info@example.com</a></li>
                                    </ul>
                                </div>
                                <ul class="social-links clearfix">
                                    <li><a href="index-2.html"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-vimeo-v"></i></a></li>
                                    <li><a href="index-2.html"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom clearfix">
                <div class="copyright pull-left">
                    <p><a href="index-2.html">Detox</a> &copy; 2020 All Right Reserved</p>
                </div>
                <ul class="footer-nav pull-right">
                    <li><a href="index-2.html">Terms of Service</a></li>
                    <li><a href="index-2.html">Privacy Policy</a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- jequery plugins -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
    <script src="{{ asset('assets/js/appear.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.js') }}"></script>
    <script src="{{ asset('assets/js/jQuery.style.switcher.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/js/text_animation.js') }}"></script>

    <!-- main-js -->
    <script src="{{asset('assets/js/script.js')}}"></script>
    @livewireScripts
</body>

</html>
