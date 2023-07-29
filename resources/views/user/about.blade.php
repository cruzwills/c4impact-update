@extends('layouts.app')

@section('content')

    <!--Page Title-->
    <section class="page-title bg-color-1 text-center">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-18.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>About Us</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

        <!-- about-section -->
        <section class="about-section sec-pad">
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
                                    <p>Who We Are</p>
                                    <h3>Center for Impact Evaluation Association and Research Design</h3>
                                </div>
                                <div class="text wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                    <p>The company is supported by associate consultants engaged in
                                        conducting specific consulting assignments. It has a well-established record of accomplishment as
                                        an innovative and value-adding company that operates within the development sector. We have
                                        registered to operate in Namibia and South Africa. In Kenya, our work is implemented through
                                        our sister firm called Darian Consulting Services. Our services include:</p>
                                </div>
                                <ul class="list-item clearfix wow slideInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                                    <li>Data Analytics</li>
                                    <li>Monitoring and Evaluation (M&E) </li>
                                    <li>Grant Writing</li>
                                </ul>
                                <div class="btn-box wow slideInUp" data-wow-delay="900ms" data-wow-duration="1500ms"><a href="{{ route('contact') }}" class="theme-btn style-one">Contact Us</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->

    <!-- feature-style-two -->
    <section class="feature-style-two mt-5 pt-5" id="c-vision">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 inner-column">
                    <div class="inner-box wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h3>Our Mission</h3>
                        <p>Lorem ipsum dolor amet consectetur adipisicing sed eiusmod tempor incididunt ut labore magna
                            aliqua enim minim veniam quis nostrud exercitation ullamco.</p>
                        <ul class="list-item">
                            <li>Various Analysis Options.</li>
                            <li>Page Load Details.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 inner-column">
                    <div class="inner-box wow fadeInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <h3>Our Vision</h3>
                        <div class="text">
                            <p>Lorem ipsum dolor amet consectetur adipisicing sed eiusmod tempor incididunt ut labore magna
                                aliqua enim minim veniam quis nostrud exercitation ullamco.</p>
                            <p>Reprehenderit in voluptate velit esse cillum dolore fugiat nulla pariatur sint.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-style-two end -->
    <!-- about-section -->
    <section class="about-section pb-0" id="c-history">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                    <div id="content_block_01">
                        <div class="content-box">
                            <div class="sec-title wow slideInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <p class="text-center">Our History</p>
                            </div>
                            <div class="text wow slideInUp" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <p>The Center for Impact Evaluation Association and Research Design (CFIERD) was founded in
                                    2017 as a private limited company that is engaged in social research designs, monitoring
                                    and evaluation, impact evaluations and environmental assessments, mobile data collection
                                    tools and data analysis service. The company is supported by associate consultants
                                    engaged by the company to conduct specific consulting assignments. It has a
                                    well-established record of accomplishment as an innovative and a value-adding company
                                    operating within the development sector.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end -->

    <!-- team-section -->
    <section class="team-section text-center sec-pad">
        <div class="auto-container">
            <div class="sec-title">
                <p>Our Team</p>
                <h2>Meet The Team</h2>
            </div>
            <div class="inner-content">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{ asset('assets/images/team/Shylock.jpg')}}" alt="" height="420" width="360">
                                    <ul class="social-links">
                                        <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="about.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="about.html">Dr. Shylock Muyengwa</a></h3>
                                    <span class="designation">Director and Managing Consultant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block" style="height: 200px; width:200px;">
                        <div class="team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{asset('assets/images/team/Ennie.png')}}" alt="">
                                    <ul class="social-links">
                                        <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="about.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="about.html">Ennie Flora Gatsi</a></h3>
                                    <span class="designation">Chief Operations Officer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{asset('assets/images/team/Bornwell.jpg')}}" alt="">
                                    <ul class="social-links">
                                        <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="about.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="about.html">Bornwell Makava</a></h3>
                                    <span class="designation">GIS Specialist</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row clearfix pt-5">
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{asset('assets/images/team/Roy.jpg')}}" alt="">
                                    <ul class="social-links">
                                        <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="about.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="about.html">Roy Matangira</a></h3>
                                    <span class="designation">Research Associate</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-15 team-block">
                        <div class="team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{asset('assets/images/team/Moses.png')}}" alt="">
                                    <ul class="social-links">
                                        <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="about.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="about.html">Moses Vera</a></h3>
                                    <span class="designation">Chief Analytics Officer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 team-block">
                        <div class="team-block-one wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="assets/images/team/team-3.jpg" alt="">
                                    <ul class="social-links">
                                        <li><a href="about.html"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="about.html"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="about.html"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="about.html">Thomas Olsen</a></h3>
                                    <span class="designation">Regional Leader</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-section end -->
@endsection
