@extends("frontend.layout.layout")

@section("page_title", "Shopup")

@section("content")

<section class="breadcrumb-wrap list-wrap">
    @include('frontend.includes.homepage.breadcrumb',['title' => 'Manage Profile'])

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
                                    <h5>Manage Profile</h5>
                                </div>
                            </div>
                            <div class="custom-block">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group"><label for="">Profile</label> <input type="file"
                                                    placeholder="" value="" /></div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Full Name</label> <input type="text"
                                                    placeholder="Name" value="Sanjay Rawal" /></div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Email Address</label> <input
                                                    type="email" placeholder="Email" value="rsanj054@gmail.com" /></div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Phone Number</label> <input
                                                    type="number" placeholder="Number" value="9861674444" /></div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 ">
                                            <div class="form-group">
                                                <label for="">Gender</label>
                                                <select class="inputbox border-0">
                                                    <option value="">Select</option>
                                                    <option value="1">Male</option>
                                                    <option value="12">Female</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Address</label> <input type="text"
                                                    placeholder="address" value="Harisiddhi-8, lalitpur" /></div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Date Of Birth( A.D.)</label> <input
                                                    type="date" placeholder="Number" value="1997-03-01" /></div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Password</label> <input
                                                    type="password" placeholder="Number" value="confirm" /></div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Confirm Password</label> <input
                                                    type="password" placeholder="Number" value="confirm" /></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>Delivery Information</h5>
                                </div>
                            </div>
                            <div class="delivery">
                                <div class="delivery-left d-block w-100 delivery-block ship-address">
                                    <form action="">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group"><label for="">Full Name</label> <input
                                                        type="text" placeholder="Name" value="Sanjay Rawal" /></div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group"><label for="">Email Address</label> <input
                                                        type="email" placeholder="Email" value="rsanj054@gmail.com" />
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group"><label for="">Phone Number</label> <input
                                                        type="number" placeholder="Number" value="9861674444" /></div>
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <div class="form-group"><label for="">Address</label> <input type="text"
                                                        placeholder="address" value="Harisiddhi-8, lalitpur" /></div>
                                            </div>

                                            <div class="col-lg-6 col-md-6 ">
                                                <div class="form-group">
                                                    <label for="">Choose a region</label>
                                                    <select class="inputbox">
                                                        <option value="">Select</option>
                                                        <option value="1">Male</option>
                                                        <option value="12">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 ">
                                                <div class="form-group">
                                                    <label for="">Choose a City</label>
                                                    <select class="inputbox">
                                                        <option value="">Select</option>
                                                        <option value="1">Male</option>
                                                        <option value="12">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 ">
                                                <div class="form-group checkbox">
                                                    <input type="checkbox" id="test1" name="checkbox-group" checked>
                                                    <label for="test1">Select same billing address</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>My Payment method</h5>
                                </div>
                            </div>
                            <div>
                            <p><img src="{{asset('frontend/img/pay/khalti.png')}}" alt=""></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection