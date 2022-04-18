<!-- header -->
<header id="header">
    <div class="header__top">
        <div class="container">
            <div class="top__content">
                <div class="top__content">
                    <div class="top__left">
                        <ul class="header--custom--left">
                            <li>
                                <a href="javascript:void(0)"><i class="las la-phone"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lab la-whatsapp"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lab la-viber"></i></a>
                            </li>
                            <li>
                                <a href="tel:9841414141">9841414141</a>
                            </li>
                        </ul>
                    </div>
                    <div class="top__center">
                        <ul class="header--custom--left">
                            <li>
                                <a href="javascript:void(0)">Shop at shopup for best deals</a>
                            </li>
                        </ul>
                    </div>
                    <div class="top__right">
                        <ul>
                            <li class=top-head>
                                <a href="javascript:void(0)">Gift Coupons</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main__header">
        <nav class="navbar header__menu navbar-expand-lg navbar-dark ">
            <div class="container">
                <div class="header__right">
                    <div class="header__logo">
                        <a href="index.php">
                            <img src="{{asset('frontend/img/logo/logo-rm.png')}}" alt="">
                        </a>
                    </div>
                    <div class="searchBar">
                        <button id="searchQueryIcon" type="submit" name="searchQuerySubmit">
                            <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                                <path fill="#fff"
                                    d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" />
                            </svg>
                        </button>
                        <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search"
                            value="" />
                        <button id="searchQuerySubmit" class="d-none d-lg-block" type="submit" name="searchQuerySubmit">
                            Submit
                        </button>
                    </div>
                    <div class="filter 	d-block d-sm-block d-md-block d-lg-none">
                        <button id="sidebarButton"> More</button>
                    </div>
                    <!-- <div class="header__logo d-lg-none">
                        <a href="index.php">
                            <img src="{{asset('frontend/img/logo/logo-rm.png')}}" alt="">
                        </a>
                    </div> -->
                </div>


                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#loginModal">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M12 0C10.6815 0 9.39253 0.370414 8.2962 1.0644C7.19987 1.75839 6.34539 2.74478 5.8408 3.89884C5.33622 5.0529 5.2042 6.3228 5.46143 7.54794C5.71867 8.77308 6.3536 9.89845 7.28595 10.7817C8.21831 11.665 9.40619 12.2665 10.6994 12.5102C11.9926 12.7539 13.333 12.6288 14.5512 12.1508C15.7694 11.6728 16.8106 10.8633 17.5431 9.82465C18.2757 8.78603 18.6667 7.56493 18.6667 6.31579C18.6667 4.64074 17.9643 3.03429 16.714 1.84985C15.4638 0.665412 13.7681 0 12 0ZM12 10.1053C11.2089 10.1053 10.4355 9.88301 9.77772 9.46662C9.11992 9.05023 8.60723 8.45839 8.30448 7.76596C8.00173 7.07352 7.92252 6.31159 8.07686 5.5765C8.2312 4.84141 8.61216 4.16619 9.17157 3.63623C9.73098 3.10626 10.4437 2.74535 11.2196 2.59913C11.9956 2.45291 12.7998 2.52796 13.5307 2.81477C14.2616 3.10159 14.8864 3.58729 15.3259 4.21047C15.7654 4.83365 16 5.5663 16 6.31579C16 7.32082 15.5786 8.28469 14.8284 8.99535C14.0783 9.70602 13.0609 10.1053 12 10.1053ZM24 24V22.7368C24 20.3918 23.0167 18.1427 21.2663 16.4845C19.516 14.8263 17.142 13.8947 14.6667 13.8947H9.33333C6.85798 13.8947 4.48401 14.8263 2.73367 16.4845C0.98333 18.1427 0 20.3918 0 22.7368V24H2.66667V22.7368C2.66667 21.0618 3.36905 19.4553 4.61929 18.2709C5.86953 17.0865 7.56522 16.4211 9.33333 16.4211H14.6667C16.4348 16.4211 18.1305 17.0865 19.3807 18.2709C20.631 19.4553 21.3333 21.0618 21.3333 22.7368V24H24Z"
                                        fill="#000" />
                                </svg>
                                Account
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)">
                                <svg width="20" height="20" viewBox="0 0 16 14" fill="#000"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M15.0908 3.57361C15.021 3.47229 14.9272 3.38947 14.8184 3.33228C14.7095 3.27509 14.5884 3.24518 14.4653 3.24512H4.06006L3.18164 1.13416C3.14307 1.04096 3.09521 0.952335 3.03955 0.869388C2.9292 0.704898 2.78711 0.562747 2.62109 0.451785C2.37109 0.284915 2.07666 0.19617 1.77637 0.19678H0V1.72095H1.77637L5.3877 10.3973C5.4458 10.5361 5.54346 10.6547 5.66846 10.7381C5.79346 10.8215 5.94043 10.866 6.09082 10.866H12.1812C12.4985 10.866 12.7827 10.6686 12.8945 10.3722L15.1787 4.27545C15.2217 4.1601 15.2363 4.03601 15.2212 3.91376C15.2148 3.86267 15.2031 3.81256 15.187 3.7641C15.1641 3.69666 15.1318 3.63251 15.0908 3.57361ZM11.6538 9.34186H6.59863L4.69531 4.76929H13.3667L11.6538 9.34186ZM6.47168 13.9144C7.10205 13.9144 7.61377 13.4026 7.61377 12.7712C7.61377 12.1399 7.10205 11.6281 6.47168 11.6281C5.84082 11.6281 5.32959 12.1399 5.32959 12.7712C5.32959 13.4026 5.84082 13.9144 6.47168 13.9144ZM12.9429 12.7712C12.9429 13.4026 12.4312 13.9144 11.8008 13.9144C11.1699 13.9144 10.6587 13.4026 10.6587 12.7712C10.6587 12.1399 11.1699 11.6281 11.8008 11.6281C12.4312 11.6281 12.9429 12.1399 12.9429 12.7712Z"
                                        fill="#000" />
                                </svg>

                                cart
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="javascript:void(0)">
                                <svg width="20" height="20" viewBox="0 0 16 14" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.6133 1.18733C6.78376 0.4238 5.69796 3.54779e-05 4.57104 0C3.97457 0.000621636 3.38412 0.119312 2.83365 0.349241C2.28318 0.579169 1.78358 0.915796 1.36358 1.33975C-0.427817 3.14056 -0.427056 5.95724 1.3651 7.75043L6.94714 13.3381C7.07656 13.5659 7.32628 13.713 7.6133 13.713C7.73115 13.7119 7.84709 13.6831 7.95181 13.6289C8.05653 13.5748 8.1471 13.4968 8.21626 13.4013L13.8615 7.75043C15.6536 5.95648 15.6536 3.14056 13.86 1.3367C13.4402 0.913527 12.941 0.577584 12.391 0.348185C11.8411 0.118786 11.2513 0.000456953 10.6555 0C9.52866 0.000184394 8.44291 0.423928 7.6133 1.18733ZM12.7835 2.41429C13.9734 3.61153 13.9742 5.4817 12.785 6.67284L7.6133 11.8497L2.44162 6.67284C1.25243 5.4817 1.25319 3.61153 2.44009 2.41734C3.0187 1.8412 3.77546 1.52418 4.57104 1.52418C5.36663 1.52418 6.12034 1.8412 6.69438 2.41582L7.07504 2.79686C7.14568 2.86769 7.22958 2.92389 7.32194 2.96223C7.4143 3.00057 7.51331 3.02031 7.6133 3.02031C7.71328 3.02031 7.81229 3.00057 7.90465 2.96223C7.99701 2.92389 8.08091 2.86769 8.15155 2.79686L8.53221 2.41582C9.68334 1.26583 11.6339 1.26888 12.7835 2.41429Z"
                                        fill="#000" />
                                </svg>

                                wishlist
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="main__nav d-none d-lg-block">
        <div class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link custon__nav__link active" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custon__nav__link" href="{{url('listing-page')}}">New products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custon__nav__link" href="{{url('listing-page')}}">On sale</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custon__nav__link" href="{{url('listing-page')}}">Popular products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custon__nav__link" href="{{url('listing-page')}}">Trending products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custon__nav__link" href="{{url('listing-page')}}">Track my order</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link custon__nav__link" href="{{url('listing-page')}}">Become seller</a>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- /header -->
