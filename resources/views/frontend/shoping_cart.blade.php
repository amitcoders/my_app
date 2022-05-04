@extends('frontend.index')
@section('content')
     <!-- Page Banner Section -->
     <section class="page-banner">
        <div class="image-layer lazy-image" data-bg="url('assets/images/background/image-11.jpg')"></div>
        <div class="bottom-rotten-curve alternate"></div>

        <div class="auto-container">
            <h1>Shopping Cart</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ route('home')}}">Home</a></li>
                <li class="active">Shop</li>
            </ul>
        </div>

    </section>
    <!--End Banner Section -->

    <!--Cart section-->
    <section class="cart-area">
        <div class="auto-container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <ul class="total-item-info">
                        <li><span>Your Cart:</span> 3 Items</li>
                        <li><span>Total :</span> $94.97</li>
                    </ul>
                    <div class="table-outer">
                        <table class="cart-table">
                            <thead class="cart-header">
                                <tr>
                                    <th class="prod-column">Products</th>
                                    <th class="hide-column"></th>
                                    <th>Quantity</th>
                                    <th class="availability">Availability</th>
                                    <th class="price">Price</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>    
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" class="prod-column">
                                        <div class="column-box">
                                            <div class="prod-thumb">
                                                <a href="#"><img src="{{ asset('assets/images/shop/1.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="title">
                                                <h3 class="prod-title">Power Remote</h3>
                                            </div>    
                                        </div>
                                    </td>
                                    <td class="qty">
                                        <input class="quantity-spinner" type="text" value="2" name="quantity">
                                    </td>
                                    <td class="unit-price">
                                        <div class="available-info">
                                            <span class="icon fa fa-check thm-bg-clr"></span>Item(s)<br>Avilable Now
                                        </div>
                                    </td>
                                    <td class="price">$34.99</td>
                                    <td class="sub-total">$69.98</td>
                                    <td>
                                        <div class="remove">
                                            <div class="checkbox">
                                                <span class="flaticon-cross"></span>
                                            </div>   
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="prod-column">
                                        <div class="column-box">
                                            <div class="prod-thumb">
                                                <a href="#"><img src="{{ asset('assets/images/shop/2.jpg')}}" alt=""></a>
                                            </div>
                                            <div class="title">
                                                <h3 class="prod-title">USB Power Bank</h3>
                                            </div>    
                                        </div>
                                    </td>
                                    <td class="qty">
                                        <input class="quantity-spinner" type="text" value="3" name="quantity">
                                    </td>
                                    <td class="unit-price">
                                        <div class="available-info">
                                            <span class="icon fa fa-check thm-bg-clr"></span>Item(s)<br>Avilable Now
                                        </div>
                                    </td>
                                    <td class="price">$29.99</td>
                                    <td class="sub-total">$87.97</td>
                                    <td>
                                        <div class="remove">
                                            <div class="checkbox">
                                                <span class="flaticon-cross"></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>     
            </div>
            
            <div class="row cart-middle">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="apply-coupon">
                        <input type="text" name="coupon-code" value="" placeholder="Enter Coupon Code...">
                        <div class="apply-coupon-button">
                            <button class="theme-btn btn-style-one" type="button"><span class="btn-title">Apply Coupon</span></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="update-cart pull-right">
                        <button class="theme-btn btn-style-one" type="button"><span class="btn-title">Update Cart</span></button>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
@endsection