@extends("frontend.layout.layout")

@section("page_title", "Shopup")

@section("content")

<section class="details">
    @include('frontend.includes.homepage.breadcrumb',['title' => 'Product Details'])

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-5">
                <div class="detail-img">
                    <div class="large-5 column m-auto">
                        <div class="xzoom-container">
                            <img class="xzoom5" id="xzoom-magnific"
                                src="{{asset('frontend/images/gallery/preview/01_b_car.jpg')}}"
                                xoriginal="{{asset('frontend/images/gallery/original/01_b_car.jpg')}}" />
                            <div class="xzoom-thumbs">
                                <a href="{{asset('frontend/images/gallery/original/01_b_car.jpg')}}"><img
                                        class="xzoom-gallery5" width="80"
                                        src="{{asset('frontend/images/gallery/thumbs/01_b_car.jpg')}}"
                                        xpreview="{{asset('frontend/images/gallery/preview/01_b_car.jpg')}}"
                                        title="The description goes here"></a>
                                <a href="{{asset('frontend/images/gallery/original/02_o_car.jpg')}}"><img
                                        class="xzoom-gallery5" width="80"
                                        src="{{asset('frontend/images/gallery/preview/02_o_car.jpg')}}"
                                        title="The description goes here"></a>
                                <a href="{{asset('frontend/images/gallery/original/03_r_car.jpg')}}"><img
                                        class="xzoom-gallery5" width="80"
                                        src="{{asset('frontend/images/gallery/preview/03_r_car.jpg')}}"
                                        title="The description goes here"></a>
                                <a href="{{asset('frontend/images/gallery/original/04_g_car.jpg')}}"><img
                                        class="xzoom-gallery5" width="80"
                                        src="{{asset('frontend/images/gallery/preview/04_g_car.jpg')}}"
                                        title="The description goes here"></a>
                            </div>
                        </div>
                    </div>
                    <div class="large-7 column"></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-7">
                <div class="detail-right">
                    <h3>Lcd Writing Tablet 8.5 Inch Electronic Drawing</h3>
                    <div class="detail-info">
                        <h5>Rs. 4300</h5>
                        <h6>Sold by <span><a href="{{url('seller-detail')}}"> Subash Khakurel</a></span></h6>
                    </div>
                    <div class="detail-info">
                        <div class="right-button ">
                            <div class="custom-button">
                                <div class="product-counter">
                                    <input id="minus" type="button" value="-" />
                                    <input id="quantity" type="text" value="1" name="quantity" />
                                    <input id="plus" type="button" value="+" />
                                </div>
                                <a href="javascript:void(0)" class="btn cart-btn ms-5">add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="detail-info">
                        <div class="right-button ">
                            <a href="" class="d-block"><img src="{{asset('frontend/img/t-head/wishlist.svg')}}"
                                    alt="Wishlists">&nbsp;&nbsp;&nbsp;Add to Wishlist</a>
                        </div>
                    </div>
                    <div class="detail-info">
                        <div class="right-button">
                            <h5 class="me-5">Share</h5>
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-facebook-f"></i>
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
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="lab la-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="detail-info">
                        <div class="right-button">
                            <table>
                                <tr>
                                    <td class="table-left">
                                        <span>Size</span>
                                    </td>
                                    <td class="table-left">
                                        <span>XL</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-left">
                                        <span>color</span>
                                    </td>
                                    <td class="table-left">
                                        <div class="color">
                                            <span class="red">red</span>
                                            <span class="blue">blue</span>
                                            <span class="green">green</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-left">
                                        <span>brand</span>
                                    </td>
                                    <td class="table-left">
                                        <span>Hyandai</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-left">
                                        <span>rating</span>
                                    </td>
                                    <td class="table-left">
                                        <div class="ratting ">
                                            <ul>
                                                <li><i class="las la-star"></i></li>
                                                <li><i class="las la-star"></i></li>
                                                <li><i class="las la-star"></i></li>
                                                <li><i class="las la-star"></i></li>
                                                <li class="shade"><i class="las la-star"></i></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="detail-main-info">
            <ul class="nav nav-pills justify-content-center align-items-center mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link tab-nav-link" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link tab-nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                        aria-selected="false">Reviews</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade " id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="detail-right p-0">
                        <div class="detail-info">
                            <h5>PRODUCTS DESCRIPTION</h5>
                            <p>
                                Designed by Puik in 1949 as one of the first models created especially for Carl Hansen &
                                Son, and produced since 1950. The last of a series of chairs wegner designed based on
                                inspiration from antique chinese armchairs.
                            </p>
                        </div>
                        <div class="detail-info">
                            <h5>PRODUCT DETAILS</h5>
                            <ul>
                                <li>Material: Plastic, Wood</li>
                                <li>Legs: Lacquered oak and black painted oak</li>
                                <li>Dimensions and Weight: Height: 80 cm, Weight: 5.3 kg</li>
                                <li>Length: 48cm</li>
                                <li>Depth: 52 cm</li>
                                <li>Seat Height: 44 cm</li>
                            </ul>
                        </div>
                        <div class="detail-info">
                            <h5>PRODUCT BRAND</h5>
                            <p>
                                Form is an armless modern chair with a minimalistic expression. With a simple and
                                contemporary design Form Chair has a soft and welcoming silhouette and a distinctly
                                residential look. The legs appear almost as if they are growing out of the shell. This
                                gives the design flexibility and makes it possible to vary the frame.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                    aria-labelledby="pills-profile-tab">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="review">
                                <div class="review-wrap">
                                    <div class="site-header">
                                        <div class="head">
                                            <h5>Product Reviews</h5>
                                        </div>
                                    </div>
                                    <div class="review-block">
                                        <div class="review-content clearfix">
                                            <div class="content-img-left float-start">
                                                <img src="{{asset('frontend/img/product/girl.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="content-text-left float-end">
                                                <div class="review-top user">
                                                    <div class="top-left">
                                                        <div class="left-content">
                                                            <h6>Nina Holloway</h6>
                                                            <span>29<sup>th</sup> Aug 2022</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>text ever since the 1500s, when an unknown printer took a galley of
                                                    type
                                                    and
                                                    scrambled it to make a
                                                    type specimen book. It has survived not only five centuries, but
                                                    also
                                                    the leap into
                                                    electronic
                                                    typesetting
                                                </p>
                                                <div class="ratting">
                                                    <ul>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star-half"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-block">
                                        <div class="review-content clearfix">
                                            <div class="content-img-left float-start">
                                                <img src="{{asset('frontend/img/product/girl.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="content-text-left float-end">
                                                <div class="review-top user">
                                                    <div class="top-left">
                                                        <div class="left-content">
                                                            <h6>Nina Holloway</h6>
                                                            <span>29<sup>th</sup> Aug 2022</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>text ever since the 1500s, when an unknown printer took a galley of
                                                    type
                                                    and
                                                    scrambled it to make a
                                                    type specimen book. It has survived not only five centuries, but
                                                    also
                                                    the leap into
                                                    electronic
                                                    typesetting
                                                </p>
                                                <div class="ratting">
                                                    <ul>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star-half"></i></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review-block">
                                        <div class="review-content clearfix">
                                            <div class="content-img-left float-start">
                                                <img src="{{asset('frontend/img/product/girl.png')}}" alt="" class="img-fluid">
                                            </div>
                                            <div class="content-text-left float-end">
                                                <div class="review-top user">
                                                    <div class="top-left">
                                                        <div class="left-content">
                                                            <h6>Nina Holloway</h6>
                                                            <span>29<sup>th</sup> Aug 2022</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>text ever since the 1500s, when an unknown printer took a galley of
                                                    type
                                                    and
                                                    scrambled it to make a
                                                    type specimen book. It has survived not only five centuries, but
                                                    also
                                                    the leap into
                                                    electronic
                                                    typesetting
                                                </p>
                                                <div class="ratting">
                                                    <ul>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star"></i></li>
                                                        <li><i class="las la-star-half"></i></li>
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
            </div>
        </div>
