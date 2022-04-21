@extends("vendor.layout.vendor-layout")

@section("page_title", "Shopup")

@section("content")


<!--Container Main start-->
<main class=" content">
    @include('vendor.includes.breadcrumb',['title' => 'Account Details'])

    <section class="content-wrap">
        <div class="site-header">
            <h5>Account Setting</h5>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="a-1" data-bs-toggle="tab" data-bs-target="#a1" type="button"
                    role="tab" aria-controls="a1" aria-selected="true">Change Profile Photo</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="a-2" data-bs-toggle="tab" data-bs-target="#a2" type="button" role="tab"
                    aria-controls="a2" aria-selected="false">Change Password</button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="a1" role="tabpanel" aria-labelledby="a-1">
                <div class="vendor-block">
                    <div class="site-header">
                        <div class="head">
                            <h5>Change Password</h5>
                            <em>The password should be at least 8 characters long. It must contain upper and lower case
                                characters and at least one number.</em>
                        </div>
                    </div>
                    <div class="custom-block">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form-group">
                                        <label for="">Please Select your Photo</label>
                                        <input type="file" value="" />
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="a2" role="tabpanel" aria-labelledby="a-2">
                <div class="vendor-block">
                    <div class="site-header">
                        <div class="head">
                            <h5>Change Password</h5>
                            <em>The password should be at least 8 characters long. It must contain upper and lower case
                                characters and at least one number.</em>
                        </div>
                    </div>
                    <div class="custom-block">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group">
                                        <label for="">Email Address</label>
                                        <input type="text" value="rsanj054@gmail.com" disabled />
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6"></div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group"><label for="">Old Password<sup>*</sup></label> <input
                                            type="text" placeholder="" value="" /></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group"><label for="">New Password<sup>*</sup></label> <input
                                            type="text" placeholder="" value="" /></div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group"><label for="">Confirm Password<sup>*</sup></label> <input
                                            type="text" placeholder="" value="" /></div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group"><button class="site-button">Save Changes</button></div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

</main>
<!--Container Main end-->


@endsection