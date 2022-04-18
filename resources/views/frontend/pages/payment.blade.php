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

                                        <img src="img/pay/e-sewa.png" alt="">
                                    </li>
                                    <li>

                                        <img src="img/pay/khalti.png" alt="">
                                    </li>
                                    <li>

                                        <img src="img/pay/master.png" alt="">
                                    </li>
                                    <li>

                                        <img src="img/pay/visa.png" alt="">
                                    </li>
                                </ul>
                                <div class="mt-4">
                                    <a href="{{url('confirm')}}" class="site-button btn">Choose payment method</a>
                                </div>
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