</section>


<!-- slider -->
<section class="products banner spacing mobile">
    <div class="container">
        <div class="site-header">
            <h5>
                view similar products
            </h5>
        </div>
        <div class="similar-product br-rm owl-carousel mb-list">
            <div class="product-wrap">
                <div class="product-block">
                    <div class="product__img">
                        <img src="{{asset('frontend/img/product/p-1.webp')}}" alt="">
                        <div class="side-hov">
                            <ul>
                                <li>
                                    <a href="leave.php">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.05331 0.822327C1.58395 0.822327 0.388672 2.0188 0.388672 3.48963C0.388672 4.69373 1.19568 5.70197 2.29198 6.03272V11.4893C2.29122 11.6257 2.31254 12.8465 3.18578 13.7229C3.7248 14.2655 4.44653 14.5399 5.32967 14.5399V16.0641L8.37497 13.7778L5.32967 11.4915V13.0157C3.94177 13.0157 3.8192 11.8467 3.81463 11.4915V6.03272C4.91094 5.70197 5.71794 4.69373 5.71794 3.48963C5.71794 2.0188 4.5219 0.822327 3.05331 0.822327ZM3.05331 4.63276C2.42369 4.63276 1.91132 4.11988 1.91132 3.48963C1.91132 2.85939 2.42369 2.3465 3.05331 2.3465C3.68292 2.3465 4.1953 2.85939 4.1953 3.48963C4.1953 4.11988 3.68292 4.63276 3.05331 4.63276ZM12.9505 10.8537V5.39256C12.9467 4.16865 12.1306 2.3465 9.89762 2.3465V0.822327L6.85232 3.10859L9.89762 5.39485V3.87068C11.2901 3.87068 11.421 5.04353 11.4279 5.39485V10.8537C10.3316 11.1844 9.52457 12.1927 9.52457 13.3968C9.52457 14.8676 10.7198 16.0641 12.1892 16.0641C13.6586 16.0641 14.8538 14.8676 14.8538 13.3968C14.8538 12.1927 14.0468 11.1844 12.9505 10.8537ZM12.1892 14.5399C11.5596 14.5399 11.0472 14.027 11.0472 13.3968C11.0472 12.7665 11.5596 12.2536 12.1892 12.2536C12.8188 12.2536 13.3312 12.7665 13.3312 13.3968C13.3312 14.027 12.8188 14.5399 12.1892 14.5399Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                fill="#E0E0E0" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                fill="#D01010" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dis-off">
                            <h5>-50%</h5>
                        </div>
                        <div class="more-detail">
                            <a href="{{url('detail')}}">
                                <h5>More Details</h5>
                            </a>
                        </div>

                    </div>
                    <div class="product__content">
                        <a href="{{url('detail')}}">
                            <h5>Ezeekart silicone wall mounted toilet brush</h5>
                            <div class="price">
                                <h4 class="present">Rs. 400</h4>
                                <h6 class="past">Rs 500</h6>
                            </div>
                        </a>
                        <a href="cart.php">
                            <div class="content-cart">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                        fill="#E0E0E0" />
                                </svg>

                            </div>
                        </a>
                        <a href="cart.php">
                            <div class="content-cart">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                        fill="#E0E0E0" />
                                </svg>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="product-wrap">
                <div class="product-block">
                    <div class="product__img">
                        <img src="{{asset('frontend/img/product/p-2.webp')}}" alt="">
                        <div class="side-hov">
                            <ul>
                                <li>
                                    <a href="leave.php">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.05331 0.822327C1.58395 0.822327 0.388672 2.0188 0.388672 3.48963C0.388672 4.69373 1.19568 5.70197 2.29198 6.03272V11.4893C2.29122 11.6257 2.31254 12.8465 3.18578 13.7229C3.7248 14.2655 4.44653 14.5399 5.32967 14.5399V16.0641L8.37497 13.7778L5.32967 11.4915V13.0157C3.94177 13.0157 3.8192 11.8467 3.81463 11.4915V6.03272C4.91094 5.70197 5.71794 4.69373 5.71794 3.48963C5.71794 2.0188 4.5219 0.822327 3.05331 0.822327ZM3.05331 4.63276C2.42369 4.63276 1.91132 4.11988 1.91132 3.48963C1.91132 2.85939 2.42369 2.3465 3.05331 2.3465C3.68292 2.3465 4.1953 2.85939 4.1953 3.48963C4.1953 4.11988 3.68292 4.63276 3.05331 4.63276ZM12.9505 10.8537V5.39256C12.9467 4.16865 12.1306 2.3465 9.89762 2.3465V0.822327L6.85232 3.10859L9.89762 5.39485V3.87068C11.2901 3.87068 11.421 5.04353 11.4279 5.39485V10.8537C10.3316 11.1844 9.52457 12.1927 9.52457 13.3968C9.52457 14.8676 10.7198 16.0641 12.1892 16.0641C13.6586 16.0641 14.8538 14.8676 14.8538 13.3968C14.8538 12.1927 14.0468 11.1844 12.9505 10.8537ZM12.1892 14.5399C11.5596 14.5399 11.0472 14.027 11.0472 13.3968C11.0472 12.7665 11.5596 12.2536 12.1892 12.2536C12.8188 12.2536 13.3312 12.7665 13.3312 13.3968C13.3312 14.027 12.8188 14.5399 12.1892 14.5399Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                fill="#E0E0E0" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                fill="#D01010" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dis-off">
                            <h5>-50%</h5>
                        </div>
                        <div class="more-detail">
                            <a href="{{url('detail')}}">
                                <h5>More Details</h5>
                            </a>
                        </div>

                    </div>
                    <div class="product__content">
                        <a href="{{url('detail')}}">
                            <h5>Ezeekart silicone wall mounted toilet brush</h5>
                            <div class="price">
                                <h4 class="present">Rs. 400</h4>
                                <h6 class="past">Rs 500</h6>
                            </div>
                        </a>
                        <a href="cart.php">
                            <div class="content-cart">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                        fill="#E0E0E0" />
                                </svg>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="product-wrap">
                <div class="product-block">
                    <div class="product__img">
                        <img src="{{asset('frontend/img/product/p-3.webp')}}" alt="">
                        <div class="side-hov">
                            <ul>
                                <li>
                                    <a href="leave.php">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.05331 0.822327C1.58395 0.822327 0.388672 2.0188 0.388672 3.48963C0.388672 4.69373 1.19568 5.70197 2.29198 6.03272V11.4893C2.29122 11.6257 2.31254 12.8465 3.18578 13.7229C3.7248 14.2655 4.44653 14.5399 5.32967 14.5399V16.0641L8.37497 13.7778L5.32967 11.4915V13.0157C3.94177 13.0157 3.8192 11.8467 3.81463 11.4915V6.03272C4.91094 5.70197 5.71794 4.69373 5.71794 3.48963C5.71794 2.0188 4.5219 0.822327 3.05331 0.822327ZM3.05331 4.63276C2.42369 4.63276 1.91132 4.11988 1.91132 3.48963C1.91132 2.85939 2.42369 2.3465 3.05331 2.3465C3.68292 2.3465 4.1953 2.85939 4.1953 3.48963C4.1953 4.11988 3.68292 4.63276 3.05331 4.63276ZM12.9505 10.8537V5.39256C12.9467 4.16865 12.1306 2.3465 9.89762 2.3465V0.822327L6.85232 3.10859L9.89762 5.39485V3.87068C11.2901 3.87068 11.421 5.04353 11.4279 5.39485V10.8537C10.3316 11.1844 9.52457 12.1927 9.52457 13.3968C9.52457 14.8676 10.7198 16.0641 12.1892 16.0641C13.6586 16.0641 14.8538 14.8676 14.8538 13.3968C14.8538 12.1927 14.0468 11.1844 12.9505 10.8537ZM12.1892 14.5399C11.5596 14.5399 11.0472 14.027 11.0472 13.3968C11.0472 12.7665 11.5596 12.2536 12.1892 12.2536C12.8188 12.2536 13.3312 12.7665 13.3312 13.3968C13.3312 14.027 12.8188 14.5399 12.1892 14.5399Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                fill="#E0E0E0" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                fill="#D01010" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dis-off">
                            <h5>-50%</h5>
                        </div>
                        <div class="more-detail">
                            <a href="{{url('detail')}}">
                                <h5>More Details</h5>
                            </a>
                        </div>

                    </div>
                    <div class="product__content">
                        <a href="{{url('detail')}}">
                            <h5>Ezeekart silicone wall mounted toilet brush</h5>
                            <div class="price">
                                <h4 class="present">Rs. 400</h4>
                                <h6 class="past">Rs 500</h6>
                            </div>
                        </a>
                        <a href="cart.php">
                            <div class="content-cart">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                        fill="#E0E0E0" />
                                </svg>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="product-wrap">
                <div class="product-block">
                    <div class="product__img">

                        <img src="{{asset('frontend/img/product/p-4.webp')}}" alt="">
                        <div class="side-hov">
                            <ul>
                                <li>
                                    <a href="leave.php">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.05331 0.822327C1.58395 0.822327 0.388672 2.0188 0.388672 3.48963C0.388672 4.69373 1.19568 5.70197 2.29198 6.03272V11.4893C2.29122 11.6257 2.31254 12.8465 3.18578 13.7229C3.7248 14.2655 4.44653 14.5399 5.32967 14.5399V16.0641L8.37497 13.7778L5.32967 11.4915V13.0157C3.94177 13.0157 3.8192 11.8467 3.81463 11.4915V6.03272C4.91094 5.70197 5.71794 4.69373 5.71794 3.48963C5.71794 2.0188 4.5219 0.822327 3.05331 0.822327ZM3.05331 4.63276C2.42369 4.63276 1.91132 4.11988 1.91132 3.48963C1.91132 2.85939 2.42369 2.3465 3.05331 2.3465C3.68292 2.3465 4.1953 2.85939 4.1953 3.48963C4.1953 4.11988 3.68292 4.63276 3.05331 4.63276ZM12.9505 10.8537V5.39256C12.9467 4.16865 12.1306 2.3465 9.89762 2.3465V0.822327L6.85232 3.10859L9.89762 5.39485V3.87068C11.2901 3.87068 11.421 5.04353 11.4279 5.39485V10.8537C10.3316 11.1844 9.52457 12.1927 9.52457 13.3968C9.52457 14.8676 10.7198 16.0641 12.1892 16.0641C13.6586 16.0641 14.8538 14.8676 14.8538 13.3968C14.8538 12.1927 14.0468 11.1844 12.9505 10.8537ZM12.1892 14.5399C11.5596 14.5399 11.0472 14.027 11.0472 13.3968C11.0472 12.7665 11.5596 12.2536 12.1892 12.2536C12.8188 12.2536 13.3312 12.7665 13.3312 13.3968C13.3312 14.027 12.8188 14.5399 12.1892 14.5399Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                fill="#E0E0E0" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                fill="#D01010" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dis-off">
                            <h5>-50%</h5>
                        </div>
                        <div class="more-detail">
                            <a href="{{url('detail')}}">
                                <h5>More Details</h5>
                            </a>
                        </div>

                    </div>
                    <div class="product__content">
                        <a href="{{url('detail')}}">
                            <h5>Ezeekart silicone wall mounted toilet brush</h5>
                            <div class="price">
                                <h4 class="present">Rs. 400</h4>
                                <h6 class="past">Rs 500</h6>
                            </div>
                        </a>
                        <a href="cart.php">
                            <div class="content-cart">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                        fill="#E0E0E0" />
                                </svg>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="product-wrap">
                <div class="product-block">
                    <div class="product__img">

                        <img src="{{asset('frontend/img/product/p-5.webp')}}" alt="">
                        <div class="side-hov">
                            <ul>
                                <li>
                                    <a href="leave.php">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.05331 0.822327C1.58395 0.822327 0.388672 2.0188 0.388672 3.48963C0.388672 4.69373 1.19568 5.70197 2.29198 6.03272V11.4893C2.29122 11.6257 2.31254 12.8465 3.18578 13.7229C3.7248 14.2655 4.44653 14.5399 5.32967 14.5399V16.0641L8.37497 13.7778L5.32967 11.4915V13.0157C3.94177 13.0157 3.8192 11.8467 3.81463 11.4915V6.03272C4.91094 5.70197 5.71794 4.69373 5.71794 3.48963C5.71794 2.0188 4.5219 0.822327 3.05331 0.822327ZM3.05331 4.63276C2.42369 4.63276 1.91132 4.11988 1.91132 3.48963C1.91132 2.85939 2.42369 2.3465 3.05331 2.3465C3.68292 2.3465 4.1953 2.85939 4.1953 3.48963C4.1953 4.11988 3.68292 4.63276 3.05331 4.63276ZM12.9505 10.8537V5.39256C12.9467 4.16865 12.1306 2.3465 9.89762 2.3465V0.822327L6.85232 3.10859L9.89762 5.39485V3.87068C11.2901 3.87068 11.421 5.04353 11.4279 5.39485V10.8537C10.3316 11.1844 9.52457 12.1927 9.52457 13.3968C9.52457 14.8676 10.7198 16.0641 12.1892 16.0641C13.6586 16.0641 14.8538 14.8676 14.8538 13.3968C14.8538 12.1927 14.0468 11.1844 12.9505 10.8537ZM12.1892 14.5399C11.5596 14.5399 11.0472 14.027 11.0472 13.3968C11.0472 12.7665 11.5596 12.2536 12.1892 12.2536C12.8188 12.2536 13.3312 12.7665 13.3312 13.3968C13.3312 14.027 12.8188 14.5399 12.1892 14.5399Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                fill="#E0E0E0" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                fill="#D01010" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dis-off">
                            <h5>-50%</h5>
                        </div>
                        <div class="more-detail">
                            <a href="{{url('detail')}}">
                                <h5>More Details</h5>
                            </a>
                        </div>

                    </div>
                    <div class="product__content">
                        <a href="{{url('detail')}}">
                            <h5>Ezeekart silicone wall mounted toilet brush</h5>
                            <div class="price">
                                <h4 class="present">Rs. 400</h4>
                                <h6 class="past">Rs 500</h6>
                            </div>
                        </a>
                        <a href="cart.php">
                            <div class="content-cart">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                        fill="#E0E0E0" />
                                </svg>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="product-wrap">
                <div class="product-block">
                    <div class="product__img">

                        <img src="{{asset('frontend/img/product/p-6.webp')}}" alt="">
                        <div class="side-hov">
                            <ul>
                                <li>
                                    <a href="leave.php">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.05331 0.822327C1.58395 0.822327 0.388672 2.0188 0.388672 3.48963C0.388672 4.69373 1.19568 5.70197 2.29198 6.03272V11.4893C2.29122 11.6257 2.31254 12.8465 3.18578 13.7229C3.7248 14.2655 4.44653 14.5399 5.32967 14.5399V16.0641L8.37497 13.7778L5.32967 11.4915V13.0157C3.94177 13.0157 3.8192 11.8467 3.81463 11.4915V6.03272C4.91094 5.70197 5.71794 4.69373 5.71794 3.48963C5.71794 2.0188 4.5219 0.822327 3.05331 0.822327ZM3.05331 4.63276C2.42369 4.63276 1.91132 4.11988 1.91132 3.48963C1.91132 2.85939 2.42369 2.3465 3.05331 2.3465C3.68292 2.3465 4.1953 2.85939 4.1953 3.48963C4.1953 4.11988 3.68292 4.63276 3.05331 4.63276ZM12.9505 10.8537V5.39256C12.9467 4.16865 12.1306 2.3465 9.89762 2.3465V0.822327L6.85232 3.10859L9.89762 5.39485V3.87068C11.2901 3.87068 11.421 5.04353 11.4279 5.39485V10.8537C10.3316 11.1844 9.52457 12.1927 9.52457 13.3968C9.52457 14.8676 10.7198 16.0641 12.1892 16.0641C13.6586 16.0641 14.8538 14.8676 14.8538 13.3968C14.8538 12.1927 14.0468 11.1844 12.9505 10.8537ZM12.1892 14.5399C11.5596 14.5399 11.0472 14.027 11.0472 13.3968C11.0472 12.7665 11.5596 12.2536 12.1892 12.2536C12.8188 12.2536 13.3312 12.7665 13.3312 13.3968C13.3312 14.027 12.8188 14.5399 12.1892 14.5399Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                fill="#E0E0E0" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                fill="#D01010" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dis-off">
                            <h5>-50%</h5>
                        </div>
                        <div class="more-detail">
                            <a href="{{url('detail')}}">
                                <h5>More Details</h5>
                            </a>
                        </div>

                    </div>
                    <div class="product__content">
                        <a href="{{url('detail')}}">
                            <h5>Ezeekart silicone wall mounted toilet brush</h5>
                            <div class="price">
                                <h4 class="present">Rs. 400</h4>
                                <h6 class="past">Rs 500</h6>
                            </div>
                        </a>
                        <a href="cart.php">
                            <div class="content-cart">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                        fill="#E0E0E0" />
                                </svg>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="product-wrap">
                <div class="product-block">
                    <div class="product__img">

                        <img src="{{asset('frontend/img/product/p-7.webp')}}" alt="">
                        <div class="side-hov">
                            <ul>
                                <li>
                                    <a href="leave.php">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.05331 0.822327C1.58395 0.822327 0.388672 2.0188 0.388672 3.48963C0.388672 4.69373 1.19568 5.70197 2.29198 6.03272V11.4893C2.29122 11.6257 2.31254 12.8465 3.18578 13.7229C3.7248 14.2655 4.44653 14.5399 5.32967 14.5399V16.0641L8.37497 13.7778L5.32967 11.4915V13.0157C3.94177 13.0157 3.8192 11.8467 3.81463 11.4915V6.03272C4.91094 5.70197 5.71794 4.69373 5.71794 3.48963C5.71794 2.0188 4.5219 0.822327 3.05331 0.822327ZM3.05331 4.63276C2.42369 4.63276 1.91132 4.11988 1.91132 3.48963C1.91132 2.85939 2.42369 2.3465 3.05331 2.3465C3.68292 2.3465 4.1953 2.85939 4.1953 3.48963C4.1953 4.11988 3.68292 4.63276 3.05331 4.63276ZM12.9505 10.8537V5.39256C12.9467 4.16865 12.1306 2.3465 9.89762 2.3465V0.822327L6.85232 3.10859L9.89762 5.39485V3.87068C11.2901 3.87068 11.421 5.04353 11.4279 5.39485V10.8537C10.3316 11.1844 9.52457 12.1927 9.52457 13.3968C9.52457 14.8676 10.7198 16.0641 12.1892 16.0641C13.6586 16.0641 14.8538 14.8676 14.8538 13.3968C14.8538 12.1927 14.0468 11.1844 12.9505 10.8537ZM12.1892 14.5399C11.5596 14.5399 11.0472 14.027 11.0472 13.3968C11.0472 12.7665 11.5596 12.2536 12.1892 12.2536C12.8188 12.2536 13.3312 12.7665 13.3312 13.3968C13.3312 14.027 12.8188 14.5399 12.1892 14.5399Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                fill="#E0E0E0" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                fill="#D01010" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dis-off">
                            <h5>-50%</h5>
                        </div>
                        <div class="more-detail">
                            <a href="{{url('detail')}}">
                                <h5>More Details</h5>
                            </a>
                        </div>

                    </div>
                    <div class="product__content">
                        <a href="{{url('detail')}}">
                            <h5>Ezeekart silicone wall mounted toilet brush</h5>
                            <div class="price">
                                <h4 class="present">Rs. 400</h4>
                                <h6 class="past">Rs 500</h6>
                            </div>
                        </a>
                        <a href="cart.php">
                            <div class="content-cart">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                        fill="#E0E0E0" />
                                </svg>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="product-wrap">
                <div class="product-block">
                    <div class="product__img">

                        <img src="{{asset('frontend/img/product/p-8.webp')}}" alt="">
                        <div class="side-hov">
                            <ul>
                                <li>
                                    <a href="leave.php">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.05331 0.822327C1.58395 0.822327 0.388672 2.0188 0.388672 3.48963C0.388672 4.69373 1.19568 5.70197 2.29198 6.03272V11.4893C2.29122 11.6257 2.31254 12.8465 3.18578 13.7229C3.7248 14.2655 4.44653 14.5399 5.32967 14.5399V16.0641L8.37497 13.7778L5.32967 11.4915V13.0157C3.94177 13.0157 3.8192 11.8467 3.81463 11.4915V6.03272C4.91094 5.70197 5.71794 4.69373 5.71794 3.48963C5.71794 2.0188 4.5219 0.822327 3.05331 0.822327ZM3.05331 4.63276C2.42369 4.63276 1.91132 4.11988 1.91132 3.48963C1.91132 2.85939 2.42369 2.3465 3.05331 2.3465C3.68292 2.3465 4.1953 2.85939 4.1953 3.48963C4.1953 4.11988 3.68292 4.63276 3.05331 4.63276ZM12.9505 10.8537V5.39256C12.9467 4.16865 12.1306 2.3465 9.89762 2.3465V0.822327L6.85232 3.10859L9.89762 5.39485V3.87068C11.2901 3.87068 11.421 5.04353 11.4279 5.39485V10.8537C10.3316 11.1844 9.52457 12.1927 9.52457 13.3968C9.52457 14.8676 10.7198 16.0641 12.1892 16.0641C13.6586 16.0641 14.8538 14.8676 14.8538 13.3968C14.8538 12.1927 14.0468 11.1844 12.9505 10.8537ZM12.1892 14.5399C11.5596 14.5399 11.0472 14.027 11.0472 13.3968C11.0472 12.7665 11.5596 12.2536 12.1892 12.2536C12.8188 12.2536 13.3312 12.7665 13.3312 13.3968C13.3312 14.027 12.8188 14.5399 12.1892 14.5399Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                fill="#E0E0E0" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                fill="#D01010" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dis-off">
                            <h5>-50%</h5>
                        </div>
                        <div class="more-detail">
                            <a href="{{url('detail')}}">
                                <h5>More Details</h5>
                            </a>
                        </div>

                    </div>
                    <div class="product__content">
                        <a href="{{url('detail')}}">
                            <h5>Ezeekart silicone wall mounted toilet brush</h5>
                            <div class="price">
                                <h4 class="present">Rs. 400</h4>
                                <h6 class="past">Rs 500</h6>
                            </div>
                        </a>
                        <a href="cart.php">
                            <div class="content-cart">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                        fill="#E0E0E0" />
                                </svg>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="product-wrap">
                <div class="product-block">
                    <div class="product__img">

                        <img src="{{asset('frontend/img/product/p-9.webp')}}" alt="">
                        <div class="side-hov">
                            <ul>
                                <li>
                                    <a href="leave.php">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.05331 0.822327C1.58395 0.822327 0.388672 2.0188 0.388672 3.48963C0.388672 4.69373 1.19568 5.70197 2.29198 6.03272V11.4893C2.29122 11.6257 2.31254 12.8465 3.18578 13.7229C3.7248 14.2655 4.44653 14.5399 5.32967 14.5399V16.0641L8.37497 13.7778L5.32967 11.4915V13.0157C3.94177 13.0157 3.8192 11.8467 3.81463 11.4915V6.03272C4.91094 5.70197 5.71794 4.69373 5.71794 3.48963C5.71794 2.0188 4.5219 0.822327 3.05331 0.822327ZM3.05331 4.63276C2.42369 4.63276 1.91132 4.11988 1.91132 3.48963C1.91132 2.85939 2.42369 2.3465 3.05331 2.3465C3.68292 2.3465 4.1953 2.85939 4.1953 3.48963C4.1953 4.11988 3.68292 4.63276 3.05331 4.63276ZM12.9505 10.8537V5.39256C12.9467 4.16865 12.1306 2.3465 9.89762 2.3465V0.822327L6.85232 3.10859L9.89762 5.39485V3.87068C11.2901 3.87068 11.421 5.04353 11.4279 5.39485V10.8537C10.3316 11.1844 9.52457 12.1927 9.52457 13.3968C9.52457 14.8676 10.7198 16.0641 12.1892 16.0641C13.6586 16.0641 14.8538 14.8676 14.8538 13.3968C14.8538 12.1927 14.0468 11.1844 12.9505 10.8537ZM12.1892 14.5399C11.5596 14.5399 11.0472 14.027 11.0472 13.3968C11.0472 12.7665 11.5596 12.2536 12.1892 12.2536C12.8188 12.2536 13.3312 12.7665 13.3312 13.3968C13.3312 14.027 12.8188 14.5399 12.1892 14.5399Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                fill="#E0E0E0" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                fill="#D01010" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dis-off">
                            <h5>-50%</h5>
                        </div>
                        <div class="more-detail">
                            <a href="{{url('detail')}}">
                                <h5>More Details</h5>
                            </a>
                        </div>

                    </div>
                    <div class="product__content">
                        <a href="{{url('detail')}}">
                            <h5>Ezeekart silicone wall mounted toilet brush</h5>
                            <div class="price">
                                <h4 class="present">Rs. 400</h4>
                                <h6 class="past">Rs 500</h6>
                            </div>
                        </a>
                        <a href="cart.php">
                            <div class="content-cart">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                        fill="#E0E0E0" />
                                </svg>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
            <div class="product-wrap">
                <div class="product-block">
                    <div class="product__img">

                        <img src="{{asset('frontend/img/product/p-10.webp')}}" alt="">
                        <div class="side-hov">
                            <ul>
                                <li>
                                    <a href="leave.php">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="15" height="17" viewBox="0 0 15 17" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M3.05331 0.822327C1.58395 0.822327 0.388672 2.0188 0.388672 3.48963C0.388672 4.69373 1.19568 5.70197 2.29198 6.03272V11.4893C2.29122 11.6257 2.31254 12.8465 3.18578 13.7229C3.7248 14.2655 4.44653 14.5399 5.32967 14.5399V16.0641L8.37497 13.7778L5.32967 11.4915V13.0157C3.94177 13.0157 3.8192 11.8467 3.81463 11.4915V6.03272C4.91094 5.70197 5.71794 4.69373 5.71794 3.48963C5.71794 2.0188 4.5219 0.822327 3.05331 0.822327ZM3.05331 4.63276C2.42369 4.63276 1.91132 4.11988 1.91132 3.48963C1.91132 2.85939 2.42369 2.3465 3.05331 2.3465C3.68292 2.3465 4.1953 2.85939 4.1953 3.48963C4.1953 4.11988 3.68292 4.63276 3.05331 4.63276ZM12.9505 10.8537V5.39256C12.9467 4.16865 12.1306 2.3465 9.89762 2.3465V0.822327L6.85232 3.10859L9.89762 5.39485V3.87068C11.2901 3.87068 11.421 5.04353 11.4279 5.39485V10.8537C10.3316 11.1844 9.52457 12.1927 9.52457 13.3968C9.52457 14.8676 10.7198 16.0641 12.1892 16.0641C13.6586 16.0641 14.8538 14.8676 14.8538 13.3968C14.8538 12.1927 14.0468 11.1844 12.9505 10.8537ZM12.1892 14.5399C11.5596 14.5399 11.0472 14.027 11.0472 13.3968C11.0472 12.7665 11.5596 12.2536 12.1892 12.2536C12.8188 12.2536 13.3312 12.7665 13.3312 13.3968C13.3312 14.027 12.8188 14.5399 12.1892 14.5399Z"
                                                fill="#E0E0E0" />
                                        </svg>

                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.0604 16.5551C14.2491 16.5562 14.4362 16.5196 14.6106 16.4476C14.785 16.3755 14.9434 16.2694 15.0764 16.1355L17.0019 14.2081C17.1342 14.0748 17.2085 13.8946 17.2085 13.7067C17.2085 13.5188 17.1342 13.3385 17.0019 13.2053L14.1599 10.3605C14.0268 10.228 13.8467 10.1537 13.659 10.1537C13.4713 10.1537 13.2912 10.228 13.1581 10.3605L12.0213 11.4913C11.2343 11.2812 10.5053 10.8945 9.88982 10.3605C9.35775 9.74336 8.9716 9.01405 8.76013 8.22685L9.88982 7.08892C10.0221 6.95567 10.0964 6.77541 10.0964 6.58752C10.0964 6.39963 10.0221 6.21938 9.88982 6.08612L7.04784 3.2413C6.91472 3.10884 6.73465 3.03449 6.54694 3.03449C6.35924 3.03449 6.17917 3.10884 6.04605 3.2413L4.12771 5.17578C3.99388 5.30895 3.88788 5.46747 3.81591 5.64208C3.74394 5.8167 3.70743 6.00391 3.70852 6.1928C3.77298 8.92547 4.86384 11.5335 6.76365 13.4969C8.72512 15.3986 11.3305 16.4906 14.0604 16.5551ZM6.5505 4.75617L8.39068 6.59819L7.47414 7.51565C7.38733 7.59704 7.32233 7.69895 7.28509 7.81203C7.24784 7.92511 7.23956 8.04573 7.26099 8.16284C7.52655 9.35082 8.08879 10.452 8.89513 11.3633C9.80481 12.1714 10.9051 12.7344 12.0924 12.999C12.2076 13.0232 12.327 13.0182 12.4398 12.9847C12.5527 12.9512 12.6555 12.8901 12.7389 12.807L13.6554 11.8682L15.4956 13.7102L14.0746 15.1327C11.7184 15.0719 9.47028 14.1307 7.77255 12.4941C6.13337 10.794 5.19033 8.54057 5.12951 6.17858L6.5505 4.75617ZM16.4974 8.73181H17.9184C17.9368 7.88619 17.784 7.04558 17.4692 6.26066C17.1544 5.47574 16.684 4.76274 16.0865 4.16466C15.489 3.56657 14.7768 3.09576 13.9926 2.78062C13.2085 2.46548 12.3687 2.31251 11.524 2.33096V3.75337C12.1832 3.73054 12.8401 3.8437 13.4539 4.08581C14.0676 4.32792 14.625 4.69381 15.0915 5.16073C15.5579 5.62765 15.9234 6.18563 16.1653 6.79996C16.4072 7.4143 16.5202 8.07188 16.4974 8.73181Z"
                                                fill="#E0E0E0" />
                                            <path
                                                d="M9.98389 6.61499C11.5827 6.61499 12.2679 7.30087 12.2679 8.90126H13.7905C13.7905 6.44734 12.4354 5.09082 9.98389 5.09082V6.61499Z"
                                                fill="#E0E0E0" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="">
                                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.10744 1.20515C7.2779 0.441622 6.1921 0.0178577 5.06518 0.0178223C4.46871 0.0184439 3.87826 0.137134 3.32779 0.367063C2.77732 0.596991 2.27772 0.933619 1.85772 1.35757C0.0663235 3.15838 0.0670847 5.97506 1.85924 7.76825L7.44128 13.3559C7.5707 13.5837 7.82042 13.7308 8.10744 13.7308C8.22529 13.7297 8.34123 13.7009 8.44595 13.6467C8.55067 13.5926 8.64124 13.5147 8.71041 13.4191L14.3556 7.76825C16.1478 5.9743 16.1478 3.15838 14.3541 1.35452C13.9343 0.931349 13.4351 0.595406 12.8852 0.366007C12.3353 0.136609 11.7455 0.0182792 11.1497 0.0178223C10.0228 0.0180067 8.93705 0.441751 8.10744 1.20515ZM13.2776 2.43212C14.4675 3.62935 14.4683 5.49952 13.2791 6.69066L8.10744 11.8675L2.93576 6.69066C1.74657 5.49952 1.74733 3.62935 2.93423 2.43516C3.51284 1.85903 4.2696 1.542 5.06518 1.542C5.86077 1.542 6.61448 1.85903 7.18852 2.43364L7.56918 2.81468C7.63982 2.88552 7.72372 2.94171 7.81608 2.98005C7.90844 3.01839 8.00745 3.03813 8.10744 3.03813C8.20742 3.03813 8.30643 3.01839 8.39879 2.98005C8.49115 2.94171 8.57505 2.88552 8.64569 2.81468L9.02635 2.43364C10.1775 1.28365 12.128 1.2867 13.2776 2.43212Z"
                                                fill="#D01010" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="dis-off">
                            <h5>-50%</h5>
                        </div>
                        <div class="more-detail">
                            <a href="{{url('detail')}}">
                                <h5>More Details</h5>
                            </a>
                        </div>

                    </div>
                    <div class="product__content">
                        <a href="{{url('detail')}}">
                            <h5>Ezeekart silicone wall mounted toilet brush</h5>
                            <div class="price">
                                <h4 class="present">Rs. 400</h4>
                                <h6 class="past">Rs 500</h6>
                            </div>
                        </a>
                        <a href="cart.php">
                            <div class="content-cart">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M17.5851 6.59141C17.5151 6.49011 17.4216 6.40731 17.3126 6.3501C17.2036 6.2929 17.0824 6.26299 16.9593 6.26295H6.55429L5.67572 4.15197C5.56052 3.87398 5.36545 3.63649 5.11525 3.46961C4.86504 3.30273 4.57097 3.21397 4.27031 3.2146H2.49414V4.73878H4.27031L7.88203 13.4151C7.93989 13.554 8.03748 13.6725 8.16253 13.7559C8.28757 13.8393 8.43448 13.8838 8.58474 13.8838H14.6753C14.9928 13.8838 15.2768 13.6864 15.3887 13.39L17.6727 7.29329C17.7158 7.17793 17.7304 7.05381 17.7152 6.93157C17.6999 6.80933 17.6553 6.69261 17.5851 6.59141V6.59141ZM14.1477 12.3597H9.09254L7.18923 7.78713H15.8607L14.1477 12.3597Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M8.96572 16.9321C9.59642 16.9321 10.1077 16.4203 10.1077 15.789C10.1077 15.1577 9.59642 14.6459 8.96572 14.6459C8.33502 14.6459 7.82373 15.1577 7.82373 15.789C7.82373 16.4203 8.33502 16.9321 8.96572 16.9321Z"
                                        fill="#E0E0E0" />
                                    <path
                                        d="M14.2948 16.9321C14.9255 16.9321 15.4368 16.4203 15.4368 15.789C15.4368 15.1577 14.9255 14.6459 14.2948 14.6459C13.6641 14.6459 13.1528 15.1577 13.1528 15.789C13.1528 16.4203 13.6641 16.9321 14.2948 16.9321Z"
                                        fill="#E0E0E0" />
                                </svg>

                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

@endsection