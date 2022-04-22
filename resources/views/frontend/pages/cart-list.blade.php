@extends("frontend.layout.layout")

@section("page_title", "Shopup")

@section("content")

<section class="breadcrumb-wrap list-wrap">
    <div class="user-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8" style="border-right: 1px solid #A9A9A9;">
                    @include('frontend.includes.cart-product',['title' => 'My Cart'])
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
                                  <li>Convinence Fee <b><span class="past">Rs 150</span><span class="present">Rs 600</span></b></li>
                                  <li class="total">Total Amount <b>Rs 13999</b></li>
                              </ul>
                            </div>
                            <div class="button">
                                <a href="{{url('cart-list-proceed')}}" class="btn site-button all-button">Place Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection