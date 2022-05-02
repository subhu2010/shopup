@extends("frontend.layout.layout")

@section("page_title", "Shopup")

@section("content")

<section class="breadcrumb-wrap list-wrap">
    @include('frontend.includes.homepage.breadcrumb',['title' => 'Order'])

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
                                    <h5>Accepted Product Details</h5>
                                </div>
                            </div>
                            <div class="custom-block custom-table">
                                <table class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center mt-4">
                                    <button class="site-button btn">View All</button>
                                </div>
                            </div>
                        </div>
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>Pending Product Details</h5>
                                </div>
                            </div>
                            <div class="custom-block custom-table">
                                <table class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center mt-4">
                                    <button class="site-button btn">View All</button>
                                </div>
                            </div>
                        </div>
                        <div class="user-block">
                            <div class="site-header">
                                <div class="head">
                                    <h5>Cancelled Product Details</h5>
                                </div>
                            </div>
                            <div class="custom-block custom-table">
                                <table class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>SN</th>
                                            <th>Product Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                        </tr>
                                        <tr>
                                            <td>Ashton Cox</td>
                                            <td>Junior Technical Author</td>
                                            <td>San Francisco</td>
                                            <td>66</td>
                                            <td>2009/01/12</td>
                                        </tr>
                                        <tr>
                                            <td>Cedric Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <td>Edinburgh</td>
                                            <td>22</td>
                                            <td>2012/03/29</td>
                                        </tr>
                                        <tr>
                                            <td>Airi Satou</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>33</td>
                                            <td>2008/11/28</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="text-center mt-4">
                                    <button class="site-button btn">View All</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection