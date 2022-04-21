@extends("vendor.layout.vendor-layout")

@section("page_title", "Shopup")

@section("content")


<!--Container Main start-->
<main class=" content">
    @include('vendor.includes.breadcrumb',['title' => 'Message Center'])

    <section class="content-wrap">
        <div class="site-header">
            <h5>Message Center</h5>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="a-1" data-bs-toggle="tab" data-bs-target="#a1" type="button"
                    role="tab" aria-controls="a1" aria-selected="true">all(0)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="a-2" data-bs-toggle="tab" data-bs-target="#a2" type="button" role="tab"
                    aria-controls="a2" aria-selected="false">Customer Question(0)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="a-3" data-bs-toggle="tab" data-bs-target="#a3" type="button" role="tab"
                    aria-controls="a3" aria-selected="false">Order(0)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="a-4" data-bs-toggle="tab" data-bs-target="#a4" type="button" role="tab"
                    aria-controls="a4" aria-selected="false">Logistic(0)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="a-5" data-bs-toggle="tab" data-bs-target="#a5" type="button" role="tab"
                    aria-controls="a5" aria-selected="false">Annoucement(0)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="a-6" data-bs-toggle="tab" data-bs-target="#a6" type="button" role="tab"
                    aria-controls="a6" aria-selected="false">Campaign(0)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="a-7" data-bs-toggle="tab" data-bs-target="#a7" type="button" role="tab"
                    aria-controls="a7" aria-selected="false">Business Advisor(0)</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="a-8" data-bs-toggle="tab" data-bs-target="#a8" type="button" role="tab"
                    aria-controls="a8" aria-selected="false">Product(0)</button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="a1" role="tabpanel" aria-labelledby="a-1">
                <div class="vendor-block">

                    <div class="custom-block custom-table">
                        <table id="table-1" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Message</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="tblPrimary">+</td>
                                    <td>
                                        <div class="message">
                                            <div class="icon">
                                                <i class="las la-bullhorn la-2x"></i>
                                            </div>
                                            <div class="message-text">
                                                <h5>We need your address book information!</h5>
                                                <p>Complete your seller registration journey & start your ecommerce
                                                    journey today!</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Yesterday</td>
                                </tr>
                                <tr id="tblPrimaryContent" >
                                    <td></td>
                                    <td>
                                        <div class="message-content">
                                            <p>
                                                Dear Seller,
                                            </p>
                                            <p>You're so close to taking your business online with Daraz. Take the first
                                                step towards completing your seller registration by providing us with
                                                your address book information here.</p>
                                            <p>The sooner you complete your application, the quicker you can start your
                                                selling journey with us! Click here to learn more about seller sign up.
                                            </p>
                                        </div>
                                    </td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
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