<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Finandox - Business HTML Template</title>
    <!-- Stylesheets -->
    <link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet">
    <!-- Color File -->
    <link href="{{ asset('assets/css/color.css')}}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="icon" href="{{ asset('assets/images/favicon.png')}}" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body>
    <div class="page-wrapper">
        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>
       
        @include('frontend.layouts.header')
        @yield('content')
        <!--Search Popup-->
        <div id="search-popup" class="search-popup">
            <div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
            <div class="popup-inner">
                <div class="overlay-layer"></div>
                <div class="search-form">
                    <form method="post" action="https://azim.commonsupport.com/Finandox/index.html">
                        <div class="form-group">
                            <fieldset>
                                <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
                                <input type="submit" value="Search Now!" class="theme-btn">
                            </fieldset>
                        </div>
                    </form>
                    <br>
                    <h3>Recent Search Keywords</h3>
                    <ul class="recent-searches">
                        <li><a href="#">Finance</a></li>
                        <li><a href="#">Idea</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Growth</a></li>
                        <li><a href="#">Plan</a></li>
                    </ul>
                </div>

            </div>
        </div>

        <!-- Banner Section -->
        <section class="banner-section">
            <div class="banner-carousel theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
                <!-- Slide Item -->
                <div class="slide-item">
                    <div class="image-layer lazy-image" data-bg="url('{{ asset('assets/images/main-slider/1.jpg')}}"></div>

                    <div class="auto-container">
                        <div class="content-box">
                            <h3>Making Your Business Idea</h3>
                            <h2>Finan<span>dox </span></h2>
                            <div class="text">Our company is one of the world’s leading management <br>consulting firms. Get in touch here asap.</div>
                            <div class="btn-box"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">-- Our Services --</span></a><a href="#" class="theme-btn btn-style-two"><span class="btn-title">-- Learn More --</span></a></div>
                        </div>
                    </div>
                </div>

                <!-- Slide Item -->
                <div class="slide-item">
                    <div class="image-layer lazy-image" data-bg="url('{{ asset('assets/images/main-slider/5.jpg')}}"></div>

                    <div class="auto-container">
                        <div class="content-box">
                            <h3>Making Your Business Idea</h3>
                            <h2>Finan<span>dox </span></h2>
                            <div class="text">Our company is one of the world’s leading management <br>consulting firms. Get in touch here asap.</div>
                            <div class="btn-box"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">-- Our Services --</span></a><a href="#" class="theme-btn btn-style-two"><span class="btn-title">-- Learn More --</span></a></div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--End Banner Section -->

        <!-- Welcome Setion -->
        <section class="welcome-section pt-0">
            <div class="auto-container">
                <div class="wrapper-box">
                    <div class="row m-0">
                        <!-- Welcome Block One -->
                        <div class="welcome-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="inner-box">
                                <div class="icon-box"><span class="flaticon-analysis"></span></div>
                                <h2>Business Analysis</h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. </div>
                                <div class="read-more"><a href="#">Read More</a></div>
                            </div>
                        </div>
                        <!-- Welcome Block One -->
                        <div class="welcome-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="inner-box" style="background-image: url({{ asset('assets/images/resource/image-1.jpg')}}">
                                <div class="icon-box"><span class="flaticon-tax"></span></div>
                                <h2>Save Your Tax</h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. </div>
                                <div class="read-more"><a href="#">Read More</a></div>
                            </div>
                        </div>
                        <!-- Welcome Block One -->
                        <div class="welcome-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="inner-box">
                                <div class="icon-box"><span class="flaticon-work-1"></span></div>
                                <h2>Business Analysis</h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. </div>
                                <div class="read-more"><a href="#">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section class="about-section">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <div class="image-one">
                                <img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/image-2.jpg')}}" alt="">
                            </div>
                            <div class="image-two wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                                <div class="caption">F.</div>
                                <div class="image-outer"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/image-3.jpg')}}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-box">
                            <div class="sec-title">
                                <div class="sub-title">About Us</div>
                                <h2>We Work With <br>You To Address</h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                            </div>
                            <div class="row">
                                <div class="info-column col-md-6">
                                    <div class="icon-box">
                                        <div class="icon"><img src="{{ asset('assets/images/icons/icon-1.png')}}" alt=""></div>
                                        <h5>Phone Number</h5>
                                        <h2>+897 6765 754</h2>
                                    </div>
                                </div>
                                <div class="info-column col-md-6">
                                    <div class="icon-box">
                                        <div class="icon"><img src="{{ asset('assets/images/icons/icon-2.png')}}" alt=""></div>
                                        <h5>Email Address</h5>
                                        <h2>info@webmail.com</h2>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="services-section">
            <div class="auto-container">
                <div class="wrapper-box">
                    <div class="left-column">
                        <div class="services-content">
                            <div class="sec-title light">
                                <div class="sub-title">Our Services</div>
                                <h2>What Actually We <br>Do Here.</h2>
                            </div>
                            <div class="icon-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                                <div class="icon"><img src="{{ asset('assets/images/icons/icon-3.png')}}" alt=""></div>
                                <h2>Capital Market</h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                            </div>
                            <div class="icon-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                                <div class="icon"><img src="{{ asset('assets/images/icons/icon-4.png')}}" alt=""></div>
                                <h2>Insurance & Planning</h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                            </div>
                            <div class="icon-box wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                                <div class="icon"><img src="{{ asset('assets/images/icons/icon-5.png')}}" alt=""></div>
                                <h2>Financial Strategy</h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-column">
                        <!-- Fact Counter -->
                        <div class="fact-counter">
                            <div class="border-box">
                                <div class="border_top"></div>
                                <div class="border_bottom"></div>
                                <div class="border_middile"></div>
                            </div>
                            <div class="row">

                                <!--Column-->
                                <div class="column counter-column col-md-6">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="icon"><img src="{{ asset('assets/images/icons/icon-6.png')}}" alt=""></div>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="90">0</span><span>%</span>
                                            </div>
                                            <div class="counter-title">Business Monitoring</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column counter-column col-md-6">
                                    <div class="inner wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="icon"><img src="{{ asset('assets/images/icons/icon-7.png')}}" alt=""></div>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="71">0</span><span>%</span>
                                            </div>
                                            <div class="counter-title">Business Growth</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column counter-column col-md-6">
                                    <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="icon"><img src="{{ asset('assets/images/icons/icon-8.png')}}" alt=""></div>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="33">0</span><span>%</span>
                                            </div>
                                            <div class="counter-title">Financial Plan</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column counter-column col-md-6">
                                    <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="icon"><img src="{{ asset('assets/images/icons/icon-9.png')}}" alt=""></div>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="42">0</span><span>%</span>
                                            </div>
                                            <div class="counter-title">Finance Consulting</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column counter-column col-md-6">
                                    <div class="inner wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="icon"><img src="{{ asset('assets/images/icons/icon-10.png')}}" alt=""></div>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="69">0</span><span>%</span>
                                            </div>
                                            <div class="counter-title">Data Analysis</div>
                                        </div>
                                    </div>
                                </div>

                                <!--Column-->
                                <div class="column counter-column col-md-6">
                                    <div class="inner wow fadeInLeft" data-wow-delay="900ms" data-wow-duration="1500ms">
                                        <div class="content">
                                            <div class="icon"><img src="{{ asset('assets/images/icons/icon-11.png')}}" alt=""></div>
                                            <div class="count-outer count-box">
                                                <span class="count-text" data-speed="3000" data-stop="10">0</span><span>%</span>
                                            </div>
                                            <div class="counter-title">business Strategy</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="author-box" style="background-image: url({{ asset('assets/images/background/image-1.jpg')}}">
                            <div class="author-info">
                                <div class="author-thumb"><img src="{{ asset('assets/images/resource/author-1.jpg')}}" alt=""></div>
                                <h2>Rosalina D. William</h2>
                                <div class="designation">Founder</div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod..</div>
                            </div>
                            <div class="signature"><img src="{{ asset('assets/images/resource/signature.png')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="sortable-masonry">

                <div class="auto-container">
                    <div class="row m-0 justify-content-md-between align-items-center">
                        <div class="sec-title">
                            <div class="sub-title">Portfolio</div>
                            <h2>Our Works</h2>
                        </div>
                        <!--Filter-->
                        <div class="filters text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <ul class="filter-tabs filter-btns">
                                <li class="active filter" data-role="button" data-filter=".all"><span>Financial</span></li>
                                <li class="filter" data-role="button" data-filter=".category-1"><span>Banking</span></li>
                                <li class="filter" data-role="button" data-filter=".category-2"><span>Insurance </span></li>
                                <li class="filter" data-role="button" data-filter=".category-3"><span>Family</span></li>
                                <li class="filter" data-role="button" data-filter=".category-4"><span>Business</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="auto-container">
                    <div class="items-container row">
                        <!-- Gallery Block One -->
                        <div class="col-lg-3 col-md-6 gallery-block-one all">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('assets/images/gallery/gallery-10.jpg')}}" alt="">
                                </div>
                                <div class="caption-title">
                                    <h5>Finance</h5>
                                    <h3><a href="#">Miranda Hilix Bar</a></h3>
                                    <div class="view-project"><a data-fancybox="example gallery" href="{{ asset('assets/images/gallery/gallery-10.jpg')}}" class="zoom-btn"><span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Block One -->
                        <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-4">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('assets/images/gallery/gallery-11.jpg')}}" alt="">
                                </div>
                                <div class="caption-title">
                                    <h5>Finance</h5>
                                    <h3><a href="#">Miranda Hilix Bar</a></h3>
                                    <div class="view-project"><a data-fancybox="example gallery" href="{{ asset('assets/images/gallery/gallery-11.jpg')}}" class="zoom-btn"><span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Block One -->
                        <div class="col-lg-3 col-md-6 gallery-block-one all category-1 category-4">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('assets/images/gallery/gallery-12.jpg')}}" alt="">
                                </div>
                                <div class="caption-title">
                                    <h5>Finance</h5>
                                    <h3><a href="#">Miranda Hilix Bar</a></h3>
                                    <div class="view-project"><a data-fancybox="example gallery" href="{{ asset('assets/images/gallery/gallery-12.jpg')}}" class="zoom-btn"><span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Block One -->
                        <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('assets/images/gallery/gallery-13.jpg')}}" alt="">
                                </div>
                                <div class="caption-title">
                                    <h5>Finance</h5>
                                    <h3><a href="#">Miranda Hilix Bar</a></h3>
                                    <div class="view-project"><a data-fancybox="example gallery" href="{{ asset('assets/images/gallery/gallery-13.jpg')}}" class="zoom-btn"><span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Block One -->
                        <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2 category-5">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('assets/images/gallery/gallery-14.jpg')}}" alt="">
                                </div>
                                <div class="caption-title">
                                    <h5>Finance</h5>
                                    <h3><a href="#">Miranda Hilix Bar</a></h3>
                                    <div class="view-project"><a data-fancybox="example gallery" href="{{ asset('assets/images/gallery/gallery-14.jpg')}}" class="zoom-btn"><span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Block One -->
                        <div class="col-lg-3 col-md-6 gallery-block-one all category-1 category-4">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('assets/images/gallery/gallery-15.jpg')}}" alt="">
                                </div>
                                <div class="caption-title">
                                    <h5>Finance</h5>
                                    <h3><a href="#">Miranda Hilix Bar</a></h3>
                                    <div class="view-project"><a data-fancybox="example gallery" href="{{ asset('assets/images/gallery/gallery-15.jpg')}}" class="zoom-btn"><span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Block One -->
                        <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('assets/images/gallery/gallery-16.jpg')}}" alt="">
                                </div>
                                <div class="caption-title">
                                    <h5>Finance</h5>
                                    <h3><a href="#">Miranda Hilix Bar</a></h3>
                                    <div class="view-project"><a data-fancybox="example gallery" href="{{ asset('assets/images/gallery/gallery-16.jpg')}}" class="zoom-btn"><span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- Gallery Block One -->
                        <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2 category-5">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="{{ asset('assets/images/gallery/gallery-17.jpg')}}" alt="">
                                </div>
                                <div class="caption-title">
                                    <h5>Finance</h5>
                                    <h3><a href="#">Miranda Hilix Bar</a></h3>
                                    <div class="view-project"><a data-fancybox="example gallery" href="{{ asset('assets/images/gallery/gallery-17.jpg')}}" class="zoom-btn"><span>+</span></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- End block -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Video Section -->
        <section class="video-section" style="background-image: url({{ asset('assets/images/background/image-2.jpg')}}">
            <div class="auto-container">
                <div class="default-video-box text-center wow zoomIn" data-wow-delay="200ms" data-wow-duration="1200ms">
                    <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="overlay-link lightbox-image video-fancybox ripple"><span class="fas fa-play"></span></a>
                </div>
                <div class="sec-title light text-center">
                    <div class="sub-title">Intro Video</div>
                    <h2>Our Latest Insights <br>& Overview.</h2>
                </div>
            </div>
        </section>

        <!-- Why Choose Us Section -->
        <section class="why-chooseus-section">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="content-box">
                            <div class="sec-title">
                                <div class="sub-title">Why Choose Us</div>
                                <h2>Why Should You <br>Choose Us ?</h2>
                            </div>
                            <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">Our Mission </a>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false">Our Vission</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">Our Value</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                                <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                                    <div class="clearfix">
                                        <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/image-4.jpg')}}" alt=""></div>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisici ng elit, sed do eiusmod tempor incididunt ut labo re et dolore magna aliqua. Ut enim ad minim veni am, quis nostrud exercitation ullamco.</p>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                                    <div class="clearfix">
                                        <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/image-4.jpg')}}" alt=""></div>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisici ng elit, sed do eiusmod tempor incididunt ut labo re et dolore magna aliqua. Ut enim ad minim veni am, quis nostrud exercitation ullamco.</p>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                                    <div class="clearfix">
                                        <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/image-4.jpg')}}" alt=""></div>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisici ng elit, sed do eiusmod tempor incididunt ut labo re et dolore magna aliqua. Ut enim ad minim veni am, quis nostrud exercitation ullamco.</p>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="image-wrapper">
                            <div class="image-one"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/image-6.jpg')}}" alt=""></div>
                            <div class="image-two"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/image-5.jpg')}}" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="team-section" style="background-image: url({{ asset('assets/images/background/image-3.jpg')}}">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">Our Team</div>
                    <h2>Leadership Team</h2>
                </div>
                <div class="row">
                    <!-- Team Block One -->
                    <div class="col-lg-4 team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/team-1.jpg')}}" alt=""></div>
                            <div class="content">
                                <div class="designation">Founder</div>
                                <h3>Rosalina D. William</h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Block One -->
                    <div class="col-lg-4 team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/team-2.jpg')}}" alt=""></div>
                            <div class="content">
                                <div class="designation">CEO</div>
                                <h3>Velavos H. DesuJa</h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Block One -->
                    <div class="col-lg-4 team-block-one wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/team-3.jpg')}}" alt=""></div>
                            <div class="content">
                                <div class="designation">Developer</div>
                                <h3>Abdur Rahman J.</h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="contact-section">
            <div class="auto-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="sec-title">
                            <div class="sub-title">Write Here</div>
                            <h2>Get In Touch</h2>
                        </div>
                        <!-- Contact Form-->
                        <div class="contact-form">
                            <form method="post" action="https://azim.commonsupport.com/Finandox/sendemail.php" id="contact-form">
                                <div class="row clearfix">
                                    <div class="col-md-12 form-group">
                                        <label for="name">Enter your name</label>
                                        <input type="text" name="username" id="name" placeholder="Enter name here......" required="">
                                        <i class="fas fa-user"></i>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label for="email">Enter your email</label>
                                        <input type="email" name="email" id="email" placeholder="Enter email here......" required="">
                                        <i class="fas fa-envelope"></i>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <label for="message">Enter your message</label>
                                        <textarea name="message" id="message" placeholder="Enter message here......"></textarea>
                                        <i class="fas fa-edit"></i>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <button class="theme-btn btn-style-one" type="submit" name="submit-form"><span class="btn-title">Get In Touch</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="sec-title">
                            <div class="sub-title">Get Us Here</div>
                            <h2>Contact Us</h2>
                        </div>
                        <div class="contact-info">
                            <div class="border-box">
                                <div class="border_top"></div>
                                <div class="border_middile"></div>
                            </div>
                            <div class="row">
                                <div class="info-column col-md-6">
                                    <div class="icon-box">
                                        <div class="icon"><span class="flaticon-email-6"></span></div>
                                        <h3>Email Address</h3>
                                        <ul>
                                            <li><a href="mailto:info@webmail.com">info@webmail.com</a></li>
                                            <li><a href="mailto:jobs@exampleco.com">jobs@exampleco.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info-column col-md-6">
                                    <div class="icon-box">
                                        <div class="icon"><span class="flaticon-call-1"></span></div>
                                        <h3>Phone Number</h3>
                                        <ul>
                                            <li><a href="tel:+8976765654654">+897 676 5654 654</a></li>
                                            <li><a href="tel:+908(097)56476576">+908(097) 564 765 76</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info-column col-md-6">
                                    <div class="icon-box">
                                        <div class="icon"><span class="flaticon-location"></span></div>
                                        <h3>Office Address</h3>
                                        <ul>
                                            <li>12/A, Romania City Town Hall <br>New Joursey, UK</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="info-column col-md-6">
                                    <div class="icon-box">
                                        <div class="icon"><span class="flaticon-worldwide"></span></div>
                                        <h3>Web Connect</h3>
                                        <ul>
                                            <li><a href="http://example.com/">example.com</a></li>
                                            <li><a href="http://jobs.example.com/">jobs.example.com</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- News Section -->
        <section class="news-section">
            <div class="sec-bg" style="background-image: url({{ asset('assets/images/background/image-4.jpg')}}"></div>
            <div class="auto-container">
                <div class="sec-title text-center light">
                    <div class="sub-title">News</div>
                    <h2>News From Resource</h2>
                </div>
                <div class="row">
                    <!-- News Block One -->
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/news-1.jpg')}}" alt=""></a></div>
                            <div class="lower-content">
                                <div class="category">Business</div>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>24th March 2020</a></li>
                                    <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                                </ul>
                                <h3><a href="blog-details.html">UX is best solution for your <br>business & make noise.</a></h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</div>
                            </div>
                        </div>
                    </div>
                    <!-- News Block One -->
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/news-2.jpg')}}" alt=""></a></div>
                            <div class="lower-content">
                                <div class="category">Business</div>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                                    <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                                </ul>
                                <h3><a href="blog-details.html">Business consultant is involved in the planning.</a></h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</div>
                            </div>
                        </div>
                    </div>
                    <!-- News Block One -->
                    <div class="news-block-one col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/news-3.jpg')}}" alt=""></a></div>
                            <div class="lower-content">
                                <div class="category">Business</div>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>28th March 2020</a></li>
                                    <li><a href="#"><i class="far fa-user"></i>By Admin</a></li>
                                </ul>
                                <h3><a href="blog-details.html">Business consultant is a professional who analyzes.</a></h3>
                                <div class="text">Lorem ipsum dolor sit amet, consectet ur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Award Section -->
        <section class="award-section pt-0">
            <div class="year">2020</div>
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">Awards</div>
                    <h2>Get Awards</h2>
                </div>
                <div class="award-image">
                    <div class="row align-items-center">
                        <div class="col-lg-4">
                            <div class="image wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms"><img src="{{ asset('assets/images/resource/award-1.png')}}" alt=""></div>
                            <div class="image wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms"><img src="{{ asset('assets/images/resource/award-2.png')}}" alt=""></div>
                        </div>
                        <div class="col-lg-4 order-lg-2">
                            <div class="image wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms"><img src="{{ asset('assets/images/resource/award-3.png')}}" alt=""></div>
                            <div class="image wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms"><img src="{{ asset('assets/images/resource/award-4.png')}}" alt=""></div>
                        </div>
                        <div class="col-lg-4 wow zoomIn" data-wow-delay="200ms" data-wow-duration="1200ms">
                            <div class="image"><img src="{{ asset('assets/images/resource/award-5.png')}}" alt=""></div>
                        </div>

                    </div>
                </div>
                <div class="feature-image">
                    <div class="image-one"><img src="{{ asset('assets/images/resource/image-7.jpg')}}" alt=""></div>
                    <div class="image-two"><img src="{{ asset('assets/images/resource/image-8.jpg')}}" alt=""></div>
                    <div class="image-three"><img src="{{ asset('assets/images/resource/image-9.jpg')}}" alt=""></div>
                </div>
            </div>
        </section>

       @include('frontend.layouts.footer')

    </div>
    <!--End pagewrapper-->

    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fal fa-arrow-circle-up"></span></div>

    <script src="{{ asset('assets/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('assets/js/isotope.js')}}"></script>
    <script src="{{ asset('assets/js/owl.js')}}"></script>
    <script src="{{ asset('assets/js/appear.js')}}"></script>
    <script src="{{ asset('assets/js/wow.js')}}"></script>
    <script src="{{ asset('assets/js/lazyload.js')}}"></script>
    <script src="{{ asset('assets/js/scrollbar.js')}}"></script>
    <script src="{{ asset('assets/js/TweenMax.min.js')}}"></script>
    <script src="{{ asset('assets/js/script.js')}}"></script>

</body>
</html>