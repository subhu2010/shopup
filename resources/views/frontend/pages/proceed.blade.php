@extends("frontend.layout.layout")

@section("page_title", "Shopup")

@section("content")

<section class="breadcrumb-wrap list-wrap">
    @include('frontend.includes.homepage.breadcrumb',['title' => 'Delivery Information'])

    <div class="user-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="user-content">
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>Delivery Information</h5>
                                </div>
                            </div>
                            <div class="delivery">
                                <div class="delivery-left d-block w-100 delivery-block">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="">Enter your Full Name</label>
                                                    <input type="text" placeholder="Name" value="Sanjay Rawal" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group">
                                                    <label for="">Enter Phone Number</label>
                                                    <input type="number" placeholder="Number" value="9861674444" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 ">
                                                <div class="form-group">
                                                    <label for="">Choose a region</label>
                                                    <select class="inputbox">
                                                        <option value="">Select</option>
                                                        <option value="1">Region 1</option>
                                                        <option value="12">Region 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 ">
                                                <div class="form-group">
                                                    <label for="">Choose a City</label>
                                                    <select class="inputbox">
                                                        <option value="">Select</option>
                                                        <option value="1">City 1</option>
                                                        <option value="12">City 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 ">
                                                <div class="form-group">
                                                    <label for="">Choose a Area</label>
                                                    <select class="inputbox">
                                                        <option value="">Select</option>
                                                        <option value="1">Area 1</option>
                                                        <option value="12">Area 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group">
                                                    <label for="">Address</label>
                                                    <input type="text" placeholder="Address" value="" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 ">
                                                <div class="form-group checkbox">
                                                    <input type="checkbox" id="test1" name="checkbox-group" checked>
                                                    <label for="test1">Select same billing address</label>
                                                </div>
                                            </div>

                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group text-center">
                                                    <a href="{{url('payment')}}" class="site-button">Proceed to
                                                        Payment</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="user-content pb-5">
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