<section class="side-wrap">
    <div class="opacity" id="opacity">
    </div>
    <div class="sidebar" id="sidebar-block">
        <div class="cancel" id="cancel">
            <i class="las la-times"></i>
        </div>
        <ul class="accordion">
            <li class="sub-menu">
                <button>Today's Featured Collections</button>
                <ul class="child">
                    <li><a href="javascript:void(0)">Press Every Button</a></li>
                    <li><a href="javascript:void(0)">Travel with Technology</a></li>
                    <li><a href="javascript:void(0)">Smart Choice</a></li>
                    <li><a href="javascript:void(0)">Fall in Love with Tech</a></li>
                    <li><a href="javascript:void(0)">Smartphones at a Snip</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <button>Today's Featured Collections</button>
                <ul class="child">
                    <li><a href="javascript:void(0)">Press Every Button</a></li>
                    <li><a href="javascript:void(0)">Travel with Technology</a></li>
                    <li><a href="javascript:void(0)">Smart Choice</a></li>
                    <li><a href="javascript:void(0)">Fall in Love with Tech</a></li>
                    <li><a href="javascript:void(0)">Smartphones at a Snip</a></li>
                </ul>
            </li>
        </ul>
    </div>

</section>


<!-- Modal -->
<div class="">
    <div class="modal fade account-modal" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-0 p-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-0">
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
                                    <button type="submit" class="form-btn">Login <i
                                            class="las la-long-arrow-alt-right"></i></button>
                                    <a href="javascript:void(0)">Forgot Your Password?</a>
                                </div>
                                <hr>
                                <p>or sign in with</p>
                                <div class="form-social">
                                    <a href="javascript:(0)" class="btn form-social-btn"><i
                                            class="lab la-google"></i>login with google</a>
                                    <a href="javascript:(0)" class="btn form-social-btn"><i
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
                                    <button type="submit" class="form-btn">Sign up <i
                                            class="las la-long-arrow-alt-right"></i></button>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">I agree to the privacy policy</label>
                                    </div>
                                </div>
                                <hr>
                                <p>or sign in with</p>
                                <div class="form-social">
                                    <a href="javascript:(0)" class="btn form-social-btn"><i
                                            class="lab la-google"></i>login with google</a>
                                    <a href="javascript:(0)" class="btn form-social-btn"><i
                                            class="lab la-facebook-f"></i>login with facebook</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>