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
    <section class="gallery-section">
        <div class="sortable-masonry">

            <div class="auto-container">
                <!--Filter-->
                <div class="filters text-center">
                    <ul class="filter-tabs filter-btns">
                        <li class="active filter" data-role="button" data-filter=".all"><span>Financial</span></li>
                        <li class="filter" data-role="button" data-filter=".category-1"><span>Banking</span></li>
                        <li class="filter" data-role="button" data-filter=".category-2"><span>Insurance </span></li>
                        <li class="filter" data-role="button" data-filter=".category-3"><span>Family</span></li>
                        <li class="filter" data-role="button" data-filter=".category-4"><span>Business</span></li>
                    </ul>
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
                                <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-12.jpg" class="zoom-btn"><span>+</span></a></div>
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
                    <!-- Gallery Block One -->
                    <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2 category-5">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('assets/images/gallery/gallery-31.jpg')}}" alt="">
                            </div>
                            <div class="caption-title">
                                <h5>Finance</h5>
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="{{ asset('assets/images/gallery/gallery-31.jpg')}}" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Block One -->
                    <div class="col-lg-3 col-md-6 gallery-block-one all category-1 category-4">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('assets/images/gallery/gallery-32.jpg')}}" alt="">
                            </div>
                            <div class="caption-title">
                                <h5>Finance</h5>
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="{{ asset('assets/images/gallery/gallery-32.jpg')}}" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Block One -->
                    <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('assets/images/gallery/gallery-33.jpg')}}" alt="">
                            </div>
                            <div class="caption-title">
                                <h5>Finance</h5>
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="assets/images/gallery/gallery-33.jpg" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Gallery Block One -->
                    <div class="col-lg-3 col-md-6 gallery-block-one all category-3 category-2 category-5">
                        <div class="inner-box">
                            <div class="image">
                                <img src="{{ asset('assets/images/gallery/gallery-34.jpg')}}" alt="">
                            </div>
                            <div class="caption-title">
                                <h5>Finance</h5>
                                <h3><a href="#">Miranda Hilix Bar</a></h3>
                                <div class="view-project"><a data-fancybox="example gallery" href="" class="zoom-btn"><span>+</span></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- End block -->
                </div>
            </div>
        </div>
    </section>

    <!-- Sponsors Section -->

@endsection