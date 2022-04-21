@extends("vendor.layout.vendor-layout")

@section("page_title", "Shopup")

@section("content")


<!--Container Main start-->
<main class=" content">
    @include('vendor.includes.breadcrumb',['title' => 'Order'])

    <section class="content-wrap">
        <div class="site-header">
            <h5>Order Overview</h5>
        </div>
        <!-- Tab panes -->
        <div class="vendor-block add-products">
            <div class="custom-block custom-table">
                <form action="">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group">
                                <label for="">Date From</label>
                                <input type="text" id="min" name="min" placeholder="MMMM DDDD YYYY">
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <div class="form-group">
                                <label for="">Date To</label>
                                <input type="text" id="max" name="max" placeholder="MMMM DDDD YYYY">
                            </div>
                        </div>

                    </div>
                </form>
                <!--  -->
                <table id="tableOrder" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>Order No.</th>
                            <th>Order Date</th>
                            <th>Order Item ID</th>
                            <th>Seller SKU</th>
                            <th>Unit Price</th>
                            <th>Commission</th>
                            <th>Fees</th>
                            <th>Other Credits</th>
                            <th>VAT</th>
                            <th>Payout Amount</th>
                            <th>Operational Status</th>
                            <th>Payment Status</th>
                        </tr>
                    </thead>
                    <tbody>
                         <tr>
                            <td>001</td>
                            <td>2011/04/25</td>
                            <td>D001</td>
                            <td>D001</td>
                            <td>$320,800</td>
                            <td>$661</td>
                            <td>$61</td>
                            <td>$61</td>
                            <td>12%</td>
                            <td>$761</td>
                            <td>Active</td>
                            <td>Completed</td>
                        </tr>
                         <tr>
                            <td>002</td>
                            <td>2012/04/25</td>
                            <td>D002</td>
                            <td>D002</td>
                            <td>$320,800</td>
                            <td>$6611</td>
                            <td>$621</td>
                            <td>$641</td>
                            <td>12%</td>
                            <td>$761</td>
                            <td>Active</td>
                            <td>Pending</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</main>
<!--Container Main end-->


@endcontent