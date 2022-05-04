@extends('frontend.index')
@section('content')

 <!-- Page Banner Section -->
 <section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>About Us</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home')}}">Home</a></li>
                <li class="active">About Us</li>
            </ul>
        </div>

    </section>
 <!-- About Section Two -->
 <section class="about-section-two">
        <div class="auto-container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="image-wrapper">
                        <div class="image-one">
                            <img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/image-10.jpg')}}" alt="">
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
                        <div class="author-info">
                            <div class="wrapper-box">
                                <h2>Rosalina D. William</h2>
                                <div class="designation">Founder</div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod..</div>
                            </div>
                            <div class="signature"><img src="{{ asset('assets/images/resource/signature.png')}}" alt=""></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- History Section -->
    <section class="history-section">
        <div class="auto-container">
            <div class="sec-title text-center light">
                <div class="sub-title">History</div>
                <h2>Our Journey</h2>
            </div>
            <ul class="nav nav-tabs tab-btn-style-one" role="tablist">
                <li class="nav-item"><a class="nav-link active" id="tab-one-area" data-toggle="tab" href="#tab-one" role="tab" aria-controls="tab-one" aria-selected="true">2020</a>
                </li>
                <li class="nav-item"><a class="nav-link" id="tab-two-area" data-toggle="tab" href="#tab-two" role="tab" aria-controls="tab-two" aria-selected="false"> 2015</a>
                </li>
                <li class="nav-item"><a class="nav-link" id="tab-three-area" data-toggle="tab" href="#tab-three" role="tab" aria-controls="tab-three" aria-selected="false">2010</a>
                </li>
                <li class="nav-item"><a class="nav-link" id="tab-four-area" data-toggle="tab" href="#tab-four" role="tab" aria-controls="tab-four" aria-selected="false">2005</a>
                </li>
                <li class="nav-item"><a class="nav-link" id="tab-five-area" data-toggle="tab" href="#tab-five" role="tab" aria-controls="tab-five" aria-selected="false">2000</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane fadeInUp animated active" id="tab-one" role="tabpanel" aria-labelledby="tab-one">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="{{ asset('assets/images/resource/image-18.jpg')}}" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Get Rewards</div>
                                    <h2>Just Proved Our Selves <br>For Great Works.</h2>
                                </div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                                <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                            </div>                                
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-two" role="tabpanel" aria-labelledby="tab-two">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="{{ asset('assets/images/resource/image-18.jpg')}}" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Get Rewards</div>
                                    <h2>Just Proved Our Selves <br>For Great Works.</h2>
                                </div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                                <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                            </div>                                
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-three" role="tabpanel" aria-labelledby="tab-three">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="{{ asset('assets/images/resource/image-18.jpg')}}" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Get Rewards</div>
                                    <h2>Just Proved Our Selves <br>For Great Works.</h2>
                                </div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                                <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                            </div>                                
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-four" role="tabpanel" aria-labelledby="tab-four">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="{{ asset('assets/images/resource/image-18.jpg')}}" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Get Rewards</div>
                                    <h2>Just Proved Our Selves <br>For Great Works.</h2>
                                </div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                                <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                            </div>                                
                        </div>
                    </div>
                </div>
                <div class="tab-pane fadeInUp animated" id="tab-five" role="tabpanel" aria-labelledby="tab-five">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="image"><img src="{{ asset('assets/images/resource/image-18.jpg')}}" alt=""></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="content pl-lg-4">
                                <div class="sec-title light">
                                    <div class="sub-title">Get Rewards</div>
                                    <h2>Just Proved Our Selves <br>For Great Works.</h2>
                                </div>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                                <div class="link-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Learn More</span></a></div>
                            </div>                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Our Team</div>
                <h2>Leadership Team</h2>
            </div>
            <div class="row">
                                <!-- Team Block One -->
                <div class="col-lg-4 team-block-one">
                    <div class="inner-box">
                        <div class="image"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/team-1.jpg')}}" alt=""></div>
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
            </div>
        </div>
    </section>

    <!-- Services Section Four -->
    <section class="services-section-four">
        <div class="auto-container">
            <div class="sec-title text-center">
                <div class="sub-title">Features</div>
                <h2>Core Features</h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/images/icons/icon-3.png')}}" alt=""></div>
                        <h2>Capital Market</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/images/icons/icon-21.png')}}" alt=""></div>
                        <h2>Finance Division</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/images/icons/icon-4.png')}}" alt=""></div>
                        <h2>Insurance & Planning</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/images/icons/icon-22.png')}}" alt=""></div>
                        <h2>Family Case</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/images/icons/icon-5.png')}}" alt=""></div>
                        <h2>Financial Strategy</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="icon-box">
                        <div class="icon"><img src="{{ asset('assets/images/icons/icon-23.png')}}" alt=""></div>
                        <h2>Financial Planning</h2>
                        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsors Section -->
    <section class="sponsors-section">
        <div class="auto-container">
            <!--Sponsors Carousel-->
            <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 40, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "992":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-1.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-2.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-3.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-4.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-5.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-1.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-2.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-3.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-4.png')}}" alt=""></a></figure></div>
                <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/images/resource/client-5.png')}}" alt=""></a></figure></div>
            </div>
        </div>
    </section>

@endsection