@extends('frontend.layouts.index')
@section('content')

<!-- Banner Section -->
<section class="banner-section">
		<div class="banner-carousel theme_carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
			<!-- Slide Item -->
			<div class="slide-item">
				<div class="image-layer lazy-image" data-bg="url('assets/images/main-slider/1.jpg')"></div>

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
				<div class="image-layer lazy-image" data-bg="url('assets/images/main-slider/5.jpg')"></div>

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
       
@endsection