@extends('frontend.index')
@section('content')
    <!-- Page Banner Section -->
    <section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Team Details</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Team Details</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->
    <!-- Team Details -->
    <section class="team-details">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image"><img src="{{ asset('assets/images/resource/team-7.jpg')}}" alt=""></div>
                </div>
                <div class="col-lg-6 pl-lg-5">
                    <div class="sec-title">
                        <div class="sub-title">UX Designer</div>
                        <h2>Rosalina D. William</h2>
                    </div>
                    <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                    <div class="progress-box">
                        <div class="bar">
                            <div class="bar-inner count-bar" data-percent="90%"><div class="count-text">90%</div></div>
                        </div>
                        <h5>UX Design</h5>
                    </div>
                    <div class="link-btn"><a href="#" class="theme-btn btn-style-two"><span class="btn-title">Contact With Me</span></a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Experience Section -->
    <section class="experience-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Experience</div>
                <h2>Previous Clients</h2>
            </div>
            <div class="row">
                <div class="experience-block col-lg-4">
                    <div class="inner-box">
                        <h3>Google Co Ltd.</h3>
                        <h5>UX Design</h5>
                        <div class="read-more-btn"><i class="fal fa-arrow-right"></i></div>
                    </div>
                </div>
                <div class="experience-block col-lg-4">
                    <div class="inner-box">
                        <h3>Apple Co Ltd.</h3>
                        <h5>UX Design</h5>
                    </div>
                </div>
                <div class="experience-block col-lg-4">
                    <div class="inner-box">
                        <h3>Logitech Ltd.</h3>
                        <h5>UX Design</h5>
                    </div>
                </div>
                <div class="experience-block col-lg-4">
                    <div class="inner-box">
                        <h3>A4Tech</h3>
                        <h5>UX Design</h5>
                    </div>
                </div>
                <div class="experience-block col-lg-4">
                    <div class="inner-box">
                        <h3>Lenovo Inc.</h3>
                        <h5>UX Design</h5>
                    </div>
                </div>
                <div class="experience-block col-lg-4">
                    <div class="inner-box">
                        <h3>Ovona Co.</h3>
                        <h5>UX Design</h5>
                    </div>
                </div>
                <div class="experience-block col-lg-4">
                    <div class="inner-box">
                        <h3>Kixer Glass Co.</h3>
                        <h5>UX Design</h5>
                    </div>
                </div>
                <div class="experience-block col-lg-4">
                    <div class="inner-box">
                        <h3>Setlean Print Co.</h3>
                        <h5>UX Design</h5>
                    </div>
                </div>
                <div class="experience-block col-lg-4">
                    <div class="inner-box">
                        <h3>Hali Insurance Co.</h3>
                        <h5>UX Design</h5>
                    </div>
                </div>
            </div>
            <div class="link-btn text-center"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Contact With Me</span></a></div>
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
                    </div>
                </div>
            </div>
        
        </div>
    </section>

@endsection