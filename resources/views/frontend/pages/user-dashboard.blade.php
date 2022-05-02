@extends("frontend.layout.layout")

@section("page_title", "Shopup")

@section("content")

<section class="breadcrumb-wrap list-wrap">
    @include('frontend.includes.homepage.breadcrumb',['title' => 'User Dashboard'])

    <div class="user-dashboard ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="user-sidebar">
                        @include('frontend.includes.user-dashboard-sidebar')
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <div class="user-content">
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>Profile Overview</h5>
                                </div>
                                <div class="view-tours review-comment d-flex align-items-center">
                                    <a href="{{url('user-edit')}}">Edit</a>
                                </div>
                            </div>
                            <div class="user-profile">
                                <div class="img">
                                    <img src="{{asset('frontend/img/user.png')}}" alt="">
                                </div>
                                <div class="profile-info">
                                    <h5>Sabina Dangol</h5>
                                    <span>ghimire.sagar@gmail.com</span>
                                    <span>9808575505</span>
                                    <ul class=" social">
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="lab la-facebook-f"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="lab la-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="lab la-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" target="_blank">
                                                <i class="lab la-linkedin-in"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>Overview</h5>
                                </div>
                            </div>
                            <div class="user-flex">
                                <div class="overview-block">
                                    <h5>Total Orders</h5>
                                    <h3>320</h3>
                                </div>
                                <div class="overview-block">
                                    <h5>Total Returns</h5>
                                    <h3>520</h3>
                                </div>
                                <div class="overview-block">
                                    <h5>Total Cancellations</h5>
                                    <h3>220</h3>
                                </div>
                                <div class="overview-block">
                                    <h5>Total wishlist</h5>
                                    <h3>120</h3>
                                </div>
                            </div>
                        </div>
                        <div class="user-block ">
                            <div class="delivery">
                                <div class="delivery-left delivery-block ship-address">
                                    <h5>Shipping Address</h5>
                                    <ul>
                                        <li>Harisidhhi-8 lalitpur</li>
                                        <li>Bagmati Province</li>
                                        <li>Outside Ringroad, Harisiddhi Patan Area</li>
                                        <li>9808495505</li>
                                    </ul>
                                </div>
                                <div class="delivery-right delivery-block bill-address">
                                    <h5>Billing Address</h5>
                                    <ul>
                                        <li>Harisidhhi-8 lalitpur</li>
                                        <li>Bagmati Province</li>
                                        <li>Outside Ringroad, Harisiddhi Patan Area</li>
                                        <li>9808495505</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="user-block">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="order">
                                        <div class="site-header">
                                            <div class="head">
                                                <h5>Recent Order</h5>
                                            </div>
                                            <div class="view-tours review-comment d-flex align-items-center">
                                                <a href="{{url('user-order')}}">See all</a>
                                            </div>
                                        </div>

                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <div class="order-block">
                                                        <div class="img">
                                                            <img src="{{asset('frontend/img/product/p-1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="order-content">
                                                            <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                            <ul>
                                                                <li>No Brand</li>
                                                                <li>No size</li>
                                                            </ul>
                                                            <ul>
                                                                <li class="past">Rs 500</li>
                                                                <li class="present">50% off</li>
                                                            </ul>
                                                            <h5>Rs. 399</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="order-block">
                                                        <div class="img">
                                                            <img src="{{asset('frontend/img/product/p-1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="order-content">
                                                            <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                            <ul>
                                                                <li>No Brand</li>
                                                                <li>No size</li>
                                                            </ul>
                                                            <ul>
                                                                <li class="past">Rs 500</li>
                                                                <li class="present">50% off</li>
                                                            </ul>
                                                            <h5>Rs. 399</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="order-block">
                                                        <div class="img">
                                                            <img src="{{asset('frontend/img/product/p-1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="order-content">
                                                            <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                            <ul>
                                                                <li>No Brand</li>
                                                                <li>No size</li>
                                                            </ul>
                                                            <ul>
                                                                <li class="past">Rs 500</li>
                                                                <li class="present">50% off</li>
                                                            </ul>
                                                            <h5>Rs. 399</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="order-block">
                                                        <div class="img">
                                                            <img src="{{asset('frontend/img/product/p-1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="order-content">
                                                            <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                            <ul>
                                                                <li>No Brand</li>
                                                                <li>No size</li>
                                                            </ul>
                                                            <ul>
                                                                <li class="past">Rs 500</li>
                                                                <li class="present">50% off</li>
                                                            </ul>
                                                            <h5>Rs. 399</h5>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
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


@endsection