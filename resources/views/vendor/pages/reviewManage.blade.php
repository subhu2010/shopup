@extends("vendor.layout.vendor-layout")

@section("page_title", "Shopup")

@section("content")


<!--Container Main start-->
<main class=" content">
    @include('vendor.includes.breadcrumb',['title' => 'Manage Reviwe'])

    <section class="content-wrap">
        <div class="site-header">
            <h5>Review Management</h5>
        </div>

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="r-1" data-bs-toggle="tab" data-bs-target="#r1" type="button"
                    role="tab" aria-controls="r1" aria-selected="true">Product Review</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="r-2" data-bs-toggle="tab" data-bs-target="#r2" type="button" role="tab"
                    aria-controls="r2" aria-selected="false">Seller Review</button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="r1" role="tabpanel" aria-labelledby="r-1">
                <div class="vendor-block">
                    <div class="custom-block custom-table">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 ">
                                    <div class="form-group">
                                        <input type="text" value="" placeholder="Order Number" />
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 ">
                                    <div class="form-group">
                                        <input type="text" value="" placeholder="Product Name" />
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 ">
                                    <div class="form-group">
                                        <select class="inputbox">
                                            <option value="">Content</option>
                                            <option value="1">With Text</option>
                                            <option value="2">With image/video</option>
                                            <option value="3">with content</option>
                                            <option value="4">Rating only</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 ">
                                    <div class="form-group">
                                        <select class="inputbox">
                                            <option value="">Status</option>
                                            <option value="1">Not Replied</option>
                                            <option value="2">Replied</option>
                                            <option value="3">Cancelled Item</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 ">
                                    <div class="form-group">
                                        <input type="text" id="min" name="min" placeholder="MMMM DDDD YYYY">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 ">
                                    <div class="form-group">
                                        <input type="text" id="max" name="max" placeholder="MMMM DDDD YYYY">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 ">
                                    <div class="form-group">
                                        <select class="inputbox">
                                            <option value="">Rating</option>
                                            <option value="5">5 stars</option>
                                            <option value="4">4 stars</option>
                                            <option value="3">3 stars</option>
                                            <option value="2">2 stars</option>
                                            <option value="1">1 stars</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--  -->
                        <table id="reviewManage" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Order</th>
                                    <th>Date</th>
                                    <th>Content</th>
                                    <th>Product</th>
                                    <th>Rating</th>
                                    <th>Commission</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>2011/04/25</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    <td>TV</td>
                                    <td>4 star</td>
                                    <td>$661</td>
                                    <td>Not Replied</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>001</td>
                                    <td>2011/04/25</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    <td>TV</td>
                                    <td>4 star</td>
                                    <td>$661</td>
                                    <td>Replied</td>
                                    <td>Completed</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="r2" role="tabpanel" aria-labelledby="r-2">
                <div class="vendor-block">
                    <div class="custom-block custom-table">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-2 col-md-3 col-sm-3 ">
                                    <div class="form-group">
                                        <input type="text" value="" placeholder="Order Number" />
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 ">
                                    <div class="form-group">
                                        <input type="text" value="" placeholder="Product Name" />
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 ">
                                    <div class="form-group">
                                        <select class="inputbox">
                                            <option value="">Content</option>
                                            <option value="1">With Text</option>
                                            <option value="2">With image/video</option>
                                            <option value="3">with content</option>
                                            <option value="4">Rating only</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 ">
                                    <div class="form-group">
                                        <select class="inputbox">
                                            <option value="">Status</option>
                                            <option value="1">Not Replied</option>
                                            <option value="2">Replied</option>
                                            <option value="3">Cancelled Item</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 ">
                                    <div class="form-group">
                                        <input type="text" id="min" name="min" placeholder="MMMM DDDD YYYY">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 ">
                                    <div class="form-group">
                                        <input type="text" id="max" name="max" placeholder="MMMM DDDD YYYY">
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-3 col-sm-3 ">
                                    <div class="form-group">
                                        <select class="inputbox">
                                            <option value="">Rating</option>
                                            <option value="5">5 stars</option>
                                            <option value="4">4 stars</option>
                                            <option value="3">3 stars</option>
                                            <option value="2">2 stars</option>
                                            <option value="1">1 stars</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--  -->
                        <table id="sellerManage" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Order Number</th>
                                    <th>Review</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>001</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    <td>Completed</td>
                                </tr>
                                <tr>
                                    <td>002</td>
                                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit.</td>
                                    <td>Not Completed</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </section>

</main>
<!--Container Main end-->


@endsection