@extends("vendor.layout.vendor-layout")

@section("page_title", "Shopup")

@section("content")


<!--Container Main start-->
<main class=" content">
    @include('vendor.includes.breadcrumb',['title' => 'Manage Profile'])
    <section class="content-wrap">
        <div class="site-header">
            <h5>Profile</h5>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="p-1" data-bs-toggle="tab" data-bs-target="#p1" type="button"
                    role="tab" aria-controls="p1" aria-selected="true">General</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="p-2" data-bs-toggle="tab" data-bs-target="#p2" type="button" role="tab"
                    aria-controls="p2" aria-selected="false">Seller Logo</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="p-3" data-bs-toggle="tab" data-bs-target="#p3" type="button" role="tab"
                    aria-controls="p3" aria-selected="false">MarketPlace Fee</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="p-4" data-bs-toggle="tab" data-bs-target="#p4" type="button" role="tab"
                    aria-controls="p4" aria-selected="false">Delivery option</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="p-5" data-bs-toggle="tab" data-bs-target="#p5" type="button" role="tab"
                    aria-controls="p5" aria-selected="false">Invoice Number</button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="p1" role="tabpanel" aria-labelledby="p-1">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="c-1" data-bs-toggle="tab" data-bs-target="#c1" type="button"
                            role="tab" aria-controls="c1" aria-selected="true">Seller Account</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="c-2" data-bs-toggle="tab" data-bs-target="#c2" type="button"
                            role="tab" aria-controls="c2" aria-selected="false">Business Information</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="c-3" data-bs-toggle="tab" data-bs-target="#c3" type="button"
                            role="tab" aria-controls="c3" aria-selected="false">Bank Account</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="c-4" data-bs-toggle="tab" data-bs-target="#c4" type="button"
                            role="tab" aria-controls="c4" aria-selected="false">Warehouse Address</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="c-5" data-bs-toggle="tab" data-bs-target="#c5" type="button"
                            role="tab" aria-controls="c5" aria-selected="false">Return Address</button>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="c1" role="tabpanel" aria-labelledby="c-1">
                        <div class="vendor-block">
                            <div class="site-header">
                                <h5>Seller Account</h5>
                            </div>
                            <div class="custom-block">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="">ID Seller<sup>*</sup></label>
                                                <input type="text" value="NPDZNNE227" disabled />
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-6"></div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Full Name<sup>*</sup></label> <input
                                                    type="text" placeholder="Name" value="Sanjay Rawal" /></div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Email Address<sup>*</sup></label>
                                                <input type="email" placeholder="Email" value="rsanj054@gmail.com" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Phone Number<sup>*</sup></label>
                                                <input type="number" placeholder="Number" value="9861674444" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Display Name / Shop
                                                    Name<sup>*</sup></label> <input type="text" placeholder="Number"
                                                    value="suparstar pbt.ltd" /></div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group"><button class="site-button">submit</button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane" id="c2" role="tabpanel" aria-labelledby="c-2">
                        <div class="vendor-block">
                            <div class="site-header">
                                <h5>Business Information</h5>
                            </div>
                            <div class="custom-block">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="">Legal Name / Business Owner</label>
                                                <input type="text" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-6"></div>
                                        <div class="col-lg-4 col-md-6 ">
                                            <div class="form-group">
                                                <label for="">Name<sup>*</sup> / Legal Form<sup>*</sup></label>
                                                <select class="inputbox">
                                                    <option value="">Limited liability company</option>
                                                    <option value="1">Public Company</option>
                                                    <option value="12">No minimum capital, unlimited liability
                                                        of partners, non-busines</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Address<sup>*</sup></label> <input
                                                    type="text" placeholder="" value="Koteshwor 32, Kathmandu" /></div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">City / Town<sup>*</sup></label> <input
                                                    type="text" placeholder="" value="" /></div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Country/ Region<sup>*</sup></label>
                                                <input type="text" placeholder="" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Person in Charge<sup>*</sup></label>
                                                <input type="text" placeholder="" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Business Registration No (PAN /
                                                    VAT)<sup>*</sup></label> <input type="text" placeholder=""
                                                    value="" /></div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Upload Business
                                                    Document<sup>*</sup></label> <input type="file" placeholder=""
                                                    value="" /></div>
                                        </div>

                                        <!-- <div class="col-lg-4 col-md-6">
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
                                        </div> -->
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group"><button class="site-button">submit</button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane" id="c3" role="tabpanel" aria-labelledby="c-3">
                        <div class="vendor-block">
                            <div class="site-header">
                                <h5>Bank Account</h5>
                            </div>
                            <div class="custom-block">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="">Account Title<sup>*</sup></label>
                                                <input type="text" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 ">
                                            <div class="form-group">
                                                <label for="">Account Number<sup>*</sup> </label>
                                                <input type="number" value="" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Bank Name<sup>*</sup></label>
                                                <select class="inputbox">
                                                    <option value=""></option>
                                                    <option value="1">Public Company</option>
                                                    <option value="12">No minimum capital, unlimited liability
                                                        of partners, non-busines</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 ">
                                            <div class="form-group">
                                                <label for="">Branch Name<sup>*</sup> </label>
                                                <input type="text" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Upload Cheque Copy<sup>*</sup></label>
                                                <input type="file" placeholder="" value="" />
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group"><button class="site-button">submit</button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane" id="c4" role="tabpanel" aria-labelledby="c-4">
                        <div class="vendor-block">
                            <div class="site-header">
                                <h5>Warehouse Address</h5>
                            </div>
                            <div class="custom-block">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="">Full Name<sup>*</sup></label>
                                                <input type="text" value="" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 ">
                                            <div class="form-group">
                                                <label for="">Address<sup>*</sup> </label>
                                                <input type="text" value="koteshwor 35, kathmandu" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 ">
                                            <div class="form-group">
                                                <label for="">Email<sup>*</sup> </label>
                                                <input type="email" value="" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 ">
                                            <div class="form-group">
                                                <label for="">City / Town<sup>*</sup> </label>
                                                <input type="text" value="" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Country/ Region<sup>*</sup></label>
                                                <select class="inputbox">
                                                    <option value=""></option>
                                                    <option value="1">Nepal</option>
                                                    <option value="12">No minimum capital, unlimited liability
                                                        of partners, non-busines</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Zone<sup>*</sup></label>
                                                <select class="inputbox">
                                                    <option value=""></option>
                                                    <option value="1">Public Company</option>
                                                    <option value="12">No minimum capital, unlimited liability
                                                        of partners, non-busines</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 ">
                                            <div class="form-group">
                                                <label for="">Branch Name<sup>*</sup> </label>
                                                <input type="text" value="" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group"><button class="site-button">submit</button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="tab-pane" id="c5" role="tabpanel" aria-labelledby="c-5">
                        <div class="vendor-block">
                            <div class="site-header">
                                <h5>Return Address</h5>
                            </div>
                            <div class="custom-block">
                                <form action="">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-6">
                                            <div class="form-group-">
                                                <label for="" class="me-3">Copy from warehouse address</label>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">1</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio"
                                                        name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">2</label>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group">
                                                <label for="">Full Name<sup>*</sup></label>
                                                <input type="text" value="" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 ">
                                            <div class="form-group">
                                                <label for="">Address<sup>*</sup> </label>
                                                <input type="text" value="koteshwor 35, kathmandu" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 ">
                                            <div class="form-group">
                                                <label for="">Email<sup>*</sup> </label>
                                                <input type="email" value="" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 ">
                                            <div class="form-group">
                                                <label for="">City / Town<sup>*</sup> </label>
                                                <input type="text" value="" />
                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Country/ Region<sup>*</sup></label>
                                                <select class="inputbox">
                                                    <option value=""></option>
                                                    <option value="1">Nepal</option>
                                                    <option value="12">No minimum capital, unlimited liability
                                                        of partners, non-busines</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6">
                                            <div class="form-group"><label for="">Zone<sup>*</sup></label>
                                                <select class="inputbox">
                                                    <option value=""></option>
                                                    <option value="1">Public Company</option>
                                                    <option value="12">No minimum capital, unlimited liability
                                                        of partners, non-busines</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-lg-4 col-md-6 ">
                                            <div class="form-group">
                                                <label for="">Branch Name<sup>*</sup> </label>
                                                <input type="text" value="" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12">
                                            <div class="form-group"><button class="site-button">submit</button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane" id="p2" role="tabpanel" aria-labelledby="p-2">
                <div class="vendor-block">
                    <div class="site-header">
                        <h5>Return Address</h5>
                    </div>
                    <div class="custom-block">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form-group">
                                        <label for="">Upload Your logo<sup>*</sup> </label>
                                        <input type="file" value="" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 ">
                                    <div class="form-group">
                                        <label for="">Current logo<sup>*</sup> </label>
                                        <input type="file" value="" />
                                    </div>
                                </div>


                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group"><button class="site-button">submit</button></div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="tab-pane" id="p3" role="tabpanel" aria-labelledby="p-3">...</div>
            <div class="tab-pane" id="p4" role="tabpanel" aria-labelledby="p-4">
                <div class="vendor-block">
                    <div class="site-header">
                        <h5>Delivery Option</h5>
                    </div>
                    <div class="custom-block">
                        <table>
                            <thead>
                                <tr>
                                    <th>Type</th>
                                    <th>Available</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Economy</td>
                                    <td>x</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="tab-pane" id="p5" role="tabpanel" aria-labelledby="p-5">...</div>
        </div>

    </section>



</main>
<!--Container Main end-->


@endsection