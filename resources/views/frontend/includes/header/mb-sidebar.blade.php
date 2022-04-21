<section class="side-wrap">
    <div class="opacity" id="opacity">
    </div>
    <div class="sidebar" id="sidebar-block">
        <ul class="nav nav-pills w-100" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-category-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-category" type="button" role="tab" aria-controls="pills-category"
                    aria-selected="true">Menu</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-login-tab" data-bs-toggle="pill" data-bs-target="#pills-login"
                    type="button" role="tab" aria-controls="pills-login" aria-selected="false">
                    <i class="lar la-user"></i>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-cart-tab" data-bs-toggle="pill" data-bs-target="#pills-cart" type="button"
                    role="tab" aria-controls="pills-cart" aria-selected="false">
                    <i class="las la-shopping-cart"></i>
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <div class="cancel" id="cancel">
                    <i class="las la-times"></i>
                </div>
            </li>
        </ul>
        <div class="tab-content p-2" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-category" role="tabpanel"
                aria-labelledby="pills-category-tab">
                <ul class="accordion">
                    <li class="sub-menu">
                        <button>Electronic Devices</button>
                        <ul class="child">
                            <li><a href="javascript:void(0)">Smartphones</a></li>
                            <li><a href="javascript:void(0)">Feature Phones</a></li>
                            <li><a href="javascript:void(0)">Tablets</a></li>
                            <li><a href="javascript:void(0)">Laptops</a></li>
                            <li><a href="javascript:void(0)">Desktops</a></li>
                            <li><a href="javascript:void(0)">Gaming Consoles</a> </li>
                            <li><a href="javascript:void(0)">Cameras</a></li>
                            <li><a href="javascript:void(0)">Printers</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <button>Halal Foods & Grocery</button>
                        <ul class="child">
                            <li><a href="javascript:void(0)">Rice</a> </li>
                            <li><a href="javascript:void(0)">Meat</a></li>
                            <li><a href="javascript:void(0)">Spices & Dals</a></li>
                            <li><a href="javascript:void(0)">Ghee & Oil</a></li>
                            <li><a href="javascript:void(0)">Dal & Beans</a></li>
                            <li><a href="javascript:void(0)">Spices</a> </li>
                            <li><a href="javascript:void(0)">Vegetables</a></li>
                            <li><a href="javascript:void(0)">Maida</a></li>
                            <li><a href="javascript:void(0)">Pickles</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu"><a href="javascript:void(0)">Babies & Toys</a></li>
                    <li class="sub-menu"><a href="javascript:void(0)">Men's Fashion</a></li>
                    <li class="sub-menu"><a href="javascript:void(0)">Women`s Fashion</a></li>
                    <li class="sub-menu"><a href="javascript:void(0)">Books, Comics & Magazines</a></li>
                    <li class="sub-menu"><a href="javascript:void(0)">Sell - Used goods</a></li>
                    <li class="sub-menu"><a href="javascript:void(0)">Sunglasses</a></li>
                    <li class="sub-menu"><a href="javascript:void(0)">Thrift Store</a></li>
                    <li class="sub-menu"><a href="javascript:void(0)">Helmet, Visor and Mohawk</a></li>
                </ul>
            </div>
            <div class="tab-pane fade" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                <div class="account-modal">
                    <ul class="nav nav-pills w-100" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link account-link active" id="pills-login-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-login" type="button" role="tab" aria-controls="pills-login"
                                aria-selected="true">login</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-signup-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-signup" type="button" role="tab" aria-controls="pills-signup"
                                aria-selected="false">signup</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-login" role="tabpanel"
                            aria-labelledby="pills-login-tab">
                            <form action="" class="account-form">
                                <div class="form-group mb-3">
                                    <label for="">Username or email address *</label>
                                    <input type="text" class="from-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Password *</label>
                                    <input type="password" class="from-control">
                                </div>
                                <div class="form-footer">
                                    <a href="{{url('user-dashboard')}}" class="form-btn me-3">Login <i
                                            class="las la-long-arrow-alt-right"></i></a>
                                    <!-- <button type="submit" class="form-btn">Login <i
                                            class="las la-long-arrow-alt-right"></i></button> -->
                                    <a href="javascript:void(0)">Forgot Your Password?</a>
                                </div>
                                <hr>
                                <p>or sign in with</p>
                                <div class="form-social d-block">
                                    <a href="javascript:(0)" class="btn form-social-btn w-100 mb-3"><i
                                            class="lab la-google"></i>login with google</a>
                                    <a href="javascript:(0)" class="btn form-social-btn w-100 mb-3"><i
                                            class="lab la-facebook-f"></i>login with facebook</a>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                            <form action="" class="account-form">
                                <div class="form-group mb-3">
                                    <label for="">Your email address *</label>
                                    <input type="text" class="from-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Password *</label>
                                    <input type="password" class="from-control">
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="form-btn me-3">Sign up <i
                                            class="las la-long-arrow-alt-right"></i></button>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">I agree to the privacy
                                            policy</label>
                                    </div>
                                </div>
                                <hr>
                                <p>or sign in with</p>
                                <div class="form-social d-block">
                                    <a href="javascript:(0)" class="btn form-social-btn w-100 mb-3"><i
                                            class="lab la-google"></i>login with google</a>
                                    <a href="javascript:(0)" class="btn form-social-btn w-100 mb-3"><i
                                            class="lab la-facebook-f"></i>login with facebook</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-cart" role="tabpanel" aria-labelledby="pills-cart-tab">...</div>
        </div>
    </div>
</section>