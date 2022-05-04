@extends('frontend.index')
@section('content')
<!-- Page Banner Section -->
<section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Our Team</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Team</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->
    <section class="welcome-section">
        <div class="auto-container">
            <div class="wrapper-box mt-0">
                <div class="row m-0">
                    <!-- Welcome Block One -->
                    <div class="welcome-block-one col-lg-4">
                        <div class="inner-box">
                            <div class="icon-box"><span class="flaticon-analysis"></span></div>
                            <h2>Business Analysis</h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. </div>
                            <div class="read-more"><a href="#">Read More</a></div>
                        </div>
                    </div>
                    <!-- Welcome Block One -->
                    <div class="welcome-block-one col-lg-4">
                        <div class="inner-box" style="background-image: url(assets/images/resource/image-1.jpg);">
                            <div class="icon-box"><span class="flaticon-tax"></span></div>
                            <h2>Save Your Tax</h2>
                            <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. </div>
                            <div class="read-more"><a href="#">Read More</a></div>
                        </div>
                    </div>
                    <!-- Welcome Block One -->
                    <div class="welcome-block-one col-lg-4">
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

    <!-- Team Section -->
    <section class="team-section gray-bg">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Our Team</div>
                <h2>Leadership Team</h2>
            </div>
            <div class="row">
                <!-- Team Block One -->
                <div class="col-lg-4 team-block-one">
                    <div class="inner-box">
                        <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="assets/images/resource/team-1.jpg" alt=""></div>
                        <div class="content">
                            <div class="designation">Founder</div>
                            <h3>Rosalina D. William</h3>
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team Block One -->
                <div class="col-lg-4 team-block-one">
                    <div class="inner-box">
                        <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/team-2.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="designation">CEO</div>
                            <h3>Velavos H. DesuJa</h3>
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team Block One -->
                <div class="col-lg-4 team-block-one">
                    <div class="inner-box">
                        <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/team-3.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="designation">Developer</div>
                            <h3>Abdur Rahman J.</h3>
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team Block One -->
                <div class="col-lg-4 team-block-one">
                    <div class="inner-box">
                        <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/team-4.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="designation">Founder</div>
                            <h3>Kerela Browni Kil</h3>
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team Block One -->
                <div class="col-lg-4 team-block-one">
                    <div class="inner-box">
                        <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/team-5.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="designation">Web Developer</div>
                            <h3>Hilix D. Brownni</h3>
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Team Block One -->
                <div class="col-lg-4 team-block-one">
                    <div class="inner-box">
                        <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png') }}" data-src="{{ asset('assets/images/resource/team-6.jpg')}}" alt=""></div>
                        <div class="content">
                            <div class="designation">Designer</div>
                            <h3>Jaruwani Maroni</h3>
                            <ul class="social-links">
                                <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Case Studies -->
    <section class="cases-section">
                
        <!--case Tabs-->
        <div class="case-tabs">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sub-title">Portfolio</div>
                    <h2>Our Works</h2>
                </div>
                <!--Tabs Header-->
                <div class="tabs-header">
                    <ul class="case-tab-btns flex-box">
                        <li class="case-tab-btn active-btn" data-tab="#case-tab-1"><span>Financial</span></li>
                        <li class="case-tab-btn" data-tab="#case-tab-2"><span>Banking</span></li>
                        <li class="case-tab-btn" data-tab="#case-tab-3"><span>Insurance</span></li>
                        <li class="case-tab-btn" data-tab="#case-tab-4"><span>Family</span></li>
                        <li class="case-tab-btn" data-tab="#case-tab-5"><span>Business</span></li>
                    </ul>
                </div>
                <div class="case-tab-wrapper">
                    <!--Tabs Content-->  
                    <div class="case-tabs-content">
                        <!--case Tab / Active Tab-->
                        <div class="case-tab active-tab" id="case-tab-1">
                            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-24.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-25.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-26.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-24.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-25.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-26.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--case Tab-->
                        <div class="case-tab" id="case-tab-2">
                            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-24.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-25.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-26.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-24.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-25.jpg')}}')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-26.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--case Tab-->
                        <div class="case-tab" id="case-tab-3">
                            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-24.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-25.jpg')}}')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-26.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-24.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-25.jpg')}}')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-26.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--case Tab-->
                        <div class="case-tab" id="case-tab-4">
                            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-24.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-25.jpg')}}')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-26.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-24.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-25.jpg')}}')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-26.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--case Tab-->
                        <div class="case-tab" id="case-tab-5">
                            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-24.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-25.jpg')}}')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-26.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-24.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-25.jpg')}}')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                                <!-- case Blokc One -->
                                <div class="case-block-one">
                                    <div class="inner-box">
                                        <div class="image"><img src="{{ asset('assets/images/gallery/gallery-26.jpg')}}" alt=""></div>
                                        <div class="overlay">
                                            <div>
                                                <h5>Business Consultancy</h5>
                                                <h2>Brixer Donald Company Business</h2>
                                                <div class="link-btn flex-box">
                                                    <a href="{{ asset('assets/images/gallery/gallery-24.jpg')}}" data-fancybox="gallery-1" data-caption="" class="theme-btn"><i>+</i></a>
                                                </div>
                                            </div>                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </section>
@endsection