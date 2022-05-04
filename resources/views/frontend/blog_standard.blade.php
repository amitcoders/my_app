@extends('frontend.index')
@section('content')
<!-- Page Banner Section -->
<section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Blog Standard</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index-2.html">Home</a></li>
                <li class="active">Blog</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->
    <div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- News Block Two -->
                    <div class="news-block-two">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/news-4.jpg')}}" alt=""></a></div>
                            <div class="lower-content">
                                <div class="category">Business</div>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-eye"></i>332 Views</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                                </ul>
                                <h2><a href="blog-details.html">Lorem ipsum dolor sit amet, consecte <br>cing elit, sed do eiusmod tempor.</a></h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                                <div class="wrapper">
                                    <div class="author-box">
                                        <div class="thumb"><img src="{{ asset('assets/images/resource/thumb-4.jpg')}}" alt=""></div>
                                        <h5>by Hetmayar</h5>
                                    </div>
                                    <div class="read-more"><a href="blog-details.html"><i class="fal fa-arrow-right"></i>Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- News Block Two -->
                    <div class="news-block-two">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/news-5.jpg')}}" alt=""></a></div>
                            <div class="lower-content">
                                <div class="category">Business</div>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-eye"></i>332 Views</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                                </ul>
                                <h2><a href="blog-details.html">Adipisicing elit, sed do eiusmod tempor <br> incididunt ut labore et dolore.</a></h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                                <div class="wrapper">
                                    <div class="author-box">
                                        <div class="thumb"><img src="{{ asset('assets/images/resource/thumb-5.jpg')}}" alt=""></div>
                                        <h5>by Hetmayar</h5>
                                    </div>
                                    <div class="read-more"><a href="blog-details.html"><i class="fal fa-arrow-right"></i>Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- News Block Two -->
                    <div class="news-block-two">
                        <div class="inner-box">
                            <div class="image"><a href="#"><img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/news-6.jpg')}}" alt=""></a></div>
                            <div class="lower-content">
                                <div class="category">Business</div>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-eye"></i>332 Views</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                                </ul>
                                <h2><a href="blog-details.html">Magna aliqua. Ut enim ad minim venia <br>m, quis nostrud exercitation ullamco</a></h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                                <div class="wrapper">
                                    <div class="author-box">
                                        <div class="thumb"><img src="{{ asset('assets/images/resource/thumb-6.jpg')}}" alt=""></div>
                                        <h5>by Hetmayar</h5>
                                    </div>
                                    <div class="read-more"><a href="blog-details.html"><i class="fal fa-arrow-right"></i>Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- News Block Two -->
                    <div class="news-block-two">
                        <div class="inner-box">
                            <div class="lower-content">
                                <div class="category">Business</div>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-eye"></i>332 Views</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                                </ul>
                                <h2><a href="blog-details.html">Laboris nisi ut aliquip ex ea commodo <br>consequat. Duis aute irure dolor.</a></h2>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
                                <div class="wrapper">
                                    <div class="author-box">
                                        <div class="thumb"><img src="{{ asset('assets/images/resource/thumb-7.jpg')}}" alt=""></div>
                                        <h5>by Hetmayar</h5>
                                    </div>
                                    <div class="read-more"><a href="blog-details.html"><i class="fal fa-arrow-right"></i>Read More</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- News Block Three -->
                    <div class="news-block-three">
                        <div class="inner-box" style="background-image: url(assets/images/background/image-17.jpg);">
                            <div class="lower-content">
                                <div class="quote"><span class="fa fa-quote-left"></span></div>
                                <h2><a href="blog-details.html">Excepteur sint occaecat cupida <br>tat non proident, sunt in.</a></h2>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-eye"></i>332 Views</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- News Block Four -->
                    <div class="news-block-four">
                        <div class="inner-box" style="background-image: url(assets/images/background/image-16.jpg);">
                            <div class="lower-content">
                                <div class="category">Business</div>
                                <h2><a href="blog-details.html">Culpa qui officia deserunt mollit anim <br>id est laborum. Sed ut perspiciatis</a></h2>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="far fa-eye"></i>332 Views</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i>35 Comments</a></li>
                                    <li><a href="#"><i class="far fa-calendar-alt"></i>26th March 2020</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="page-pagination">
                        <ul class="clearfix">
                            <li><a href="#"><span class="fas fa-angle-double-left"></span></a></li>
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">...</a></li>
                            <li><a href="#">10</a></li>
                            <li><a href="#"><span class="fas fa-angle-double-right"></span></a></li>
                        </ul> 
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="sidebar">

                        <!-- About Widget -->
                        <div class="sidebar-widget about-me">
                            <div class="sidebar-title"><h3>About Me</h3></div>
                            <div class="widget-content">
                                <div class="image"><img src="{{ asset('assets/images/resource/author-2.jpg')}}" alt=""></div>
                                <h4>Rosalina D. Willaimson</h4>
                                <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</div>
                                <ul class="social-links">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Search -->
                        <div class="sidebar-widget search-box">
                            <div class="sidebar-title"><h3>Search Objects</h3></div>
                            <form method="post" action="https://azim.commonsupport.com/Finandox/contact.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search your keyword..." required="">
                                    <button type="submit"><span class="icon far fa-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Post Widget -->
                        <div class="sidebar-widget popular-posts">
                            <div class="sidebar-title"><h3>Popular Feeds</h3></div>
                            <div class="widget-content">
                                
                                <!--News Post-->
                                <div class="news-post">
                                    <div class="post-thumb"><a href="blog-details.html"><img class="lazy-image loaded" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/thumb-8.jpg')}}" alt=""></a></div>
                                    <div class="date"><span class="fa fa-calendar-alt"></span> Feb 25, 2020</div>
                                    <h4><a href="blog-details.html">Lorem ipsum dolor sit <br>cing elit, sed do. </a></h4>
                                </div>
                                <!--News Post-->
                                <div class="news-post">
                                    <div class="post-thumb"><a href="blog-details.html"><img class="lazy-image loaded" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/thumb-9.jpg')}}" alt=""></a></div>
                                    <div class="date"><span class="fa fa-calendar-alt"></span> Feb 20, 2020</div>
                                    <h4><a href="blog-details.html">Lorem ipsum dolor sit <br>cing elit, sed do.</a></h4>
                                </div>
                                <!--News Post-->
                                <div class="news-post">
                                    <div class="post-thumb"><a href="blog-details.html"><img class="lazy-image loaded" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/thumb-10.jpg')}}" alt=""></a></div>
                                    <div class="date"><span class="fa fa-calendar-alt"></span> Feb 14, 2020</div>
                                    <h4><a href="blog-details.html">Lorem ipsum dolor sit <br> cing elit, sed do.</a></h4>
                                </div>
                                <!--News Post-->
                                <div class="news-post">
                                    <div class="post-thumb"><a href="blog-details.html"><img class="lazy-image loaded" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="{{ asset('assets/images/resource/thumb-11.jpg')}}" alt=""></a></div>
                                    <div class="date"><span class="fa fa-calendar-alt"></span> Feb 14, 2020</div>
                                    <h4><a href="blog-details.html">Lorem ipsum dolor sit <br> cing elit, sed do.</a></h4>
                                </div>
                            </div>
                        </div>

                        <!-- Category Widget -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title"><h3>Categories</h3></div>
                            <div class="widget-content">
                                <ul>
                                    <li class="current"><a href="blog-details.html">Business</a> <span class="total-post">26</span></li>
                                    <li><a href="blog-details.html">Consultant</a> <span class="total-post">30</span></li>
                                    <li><a href="blog-details.html">Creative</a> <span class="total-post">71</span></li>
                                    <li><a href="blog-details.html">UI/UX</a> <span class="total-post">68</span></li>
                                    <li><a href="blog-details.html">Technology</a><span class="total-post">70</span></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Social Icon -->
                        <div class="sidebar-widget social-links-widget">
                            <div class="sidebar-title"><h3>Never Miss News</h3></div>
                            <div class="widget-content">
                                <ul class="social-links">
                                    <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-behance"></span></a></li>
                                    <li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
                                    <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Twitter Widget -->
                        <div class="sidebar-widget twitter-widget">
                            <div class="sidebar-title"><h3>Twitter Feeds</h3></div>
                            <div class="widget-content">
                                <div class="post">
                                    <div class="icon"><span class="fab fa-twitter"></span></div>
                                    <div class="text">Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on @ ThemeForest https://t.co/2r1POjOjgV C… https://t.co/rDAnPyClu1</div>
                                    <div class="date">Jan 25, 2020</div>
                                </div>
                                <div class="post">
                                    <div class="icon"><span class="fab fa-twitter"></span></div>
                                    <div class="text">Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on @ ThemeForest https://t.co/2r1POjOjgV C… https://t.co/rDAnPyClu1</div>
                                    <div class="date">Jan 25, 2020</div>
                                </div>
                                <div class="post">
                                    <div class="icon"><span class="fab fa-twitter"></span></div>
                                    <div class="text">Rescue - #Gutenberg ready @ wordpress Theme for Creative Bloggers available on @ ThemeForest https://t.co/2r1POjOjgV C… https://t.co/rDAnPyClu1</div>
                                    <div class="date">Jan 25, 2020</div>
                                </div>
                            </div>
                        </div>

                        <!-- Gallery Widget -->
                        <div class="sidebar-widget instagram-widget">
                            <div class="sidebar-title"><h3>Instagram Feeds</h3></div>
                            <div class="inner-box">
                                <div class="wrapper-box">
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="assets/images/gallery/instagram-1.jpg" alt="">
                                        <div class="overlay-link"><a href="{{ asset('assets/images/gallery/instagram-1.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="assets/images/gallery/instagram-2.jpg" alt="">
                                        <div class="overlay-link"><a href="{{ asset('assets/images/gallery/instagram-2.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="assets/images/gallery/instagram-3.jpg" alt="">
                                        <div class="overlay-link"><a href="{{ asset('assets/images/gallery/instagram-3.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="assets/images/gallery/instagram-4.jpg" alt="">
                                        <div class="overlay-link"><a href="{{ asset('assets/images/gallery/instagram-4.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="assets/images/gallery/instagram-5.jpg" alt="">
                                        <div class="overlay-link"><a href="assets/images/gallery/instagram-5.jpg" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="assets/images/gallery/instagram-6.jpg" alt="">
                                        <div class="overlay-link"><a href="{{ asset('assets/images/gallery/instagram-6.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="assets/images/gallery/instagram-7.jpg" alt="">
                                        <div class="overlay-link"><a href="{{ asset('assets/images/gallery/instagram-7.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="assets/images/gallery/instagram-8.jpg" alt="">
                                        <div class="overlay-link"><a href="{{ asset('assets/images/gallery/instagram-8.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                    <div class="image">
                                        <img class="lazy-image owl-lazy" src="{{ asset('assets/images/resource/image-spacer-for-validation.png')}}" data-src="assets/images/gallery/instagram-9.jpg" alt="">
                                        <div class="overlay-link"><a href="{{ asset('assets/images/gallery/instagram-9.jpg')}}" class="lightbox-image" data-fancybox="gallery"><span class="fa fa-plus"></span></a></div>
                                    </div>
                                </div><!-- /.gallery-wrapper -->
                            </div>
                        </div>

                        <!-- Tags Widget -->
                        <div class="sidebar-widget popular-tags">
                            <div class="sidebar-title"><h3>Popular Tags</h3></div>
                            <div class="widget-content">
                                <ul class="clearfix">
                                    <li><a href="blog-details.html"><span>Popular</span></a></li>
                                    <li><a href="blog-details.html"><span>desgin</span></a></li>
                                    <li><a href="blog-details.html"><span>ux</span></a></li>
                                    <li><a href="blog-details.html"><span>usability</span></a></li>
                                    <li><a href="blog-details.html"><span>develop</span></a></li>
                                    <li><a href="blog-details.html"><span>icon</span></a></li>
                                    <li><a href="blog-details.html"><span>business</span></a></li>
                                    <li><a href="blog-details.html"><span>consult</span></a></li>
                                    <li><a href="blog-details.html"><span>kit</span></a></li>
                                    <li><a href="blog-details.html"><span>keyboard</span></a></li>
                                    <li><a href="blog-details.html"><span>mouse</span></a></li>
                                    <li><a href="blog-details.html"><span>tech</span></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Add Banner Widget -->
                        <div class="sidebar-widget">
                            <div class="add-banner-widget" style="background-image: url(assets/images/background/image-15.jpg);">
                                <div class="content">
                                    <h5>350x600</h5>
                                    <h3>Add Banner</h3>
                                </div>
                            </div>
                        </div>
                                            
                    </aside>
                </div>
            </div>
        </div>
    </div>
@endsection