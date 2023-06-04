@extends('layouts.app')

@section('content')
    <!--Page Title-->
    <section class="page-title bg-color-1 text-center">
        <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-18.png);"></div>
        <div class="auto-container">
            <div class="content-box">
                <h1>News & Impact</h1>
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Blog</a></li>
                    <li>News & Impact</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->


    <!-- blog-grid -->
    <section id="news" class="sidebar-page-container blog-grid">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 col-sm-12 content-side">
                    <div class="blog-grid-content">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-holder">
                                            <figure class="image-box"><img src="assets/images/news/news-1.jpg" alt=""></figure>
                                            <div class="post-date"><i class="fas fa-calendar-alt"></i><p>Dec 28</p></div>
                                            <div class="link"><a href="{{ route('blog-detail')}}"><i class="fas fa-arrow-right"></i></a></div>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-info">
                                                <li><span>by</span>&nbsp;<a href="{{ route('blog-detail')}}">Nicolas</a></li>
                                                <li><a href="{{ route('blog-detail')}}">3 Comments</a></li>
                                            </ul>
                                            <h3><a href="{{ route('blog-detail')}}">How to become a sucess- ful businessman.</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-holder">
                                            <figure class="image-box"><img src="assets/images/news/news-2.jpg" alt=""></figure>
                                            <div class="post-date"><i class="fas fa-calendar-alt"></i><p>Dec 27</p></div>
                                            <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i></a></div>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-info">
                                                <li><span>by</span>&nbsp;<a href="blog-details.html">Hinter</a></li>
                                                <li><a href="blog-details.html">5 Comments</a></li>
                                            </ul>
                                            <h3><a href="blog-details.html">Services that will Grow Your Business for you!</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-holder">
                                            <figure class="image-box"><img src="assets/images/news/news-3.jpg" alt=""></figure>
                                            <div class="post-date"><i class="fas fa-calendar-alt"></i><p>Dec 26</p></div>
                                            <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i></a></div>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-info">
                                                <li><span>by</span>&nbsp;<a href="blog-details.html">Tailor</a></li>
                                                <li><a href="blog-details.html">4 Comments</a></li>
                                            </ul>
                                            <h3><a href="blog-details.html">Online Trends That Have Gone Stale.</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-holder">
                                            <figure class="image-box"><img src="assets/images/news/news-4.jpg" alt=""></figure>
                                            <div class="post-date"><i class="fas fa-calendar-alt"></i><p>Dec 25</p></div>
                                            <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i></a></div>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-info">
                                                <li><span>by</span>&nbsp;<a href="blog-details.html">Tailor</a></li>
                                                <li><a href="blog-details.html">4 Comments</a></li>
                                            </ul>
                                            <h3><a href="blog-details.html">Additional Services that will Grow Your...</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-holder">
                                            <figure class="image-box"><img src="assets/images/news/news-5.jpg" alt=""></figure>
                                            <div class="post-date"><i class="fas fa-calendar-alt"></i><p>Dec 24</p></div>
                                            <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i></a></div>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-info">
                                                <li><span>by</span>&nbsp;<a href="blog-details.html">Nicolas</a></li>
                                                <li><a href="blog-details.html">4 Comments</a></li>
                                            </ul>
                                            <h3><a href="blog-details.html">Throwback Old Online Trends That Have....</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-holder">
                                            <figure class="image-box"><img src="assets/images/news/news-6.jpg" alt=""></figure>
                                            <div class="post-date"><i class="fas fa-calendar-alt"></i><p>Dec 23</p></div>
                                            <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i></a></div>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-info">
                                                <li><span>by</span>&nbsp;<a href="blog-details.html">Tailor</a></li>
                                                <li><a href="blog-details.html">4 Comments</a></li>
                                            </ul>
                                            <h3><a href="blog-details.html">Google indeing Issue not really an issue</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-holder">
                                            <figure class="image-box"><img src="assets/images/news/news-7.jpg" alt=""></figure>
                                            <div class="post-date"><i class="fas fa-calendar-alt"></i><p>Dec 22</p></div>
                                            <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i></a></div>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-info">
                                                <li><span>by</span>&nbsp;<a href="blog-details.html">Nicolas</a></li>
                                                <li><a href="blog-details.html">4 Comments</a></li>
                                            </ul>
                                            <h3><a href="blog-details.html">Invalid Data Markup did cause Action</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 news-block">
                                <div class="news-block-one wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                    <div class="inner-box">
                                        <div class="image-holder">
                                            <figure class="image-box"><img src="assets/images/news/news-8.jpg" alt=""></figure>
                                            <div class="post-date"><i class="fas fa-calendar-alt"></i><p>Dec 21</p></div>
                                            <div class="link"><a href="blog-details.html"><i class="fas fa-arrow-right"></i></a></div>
                                        </div>
                                        <div class="lower-content">
                                            <ul class="post-info">
                                                <li><span>by</span>&nbsp;<a href="blog-details.html">Hinter</a></li>
                                                <li><a href="blog-details.html">4 Comments</a></li>
                                            </ul>
                                            <h3><a href="blog-details.html">Google might be having issues with...</a></h3>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt labore.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 sidebar-side">
                    <div class="sidebar">
                        <div class="sidebar-widget sidebar-search">
                            <div class="widget-title">
                                <h3>Search</h3>
                            </div>
                            <div class="widget-content">
                                <form action="http://azim.commonsupport.com/Detox/blog-grid.html" method="post">
                                    <div class="form-group">
                                        <input type="search" name="search-field" placeholder="Search" required="">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="sidebar-widget sidebar-categories">
                            <div class="widget-title">
                                <h3>Categories</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="clearfix">
                                    <li><a href="blog-grid.html">Education<span>(32)</span></a></li>
                                    <li><a href="blog-grid.html">Olympiad<span>(7)</span></a></li>
                                    <li><a href="blog-grid.html">Drawing<span>(5)</span></a></li>
                                    <li><a href="blog-grid.html">Science<span>(2)</span></a></li>
                                    <li><a href="blog-grid.html">Science<span>(8)</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-post">
                            <div class="widget-title">
                                <h3>Latest News</h3>
                            </div>
                            <div class="post-inner">
                                <div class="post">
                                    <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/post-1.png" alt=""></a></figure>
                                    <div class="post-date"><i class="far fa-calendar-alt"></i>&nbsp;<p>Dec 25, 2019</p></div>
                                    <h5><a href="blog-details.html">Conse quntur magni eos dolore qui.</a></h5>
                                </div>
                                <div class="post">
                                    <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/post-2.png" alt=""></a></figure>
                                    <div class="post-date"><i class="far fa-calendar-alt"></i>&nbsp;<p>Dec 24, 2019</p></div>
                                    <h5><a href="blog-details.html">What to do with your Old Blog Posts?</a></h5>
                                </div>
                                <div class="post">
                                    <figure class="image-box"><a href="blog-details.html"><img src="assets/images/news/post-3.png" alt=""></a></figure>
                                    <div class="post-date"><i class="far fa-calendar-alt"></i>&nbsp;<p>Dec 23, 2019</p></div>
                                    <h5><a href="blog-details.html">Ten Instagram the Marketing Tips...</a></h5>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget sidebar-tags">
                            <div class="widget-title">
                                <h3>Popular Tags</h3>
                                <div class="widget-content">
                                    <ul class="clearfix">
                                        <li><a href="blog-grid.html">Software</a></li>
                                        <li><a href="blog-grid.html">Design</a></li>
                                        <li><a href="blog-grid.html">Saas</a></li>
                                        <li><a href="blog-grid.html">Code</a></li>
                                        <li><a href="blog-grid.html">Landing Page</a></li>
                                        <li><a href="blog-grid.html">Web</a></li>
                                        <li><a href="blog-grid.html">Detox</a></li>
                                        <li><a href="blog-grid.html">Corporate</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-grid end -->
@endsection
