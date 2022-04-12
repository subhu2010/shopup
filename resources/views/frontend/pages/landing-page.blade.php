@extends("frontend.layout.layout")

@section("page_title", "Shopup")

@section("content")

<section class="banner">
    <div class="container">
       <div class="banner-wrap d-flex">
            <div class="sidebar-left d-none d-sm-none d-md-none d-lg-block">
                <ul>
                    <li class="child"><a href="product-list.php">Riding
                            Gears</a>
                        <span><i class="las la-angle-right"></i></span>
                        <div class="mega-child">
                            <ul>
                                <li><a href="">Beon Mask</a>
                                </li>
                                <li><a href="">Riding
                                        Jackets</a></li>
                                <li><a href="">Snap Back
                                        Caps</a></li>
                                <li><a href="">Knee
                                        guard and Elbow Guard</a></li>
                                <li><a href="">Riding
                                        goggles</a></li>
                                <li><a href="">Shoe saver</a>
                                </li>
                                <li><a href="">Helmet
                                        Intercom</a></li>
                                <li><a href="">Riding
                                        Jersey</a></li>
                                <li><a href="">Helmet,
                                        Visor and Mohawk</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><a href="">Beon Mask</a>
                    </li>
                    <li><a href="">Riding
                            Jackets</a></li>
                    <li><a href="">Snap Back
                            Caps</a></li>
                    <li><a href="">Knee
                            guard and Elbow Guard</a></li>
                    <li><a href="">Riding
                            goggles</a></li>
                    <li><a href="">Shoe saver</a>
                    </li>
                    <li><a href="">Helmet
                            Intercom</a></li>
                    <li><a href="">Riding
                            Jersey</a></li>
                    <li><a href="">Helmet,
                            Visor and Mohawk</a></li>
                </ul>
            </div>
            <div class="banner-right">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="banner-block">
                            <h2>Shop Your <br> favourite products</h2>
                            <h5>Welcome to Laxxery world</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut
                                labore
                                et dolore magna aliqua. Id donec ultrices tincidunt arcu non sodales neque sodales.
                                Porttitor
                                rhoncus dolor purus non enim. Amet nisl suscipit adipiscing bibendum est ultricies
                                integer quis
                                auctor.</p>
                            <button class="site-button">Explore now</button>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="banner-block">
                            <img class="lazyload" loading="lazy" src="{{asset('frontend/img/slider/banner-img.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="timer">
    <div class="timer__block">
        <h5>ending in </h5>
        <ul class="flipdown">
            <li>
                9
            </li>
            <li>
                <span>:</span>
            </li>
            <li>
                16
            </li>
            <li>
                <span>:</span>
            </li>
            <li>
                24
            </li>
        </ul>
    </div>
</section>

@include('frontend.includes.homepage.flash',['title' => 'FLASH'])



<section class="advertise">
    <a href="#">
        <img src="{{asset('frontend/img/advertise.png')}}" alt="">
    </a>
</section>


@include('frontend.includes.homepage.flash',['title' => 'LATEST PRODUCTS'])


@include('frontend.includes.homepage.arrival')



@include('frontend.includes.homepage.flash',['title' => 'Popular PRODUCTS'])



<section class="buy ">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-4 ">
                <div class="buy-block-left">
                    <img src="{{asset('frontend/img/intersect.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-8 ">
                <div class="buy-block-right">
                    <h4>Want to buy Sofa?</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Eget aliquet nibh praesent tristique magna sit amet purus
                        gravida. Pellentesque habitant morbi tristique senectus et netus et malesuada. Sed arcu non
                        odio
                        euismod lacinia at quis risus. Venenatis lectus magna fringilla urna porttitor. Vitae
                        aliquet
                        nec ullamcorper sit amet risus nullam eget. Interdum velit euismod in pellentesque massa
                        placerat duis ultricies at quis risus.</p>
                    <a href="" class="site-button">Enter Shop</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection