@extends('frontend.index')
@section('content')

  <!-- Page Banner Section -->
  <section class="page-banner">
  <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Our Works</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Portfolio</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <!-- Gallery Section -->
     <!-- Case Studies -->
     <section class="cases-section">
                
                <!--case Tabs-->
                <div class="case-tabs">
                    <div class="auto-container">
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
        
            <!-- Sponsors Section -->
    <!-- Sponsors Section -->

@endsection