@extends('frontend.index')
@section('content')
<!-- Page Banner Section -->
<section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>404</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('error_page')}}">Home</a></li>
                <li class="active">404</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <!-- Error Page -->
    <section class="error-section">
        <div class="auto-container">
            <div class="inner-section">
                <h1>404</h1>
                <h2>OOPPS! THE PAGE YOU WERE LOOKING FOR, COULDN'T BE FOUND.</h2>
                <div class="text">Try the search below to find matching pages:</div>
                
                <!-- Search -->
                <div class="error-search-form">
                    <form method="post" action="https://azim.commonsupport.com/Finandox/contact.html">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="Search..." required="">
                            <button type="submit"><span class="icon fas fa-search"></span></button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </section>
@endsection