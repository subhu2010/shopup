@extends("vendor.layout.vendor-layout")

@section("page_title", "Shopup")

@section("content")


<!--Container Main start-->
<main class=" content">
    <section class="content-wrap">
        <div class="site-header">
            <h5>Welcome! Complete the to-do list to start your selling journey!</h5>
            <span>20% completed, keep up the good work!</span>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="content-block">
                    <a href="addressbook.php">
                        <div class="icon">
                            <i class='bx bx-current-location'></i>
                        </div>
                        <div class="custom-head">
                            <h6>Start to sell</h6>
                            <p>Manage Address Book</p>
                        </div>
                        <div class="num">1</div>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="content-block">
                    <a href="verify.php">
                        <div class="icon">
                            <i class='bx bxs-user-account'></i>
                        </div>
                        <div class="custom-head">
                            <h6>Safeguard your account</h6>
                            <p>Verify corporate file</p>
                        </div>
                        <div class="num">2</div>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="content-block">
                    <a href="bankInfo.php">
                        <div class="icon">
                            <i class='bx bxs-bank'></i>
                        </div>
                        <div class="custom-head">
                            <h6>To recieve your money</h6>
                            <p>Fill in Bank Information</p>
                        </div>
                        <div class="num">3</div>
                    </a>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="content-block">
                    <a href="orderPackage.php">
                        <div class="icon">
                            <i class='bx bxs-package'></i>
                        </div>
                        <div class="custom-head">
                            <h6>order Package info Title</h6>
                            <p>Order Package info</p>
                        </div>
                        <div class="num">4</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="content-wrap">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <div class="content-block custom--block">
                    <div class="content__head">
                        <div class="head">
                            <h5>Courses</h5>
                        </div>
                        <div class="date">
                            <button class="dropdown-toggle" type="button" id="dropdownMenuButton1"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                This Week
                            </button>
                            <ul class="dropdown-menu " aria-labelledby="dropdownMenuButton1">
                                <li><a class="" href="#">Last Week</a></li>
                                <li><a class="" href="#">This Months</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content__body ">
                        <div class="chart">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="content-block custom--block">
                    <div class="content__head">
                        <div class="head">
                            <h5>user Activity</h5>
                        </div>
                        <div class="view"><a href="">View All</a>
                        </div>
                    </div>
                    <div class="content__body ">
                        <div class="dashboard">
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="parent-block">
                                            <div class="icon image">
                                                <img src="{{asset('vendor/img/user.svg')}}" alt="user">
                                            </div>
                                            <div class="block-content">
                                                <h6>December 12, 2019</h6>
                                                <h5 class="font-weight-bold">A new monthly report is ready to download!
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="parent-block">
                                            <div class="icon image">
                                                <img src="{{asset('vendor/img/user.svg')}}" alt="user">
                                            </div>
                                            <div class="block-content">
                                                <h6>December 12, 2019</h6>
                                                <h5 class="font-weight-bold">A new monthly report is ready to download!
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="parent-block">
                                            <div class="icon image">
                                                <img src="{{asset('vendor/img/user.svg')}}" alt="user">
                                            </div>
                                            <div class="block-content">
                                                <h6>December 12, 2019</h6>
                                                <h5 class="font-weight-bold">A new monthly report is ready to download!
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="parent-block">
                                            <div class="icon image">
                                                <img src="{{asset('vendor/img/user.svg')}}" alt="user">
                                            </div>
                                            <div class="block-content">
                                                <h6>December 12, 2019</h6>
                                                <h5 class="font-weight-bold">A new monthly report is ready to download!
                                                </h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="parent-block">
                                            <div class="icon image">
                                                <img src="{{asset('vendor/img/user.svg')}}" alt="user">
                                            </div>
                                            <div class="block-content">
                                                <h6>December 12, 2019</h6>
                                                <h5 class="font-weight-bold">A new monthly report is ready to download!
                                                </h5>
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
    </section>

</main>
<!--Container Main end-->

@endsection