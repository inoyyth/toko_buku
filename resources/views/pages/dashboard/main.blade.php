@extends('layouts.default')
@section('title', $data['title'] . ' | bhinnekaweb.com')
@section('content')
<div class="site-main-container">
    <!-- Start top-post Area -->
    <section class="top-post-area pt-10">
        <div class="container no-padding">
            <div class="row small-gutters">
                <div class="col-lg-8 top-post-left">
                    <div class="feature-image-thumb relative">
                        <div class="overlay overlay-bg"></div>
                        <img class="img-fluid" src="img/top-post1.jpg" alt="">
                    </div>
                    <div class="top-post-details">
                        <ul class="tags">
                            <li><a href="#">Food Habit</a></li>
                        </ul>
                        <a href="image-post.html">
                            <h3>A Discount Toner Cartridge Is Better Than Ever.</h3>
                        </a>
                        <ul class="meta">
                            <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                            <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                            <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 top-post-right">
                    <div class="single-top-post">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="img/top-post2.jpg" alt="">
                        </div>
                        <div class="top-post-details">
                            <ul class="tags">
                                <li><a href="#">Food Habit</a></li>
                            </ul>
                            <a href="image-post.html">
                                <h4>A Discount Toner Cartridge Is Better Than Ever.</h4>
                            </a>
                            <ul class="meta">
                                <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="single-top-post mt-10">
                        <div class="feature-image-thumb relative">
                            <div class="overlay overlay-bg"></div>
                            <img class="img-fluid" src="img/top-post3.jpg" alt="">
                        </div>
                        <div class="top-post-details">
                            <ul class="tags">
                                <li><a href="#">Food Habit</a></li>
                            </ul>
                            <a href="image-post.html">
                                <h4>A Discount Toner Cartridge Is Better</h4>
                            </a>
                            <ul class="meta">
                                <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="news-tracker-wrap">
                        <h6><span>Breaking News:</span>   <a href="#">Astronomy Binoculars A Great Alternative</a></h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End top-post Area -->
    <!-- Start latest-post Area -->
    <section class="latest-post-area pb-120">
        <div class="container no-padding">
            <div class="row">
                <div class="col-lg-8 post-list">
                    <!-- Start latest-post Area -->
                    <div class="latest-post-wrap">
                        <h4 class="cat-title">Latest News</h4>
                        <div class="single-latest-post row align-items-center">
                            <div class="col-lg-5 post-left">
                                <div class="feature-img relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="img/l1.jpg" alt="">
                                </div>
                                <ul class="tags">
                                    <li><a href="#">Lifestyle</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-7 post-right">
                                <a href="image-post.html">
                                    <h4>A Discount Toner Cartridge Is
                                    Better Than Ever.</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                </ul>
                                <p class="excert">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                </p>
                            </div>
                        </div>
                        <div class="single-latest-post row align-items-center">
                            <div class="col-lg-5 post-left">
                                <div class="feature-img relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="img/l2.jpg" alt="">
                                </div>
                                <ul class="tags">
                                    <li><a href="#">Science</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-7 post-right">
                                <a href="image-post.html">
                                    <h4>A Discount Toner Cartridge Is
                                    Better Than Ever.</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                </ul>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                </p>
                            </div>
                        </div>
                        <div class="single-latest-post row align-items-center">
                            <div class="col-lg-5 post-left">
                                <div class="feature-img relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="img/l3.jpg" alt="">
                                </div>
                                <ul class="tags">
                                    <li><a href="#">Travel</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-7 post-right">
                                <a href="image-post.html">
                                    <h4>A Discount Toner Cartridge Is
                                    Better Than Ever.</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                </ul>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                </p>
                            </div>
                        </div>
                        <div class="single-latest-post row align-items-center">
                            <div class="col-lg-5 post-left">
                                <div class="feature-img relative">
                                    <div class="overlay overlay-bg"></div>
                                    <img class="img-fluid" src="img/l4.jpg" alt="">
                                </div>
                                <ul class="tags">
                                    <li><a href="#">Fashion</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-7 post-right">
                                <a href="image-post.html">
                                    <h4>A Discount Toner Cartridge Is
                                    Better Than Ever.</h4>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                </ul>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End latest-post Area -->
                    
                    <!-- Start banner-ads Area -->
                    <div class="col-lg-12 ad-widget-wrap mt-30 mb-30">
                        <img class="img-fluid" src="img/banner-ad.jpg" alt="">
                    </div>
                    <!-- End banner-ads Area -->
                    <!-- Start popular-post Area -->
                    <div class="popular-post-wrap">
                        <h4 class="title">Popular Posts</h4>
                        <div class="feature-post relative">
                            <div class="feature-img relative">
                                <div class="overlay overlay-bg"></div>
                                <img class="img-fluid" src="img/f1.jpg" alt="">
                            </div>
                            <div class="details">
                                <ul class="tags">
                                    <li><a href="#">Food Habit</a></li>
                                </ul>
                                <a href="image-post.html">
                                    <h3>A Discount Toner Cartridge Is Better Than Ever.</h3>
                                </a>
                                <ul class="meta">
                                    <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                    <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                    <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mt-20 medium-gutters">
                            <div class="col-lg-6 single-popular-post">
                                <div class="feature-img-wrap relative">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="img/f2.jpg" alt="">
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">Travel</a></li>
                                    </ul>
                                </div>
                                <div class="details">
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is
                                        Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                    </ul>
                                    <p class="excert">
                                        Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 single-popular-post">
                                <div class="feature-img-wrap relative">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="img/f3.jpg" alt="">
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">Travel</a></li>
                                    </ul>
                                </div>
                                <div class="details">
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is
                                        Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 </a></li>
                                    </ul>
                                    <p class="excert">
                                        Lorem ipsum dolor sit amet, consecteturadip isicing elit, sed do eiusmod tempor incididunt ed do eius.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End popular-post Area -->
                    <!-- Start relavent-story-post Area -->
                    <div class="relavent-story-post-wrap mt-30">
                        <h4 class="title">Relavent Stories</h4>
                        <div class="relavent-story-list-wrap">
                            <div class="single-relavent-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="img/r1.jpg" alt="">
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">Lifestyle</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is
                                        Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                    <p class="excert">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                    </p>
                                </div>
                            </div>
                            <div class="single-relavent-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="img/r2.jpg" alt="">
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">Science</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is
                                        Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                    <p class="excert">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                    </p>
                                </div>
                            </div>
                            <div class="single-relavent-post row align-items-center">
                                <div class="col-lg-5 post-left">
                                    <div class="feature-img relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="img/r3.jpg" alt="">
                                    </div>
                                    <ul class="tags">
                                        <li><a href="#">Travel</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 post-right">
                                    <a href="image-post.html">
                                        <h4>A Discount Toner Cartridge Is
                                        Better Than Ever.</h4>
                                    </a>
                                    <ul class="meta">
                                        <li><a href="#"><span class="lnr lnr-user"></span>Mark wiens</a></li>
                                        <li><a href="#"><span class="lnr lnr-calendar-full"></span>03 April, 2018</a></li>
                                        <li><a href="#"><span class="lnr lnr-bubble"></span>06 Comments</a></li>
                                    </ul>
                                    <p class="excert">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End relavent-story-post Area -->
                </div>
                <!--sidebar-->
                @include('includes.sidebar')
                <!-- end sidebar-->
            </div>
        </div>
    </section>
</div>
@endsection