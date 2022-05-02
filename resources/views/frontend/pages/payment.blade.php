@extends("frontend.layout.layout")

@section("page_title", "Shopup")

@section("content")

<section class="breadcrumb-wrap list-wrap">
    @include('frontend.includes.homepage.breadcrumb',['title' => 'Payment Method'])

    <div class="user-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="user-content">
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>Payment Method</h5>
                                </div>
                            </div>
                            <div class="delivery pay">
                                <ul>
                                    <li>
                                        <img src="{{asset('frontend/img/pay/khalti.png')}}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{asset('frontend/img/pay/e-sewa.png')}}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{asset('frontend/img/pay/linepay.svg')}}" alt="">
                                    </li>
                                </ul>
                                <div class="mt-4 text-center">
                                    <a href="{{url('confirm')}}" class="site-button btn">Choose payment method</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="user-content p-0">
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h6>Package 2/2</h6>
                                </div>
                                <div class="right">
                                    <h6>Shipped by Shophab delivery</h6>
                                </div>
                            </div>
                            <div class="order history cart">
                                <ul>
                                    <li class="cart-list">
                                        <div class="order-block">
                                            <div class="img ">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="select" name="checkbox-group" checked>
                                                    <label for="select">
                                                        <img src="{{asset('frontend/img/product/p-1.jpg')}}" alt="">
                                                    </label>
                                                </div>
                                                <div class="production-dtl">
                                                    <span class="" title="No Brand">No Brand</span>
                                                    <span class="d-block">No Size</span>
                                                </div>
                                            </div>
                                            <div class="order-content">
                                                <a href="{{url('detail')}}">
                                                    <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                </a>
                                                <div class="quantity-button ">
                                                    <span>Quantity</span>
                                                    <div class="custom-button">
                                                        <div class="product-counter">
                                                            <input id="minus" class="minus" type="button" value="-" />
                                                            <input id="quantity" class="quantity" type="text" value="1"
                                                                name="quantity" />
                                                            <input id="plus" class="plus" type="button" value="+" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="past">Rs 500</li>
                                                    <li class="present">50% off</li>
                                                </ul>
                                                <h5>Rs. 399</h5>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="cart-list">
                                        <div class="order-block">
                                            <div class="img ">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="select" name="checkbox-group" checked>
                                                    <label for="select">
                                                        <img src="{{asset('frontend/img/product/p-1.jpg')}}" alt="">
                                                    </label>
                                                </div>
                                                <div class="production-dtl">
                                                    <span class="" title="No Brand">No Brand</span>
                                                    <span class="d-block">No Size</span>
                                                </div>
                                            </div>
                                            <div class="order-content">
                                                <a href="{{url('detail')}}">
                                                    <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                </a>
                                                <div class="quantity-button ">
                                                    <span>Quantity</span>
                                                    <div class="custom-button">
                                                        <div class="product-counter">
                                                            <input id="minus" class="minus" type="button" value="-" />
                                                            <input id="quantity" class="quantity" type="text" value="1"
                                                                name="quantity" />
                                                            <input id="plus" class="plus" type="button" value="+" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li class="past">Rs 500</li>
                                                    <li class="present">50% off</li>
                                                </ul>
                                                <h5>Rs. 399</h5>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                   
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="user-content">
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>Cuppons</h5>
                                </div>
                            </div>
                            <div class="custom-block">
                                <ul class="apply">
                                    <li><i class="las la-tag"></i> Apply Cuppons</li>
                                    <li>
                                        <button class="site-button btn">Apply</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>Gifts and Wrapping</h5>
                                </div>
                            </div>
                            <div class="custom-block list-mid">
                                <h6>Buying for loved ones?</h6>
                                <p>Gift wrap and personalized message only at Rs 50</p>
                                <button class="site-button btn">Gift a card</button>
                            </div>
                        </div>
                        <div class="user-block">
                            <div class="custom-block list-mid">
                                <div class="d-flex justify-content-between">
                                    <p>Name</p>
                                    <p>Sagar Ghimire</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Phone</p>
                                    <p>9808495505</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p>Address</p>
                                    <p>Harisiddhi-8, Lalitpur</p>
                                </div>
                            </div>
                        </div>
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>Price Details</h5>
                                </div>
                            </div>
                            <div class="custom-block">
                                <ul>
                                    <li>Total MRP <b>Rs 1429</b></li>
                                    <li>Discount on MRP <b>Rs 400</b></li>
                                    <li>Cupon Discount <b>Rs 600</b></li>
                                    <li>Convinence Fee <b><span class="past">Rs 150</span><span class="present">Rs
                                                600</span></b></li>
                                    <li class="total">Total Amount <b>Rs 13999</b></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection