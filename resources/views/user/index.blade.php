@extends('layouts.app')

@section('template_linked_css')
    <style>
        .carousel-item img {
  max-height: 75vh; /* or any height value you prefer */
}
    </style>
@endsection

@section('content')
        <!-- banner-section -->
        <section>
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100 h-50vh" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-white">First slide label</h5>
                    <p class="text-white">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    <div class="btn-box wow slideInUp" data-wow-delay="600ms" data-wow-duration="1200ms"><a href="{{ route('about')}}" class="theme-btn style-one">Read More</a></div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-white">Second slide label</h5>
                    <p class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <div class="btn-box wow slideInUp" data-wow-delay="600ms" data-wow-duration="1200ms"><a href="{{ route('about')}}" class="theme-btn style-one">Read More</a></div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/Slides/img%20(22).webp" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-white">Third slide label</h5>
                    <p class="text-white mt-2 pt-2">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    <div class="btn-box wow slideInUp" data-wow-delay="600ms" data-wow-duration="1200ms"><a href="{{ route('about')}}" class="theme-btn style-one">Read More</a></div>
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
                                <figure class="image js-tilt"><img src="{{ asset('assets/images/statistics/Statistics.jpg')}}" alt=""></figure>
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
                                <div class="btn-box wow slideInUp" data-wow-delay="900ms" data-wow-duration="1500ms"><a href="{{ route('about')}}" class="theme-btn style-one">Read More</a></div>
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
                                <h3><a href="service.html">Data Analysis</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-machine-learning"></i></div>
                                <h3><a href="service.html">Grant Writing</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInRight" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-data-analytics"></i></div>
                                <h3><a href="service.html">Environmental Impact Assessments</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-laptop"></i></div>
                                <h3><a href="service.html">Environmental Impact Assessments</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-data-integration"></i></div>
                                <h3><a href="service.html">Third Party M&E</a></h3>
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
                    <a href="index-2.html" class="theme-btn style-one">Learn More</a>
                </div>
            </div>
        </section>
        <!-- cta-sectione end -->
@endsection
