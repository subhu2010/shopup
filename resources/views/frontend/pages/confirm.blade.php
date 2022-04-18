@extends("frontend.layout.layout")

@section("page_title", "Shopup")

@section("content")

<section class="breadcrumb-wrap list-wrap">
    @include('frontend.includes.homepage.breadcrumb',['title' => 'Confirm Order'])
    <div class="user-dashboard">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    <div class="user-content">
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>Confirm Order</h5>
                                </div>
                            </div>
                            <div class="delivery confirm">
                                <table>
                                    <thead>
                                        <tr>
                                            <th>Shipping Details</th>
                                            <th>Billing Details</th>
                                            <th>Payment Method Selected</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <p><i class="las la-map-marker"></i>Santana, Ghorahi Chwok, Koteshwor
                                                    Area
                                                    - Kathmandu Metro 32, Kathmandu</p>
                                                <p><i class="las la-phone-alt"></i>9804632166</p>
                                            </td>
                                            <td>
                                                <p><i class="las la-map-marker"></i>Santana, Ghorahi Chwok, Koteshwor
                                                    Area
                                                    - Kathmandu Metro 32, Kathmandu</p>
                                                <p><i class="las la-phone-alt"></i>9804632166</p>
                                            </td>
                                            <td>
                                                <p><img src="img/pay/e-sewa.png" alt=""></p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="order history cart">
                                <ul>
                                    <li class="cart-list">
                                        <a href="{{url('detail')}}">
                                            <div class="order-block">
                                                <div class="img ">
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="select" name="checkbox-group"
                                                            checked>
                                                        <label for="select">
                                                            <img src="{{asset('frontend/img/product/p-1.jpg')}}" alt="">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="order-content">
                                                    <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                    <div class="quantity-button ">
                                                        <span>Quantity</span>
                                                        <div class="custom-button" style="width:20%">
                                                            <div class="product-counter">
                                                                <input id="minus" class="minus" type="button"
                                                                    value="-" />
                                                                <input id="quantity" class="quantity" type="text"
                                                                    value="1" name="quantity" />
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
                                                <div class="action">
                                                    <i class="las la-trash "></i>
                                                    <svg width="28" height="25" viewBox="0 0 28 25" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0001 2.35613C12.5473 1 10.6458 0.247347 8.67214 0.247284C7.62752 0.248388 6.59344 0.459196 5.62939 0.867577C4.66534 1.27596 3.79036 1.87385 3.0548 2.62684C-0.0825297 5.8253 -0.0811965 10.8281 3.05747 14.013L12.8335 23.9373C13.0601 24.342 13.4975 24.6032 14.0001 24.6032C14.2065 24.6012 14.4096 24.55 14.593 24.4539C14.7764 24.3578 14.935 24.2193 15.0561 24.0496L24.9428 14.013C28.0815 10.8267 28.0815 5.8253 24.9401 2.62143C24.205 1.86982 23.3307 1.27314 22.3676 0.865702C21.4045 0.458263 20.3715 0.248096 19.3281 0.247284C17.3546 0.247611 15.4531 1.00023 14.0001 2.35613ZM23.0548 4.53536C25.1388 6.6618 25.1401 9.98343 23.0575 12.099L14.0001 21.2938L4.9428 12.099C2.86014 9.98343 2.86147 6.6618 4.94014 4.54077C5.95347 3.51748 7.2788 2.9544 8.67214 2.9544C10.0655 2.9544 11.3855 3.51748 12.3908 4.53807L13.0575 5.21485C13.1812 5.34065 13.3281 5.44046 13.4899 5.50856C13.6516 5.57666 13.825 5.61171 14.0001 5.61171C14.1752 5.61171 14.3486 5.57666 14.5104 5.50856C14.6721 5.44046 14.8191 5.34065 14.9428 5.21485L15.6095 4.53807C17.6255 2.49555 21.0415 2.50096 23.0548 4.53536Z"
                                                            fill="black" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cart-list">
                                        <a href="{{url('detail')}}">
                                            <div class="order-block">
                                                <div class="img ">
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="select1" name="checkbox-group">
                                                        <label for="select1">
                                                            <img src="{{asset('frontend/img/product/p-1.jpg')}}" alt="">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="order-content">
                                                    <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                    <div class="quantity-button ">
                                                        <span>Quantity</span>
                                                        <div class="custom-button" style="width:20%">
                                                            <div class="product-counter">
                                                                <input id="minus" class="minus" type="button"
                                                                    value="-" />
                                                                <input id="quantity" class="quantity" type="text"
                                                                    value="1" name="quantity" />
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
                                                <div class="action">
                                                    <i class="las la-trash "></i>
                                                    <svg width="28" height="25" viewBox="0 0 28 25" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0001 2.35613C12.5473 1 10.6458 0.247347 8.67214 0.247284C7.62752 0.248388 6.59344 0.459196 5.62939 0.867577C4.66534 1.27596 3.79036 1.87385 3.0548 2.62684C-0.0825297 5.8253 -0.0811965 10.8281 3.05747 14.013L12.8335 23.9373C13.0601 24.342 13.4975 24.6032 14.0001 24.6032C14.2065 24.6012 14.4096 24.55 14.593 24.4539C14.7764 24.3578 14.935 24.2193 15.0561 24.0496L24.9428 14.013C28.0815 10.8267 28.0815 5.8253 24.9401 2.62143C24.205 1.86982 23.3307 1.27314 22.3676 0.865702C21.4045 0.458263 20.3715 0.248096 19.3281 0.247284C17.3546 0.247611 15.4531 1.00023 14.0001 2.35613ZM23.0548 4.53536C25.1388 6.6618 25.1401 9.98343 23.0575 12.099L14.0001 21.2938L4.9428 12.099C2.86014 9.98343 2.86147 6.6618 4.94014 4.54077C5.95347 3.51748 7.2788 2.9544 8.67214 2.9544C10.0655 2.9544 11.3855 3.51748 12.3908 4.53807L13.0575 5.21485C13.1812 5.34065 13.3281 5.44046 13.4899 5.50856C13.6516 5.57666 13.825 5.61171 14.0001 5.61171C14.1752 5.61171 14.3486 5.57666 14.5104 5.50856C14.6721 5.44046 14.8191 5.34065 14.9428 5.21485L15.6095 4.53807C17.6255 2.49555 21.0415 2.50096 23.0548 4.53536Z"
                                                            fill="black" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="cart-list">
                                        <a href="{{url('detail')}}">
                                            <div class="order-block">
                                                <div class="img ">
                                                    <div class="checkbox">
                                                        <input type="checkbox" id="select2" name="checkbox-group">
                                                        <label for="select2">
                                                            <img src="{{asset('frontend/img/product/p-1.jpg')}}" alt="">
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="order-content">
                                                    <h6>Ezeekart silicone wall mounted toilet brush</h6>
                                                    <div class="quantity-button ">
                                                        <span>Quantity</span>
                                                        <div class="custom-button" style="width:20%">
                                                            <div class="product-counter">
                                                                <input id="minus" class="minus" type="button"
                                                                    value="-" />
                                                                <input id="quantity" class="quantity" type="text"
                                                                    value="1" name="quantity" />
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
                                                <div class="action">
                                                    <i class="las la-trash "></i>
                                                    <svg width="28" height="25" viewBox="0 0 28 25" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M14.0001 2.35613C12.5473 1 10.6458 0.247347 8.67214 0.247284C7.62752 0.248388 6.59344 0.459196 5.62939 0.867577C4.66534 1.27596 3.79036 1.87385 3.0548 2.62684C-0.0825297 5.8253 -0.0811965 10.8281 3.05747 14.013L12.8335 23.9373C13.0601 24.342 13.4975 24.6032 14.0001 24.6032C14.2065 24.6012 14.4096 24.55 14.593 24.4539C14.7764 24.3578 14.935 24.2193 15.0561 24.0496L24.9428 14.013C28.0815 10.8267 28.0815 5.8253 24.9401 2.62143C24.205 1.86982 23.3307 1.27314 22.3676 0.865702C21.4045 0.458263 20.3715 0.248096 19.3281 0.247284C17.3546 0.247611 15.4531 1.00023 14.0001 2.35613ZM23.0548 4.53536C25.1388 6.6618 25.1401 9.98343 23.0575 12.099L14.0001 21.2938L4.9428 12.099C2.86014 9.98343 2.86147 6.6618 4.94014 4.54077C5.95347 3.51748 7.2788 2.9544 8.67214 2.9544C10.0655 2.9544 11.3855 3.51748 12.3908 4.53807L13.0575 5.21485C13.1812 5.34065 13.3281 5.44046 13.4899 5.50856C13.6516 5.57666 13.825 5.61171 14.0001 5.61171C14.1752 5.61171 14.3486 5.57666 14.5104 5.50856C14.6721 5.44046 14.8191 5.34065 14.9428 5.21485L15.6095 4.53807C17.6255 2.49555 21.0415 2.50096 23.0548 4.53536Z"
                                                            fill="black" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="button text-center">
                                    <button  class=" site-button ">Pay From Esewa</button>
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