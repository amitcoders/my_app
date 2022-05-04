@extends('frontend.index')
@section('content')
<!-- Page Banner Section -->
<section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Product Details</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home')}}">Home</a></li>
                <li class="{{ route('shop')}}">Shop</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <!--Single Product section-->
    <section id="shop-area" class="single-shop-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="shop-content">
                        <!--Start single shop content-->
                        <div class="single-shop-content">
                            <div class="row align-items-center">
                                <div class="col-lg-6 pr-lg-5">
                                    <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
                                        <div class="single-product-image-holder">
                                            <a data-fancybox="example gallery" href="{{ asset('assets/images/shop/single-product.jpg')}}"><span class="flaticon-search"></span></a>
                                            <img src="{{ asset('assets/images/shop/single-product.jpg')}}" alt="Awesome Image">
                                        </div>
                                        <div class="single-product-image-holder">
                                            <a data-fancybox="example gallery" href="{{ asset('assets/images/shop/single-product.jpg')}}"><span class="flaticon-search"></span></a>
                                            <img src="{{ asset('assets/images/shop/single-product.jpg')}}" alt="Awesome Image">
                                        </div>                                        
                                    </div>
                                </div> 
                                <div class="col-lg-6">
                                    <div class="content-box">
                                        <div class="top-content">
                                            <div class="category">Business, UX Design</div>
                                            <div class="review">
                                                <span>(200+ Reviews)  </span>
                                                <div class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <h2>One of the best ux book</h2>
                                        <div class="price"><span>$600</span> <del>$799</del></div>
                                        <div class="text">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                        </div>
                                        <div class="cart-wrapper">
                                            <div class="cart-btn">
                                                <a href="#" class="theme-btn btn-style-one"><span class="btn-title">Add To Cart</span></a>
                                            </div>
                                            <div class="qity">
                                                <div class="quantity">
                                                    <input class="quantity-spinner" type="text" value="2" name="quantity">
                                                </div>
                                            </div>
                                        </div>                                            
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End single shop content-->
                        <!--Start product tab box-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="product-tab-box tabs-box">
                                    <ul class="tab-btns tab-buttons clearfix">
                                        <li data-tab="#cat-1" class="tab-btn"><span>Descriprion</span></li>
                                        <li data-tab="#cat-2" class="tab-btn active-btn"><span>Aditional Details</span></li>
                                        <li data-tab="#cat-3" class="tab-btn"><span>Reviews (2)</span></li>
                                    </ul>
                                    <div class="tabs-content">
                                        <div class="tab" id="cat-1">
                                            <div class="product-details-content">
                                                <div class="desc-content-box">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons equat. Duis aute irure dolor in reprehenderit.</p>
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="tab active-tab" id="cat-2">
                                            <div class="product-details-content">
                                                <div class="desc-content-box">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo cons equat. Duis aute irure dolor in reprehenderit.</p>
                                                </div>
                                            </div>    
                                        </div>
                                        <div class="tab" id="cat-3">
                                            <div class="review-box-holder">
                                                <div class="review-area">
                                                    <!--Start single review box-->
                                                    <div class="column">
                                                        <div class="single-review-box">
                                                            <div class="image-holder">
                                                                <img src="{{ asset('assets/images/shop/review-1.png')}}" alt="Awesome Image">
                                                            </div>
                                                            <div class="text-holder">
                                                                <div class="top">
                                                                    <div class="name">
                                                                        <h3>Steven Rich <span>– Jan 17, 2020:</span></h3>
                                                                    </div>
                                                                    <div class="review-box">
                                                                        <div class="rating">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text">
                                                                    <p>Value for money , I use it from long time and it is very useful and good product.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single review box-->
                                                    <!--Start single review box-->
                                                    <div class="column">
                                                        <div class="single-review-box">
                                                            <div class="image-holder">
                                                                <img src="{{ asset('assets/images/shop/review-2.png')}}" alt="Awesome Image">
                                                            </div>
                                                            <div class="text-holder">
                                                                <div class="top">
                                                                    <div class="name">
                                                                        <h3>William Cobus <span>– Jan 17, 2020:</span></h3>
                                                                    </div>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="text">
                                                                    <p>We denounce with righteous indignation and dislike men who are so beguiled & demoralized.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--End single review box-->
                                                </div>
                                            </div>
                                            <div class="review-form">
                                                <div class="shop-page-title">
                                                    <div class="title">Add Your <span>Comments</span></div>
                                                    <p>Your email address will not be published. Required fields are marked <b>*</b></p>
                                                </div>
                                                <form id="review-form" action="#">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="input-box">
                                                                <p>Name<span>*</span></p>
                                                                <input type="text" name="fname" placeholder="" required="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="input-box">
                                                                <p>Email<span>*</span></p>
                                                                <input type="email" name="email" placeholder="" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="add-rating-box">
                                                                <div class="add-rating-title">
                                                                    <h4>Your Rating</h4>    
                                                                </div>
                                                                <div class="review-box">
                                                                    <ul>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="input-box">
                                                                <p>Your Review<span>*</span></p>
                                                                <textarea name="review" placeholder="" required=""></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <button class="theme-btn btn-style-one" type="submit"><span class="btn-title">Submit</span></button>
                                                        </div>
                                                    </div>
                                                </form>  
                                            </div>
                                        </div>
                                    </div>      
                                </div>
                            </div>
                        </div>
                        <!--End product tab box-->
                    </div> 
                </div>            
            </div>
        </div>
    </section>

    <section class="related-product">
        <div class="auto-container">
            <div class="sec-title">
                <div class="sub-title">Products</div>
                <h2>Releted Products</h2>
            </div>
            <div class="row">
                <div class="theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "520" :{ "items": "2" }, "992" :{ "items" : "3" } , "1200":{ "items" : "4" }}}'>
                    <div class="slide-item">
                        <div class="single-product-item">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/shop/1.jpg')}}" alt="Awesome Product Image">
                                <div class="price">$250</div>
                                <div class="overlay-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Add To Cart</span></a></div>
                            </div>
                            <div class="title-holder">
                                <div class="static-content">
                                    <div class="category">Business</div>
                                    <h3 class="title"><a href="shop-single.html">Office Chair</a></h3>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="single-product-item">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/shop/2.jpg')}}" alt="Awesome Product Image">
                                <div class="price">$250</div>
                                <div class="overlay-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Add To Cart</span></a></div>
                            </div>
                            <div class="title-holder">
                                <div class="static-content">
                                    <div class="category">Business</div>
                                    <h3 class="title"><a href="shop-single.html">One of the best ux book</a></h3>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="single-product-item">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/shop/3.jpg')}}" alt="Awesome Product Image">
                                <div class="price">$250</div>
                                <div class="overlay-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Add To Cart</span></a></div>
                            </div>
                            <div class="title-holder">
                                <div class="static-content">
                                    <div class="category">Business</div>
                                    <h3 class="title"><a href="shop-single.html">Office Chair</a></h3>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="single-product-item">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/shop/4.jpg')}}" alt="Awesome Product Image">
                                <div class="price">$250</div>
                                <div class="overlay-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Add To Cart</span></a></div>
                            </div>
                            <div class="title-holder">
                                <div class="static-content">
                                    <div class="category">Business</div>
                                    <h3 class="title"><a href="shop-single.html">Office Chair</a></h3>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="single-product-item">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/shop/1.jpg')}}" alt="Awesome Product Image">
                                <div class="price">$250</div>
                                <div class="overlay-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Add To Cart</span></a></div>
                            </div>
                            <div class="title-holder">
                                <div class="static-content">
                                    <div class="category">Business</div>
                                    <h3 class="title"><a href="shop-single.html">Office Chair</a></h3>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="single-product-item">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/shop/2.jpg')}}" alt="Awesome Product Image">
                                <div class="price">$250</div>
                                <div class="overlay-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Add To Cart</span></a></div>
                            </div>
                            <div class="title-holder">
                                <div class="static-content">
                                    <div class="category">Business</div>
                                    <h3 class="title"><a href="shop-single.html">One of the best ux book</a></h3>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="single-product-item">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/shop/3.jpg')}}" alt="Awesome Product Image">
                                <div class="price">$250</div>
                                <div class="overlay-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Add To Cart</span></a></div>
                            </div>
                            <div class="title-holder">
                                <div class="static-content">
                                    <div class="category">Business</div>
                                    <h3 class="title"><a href="shop-single.html">Office Chair</a></h3>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide-item">
                        <div class="single-product-item">
                            <div class="img-holder">
                                <img src="{{ asset('assets/images/shop/4.jpg')}}" alt="Awesome Product Image">
                                <div class="price">$250</div>
                                <div class="overlay-btn"><a href="#" class="theme-btn btn-style-one"><span class="btn-title">Add To Cart</span></a></div>
                            </div>
                            <div class="title-holder">
                                <div class="static-content">
                                    <div class="category">Business</div>
                                    <h3 class="title"><a href="shop-single.html">Office Chair</a></h3>
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
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