@extends("vendor.layout.vendor-layout")

@section("page_title", "Shopup")

@section("content")


<!--Container Main start-->
<main class=" content">

    <section class="content-wrap">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="content-block custom--block">
                    <div class="content__head">
                        <div class="head">
                            <h5>Product List</h5>
                        </div>
                        <div class="search">
                            <input type="text" class="searchTerm" placeholder="search">
                            <button type="submit" class="searchButton">
                                <i class="las la-search"></i>
                            </button>
                        </div>
                    </div>
                    <div class="content__body ">
                        <!--Table-->
                        <div class="table">
                            <table>
                                <!--Table head-->
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Status</th>
                                        <th>Email</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <!--Table head-->

                                <!--Table body-->
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>001</td>
                                        <td>Tom Cruise</td>
                                        <td>1234.XYZ Road,'YYY Tole,zzz City, Kathmandu, Nepal, 44600</td>
                                        <td>abcd_@gmail.com</td>
                                        <td>This is remark for test, dashboard for Walcom tablet.</td>
                                        <td>
                                            <a class="edit action "  >
                                                <i class="las la-edit"></i>
                                            </a>
                                            <a class="delete action action-" >
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>002</td>
                                        <td>Tom Cruise</td>
                                        <td>1234.XYZ Road,'YYY Tole,zzz City, Kathmandu, Nepal, 44600</td>
                                        <td>abcd_@gmail.com</td>
                                        <td>This is remark for test, dashboard for Walcom tablet.</td>
                                        <td>
                                            <a class="edit" title="Edit" data-toggle="modal"
                                                data-target="#sidebarEditPopUP">
                                                <i class="las la-edit"></i>
                                            </a>
                                            <a class="delete" title="Delete">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>003</td>
                                        <td>Tom Cruise</td>
                                        <td>1234.XYZ Road,'YYY Tole,zzz City, Kathmandu, Nepal, 44600</td>
                                        <td>abcd_@gmail.com</td>
                                        <td>This is remark for test, dashboard for Walcom tablet.</td>
                                        <td>
                                            <a class="edit" title="Edit" data-toggle="modal"
                                                data-target="#sidebarEditPopUP">
                                                <i class="las la-edit"></i>
                                            </a>
                                            <a class="delete" title="Delete">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>004</td>
                                        <td>Tom Cruise</td>
                                        <td>1234.XYZ Road,'YYY Tole,zzz City, Kathmandu, Nepal, 44600</td>
                                        <td>abcd_@gmail.com</td>
                                        <td>This is remark for test, dashboard for Walcom tablet.</td>
                                        <td>
                                            <a class="edit" title="Edit" data-toggle="modal"
                                                data-target="#sidebarEditPopUP">
                                                <i class="las la-edit"></i>
                                            </a>
                                            <a class="delete" title="Delete">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>005</td>
                                        <td>Tom Cruise</td>
                                        <td>1234.XYZ Road,'YYY Tole,zzz City, Kathmandu, Nepal, 44600</td>
                                        <td>abcd_@gmail.com</td>
                                        <td>This is remark for test, dashboard for Walcom tablet.</td>
                                        <td>
                                            <a class="edit" title="Edit" data-toggle="modal"
                                                data-target="#sidebarEditPopUP">
                                                <i class="las la-edit"></i>
                                            </a>
                                            <a class="delete" title="Delete">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>005</td>
                                        <td>Tom Cruise</td>
                                        <td>1234.XYZ Road,'YYY Tole,zzz City, Kathmandu, Nepal, 44600</td>
                                        <td>abcd_@gmail.com</td>
                                        <td>This is remark for test, dashboard for Walcom tablet.</td>
                                        <td>
                                            <a class="edit" title="Edit" data-toggle="modal"
                                                data-target="#sidebarEditPopUP">
                                                <i class="las la-edit"></i>
                                            </a>
                                            <a class="delete" title="Delete">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>005</td>
                                        <td>Tom Cruise</td>
                                        <td>1234.XYZ Road,'YYY Tole,zzz City, Kathmandu, Nepal, 44600</td>
                                        <td>abcd_@gmail.com</td>
                                        <td>This is remark for test, dashboard for Walcom tablet.</td>
                                        <td>
                                            <a class="edit" title="Edit" data-toggle="modal"
                                                data-target="#sidebarEditPopUP">
                                                <i class="las la-edit"></i>
                                            </a>
                                            <a class="delete" title="Delete">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>005</td>
                                        <td>Tom Cruise</td>
                                        <td>1234.XYZ Road,'YYY Tole,zzz City, Kathmandu, Nepal, 44600</td>
                                        <td>abcd_@gmail.com</td>
                                        <td>This is remark for test, dashboard for Walcom tablet.</td>
                                        <td>
                                            <a class="edit" title="Edit" data-toggle="modal"
                                                data-target="#sidebarEditPopUP">
                                                <i class="las la-edit"></i>
                                            </a>
                                            <a class="delete" title="Delete">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>005</td>
                                        <td>Tom Cruise</td>
                                        <td>1234.XYZ Road,'YYY Tole,zzz City, Kathmandu, Nepal, 44600</td>
                                        <td>abcd_@gmail.com</td>
                                        <td>This is remark for test, dashboard for Walcom tablet.</td>
                                        <td>
                                            <a class="edit" title="Edit" data-toggle="modal"
                                                data-target="#sidebarEditPopUP">
                                                <i class="las la-edit"></i>
                                            </a>
                                            <a class="delete" title="Delete">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>005</td>
                                        <td>Tom Cruise</td>
                                        <td>1234.XYZ Road,'YYY Tole,zzz City, Kathmandu, Nepal, 44600</td>
                                        <td>abcd_@gmail.com</td>
                                        <td>This is remark for test, dashboard for Walcom tablet.</td>
                                        <td>
                                            <a class="edit" title="Edit" data-toggle="modal"
                                                data-target="#sidebarEditPopUP">
                                                <i class="las la-edit"></i>
                                            </a>
                                            <a class="delete" title="Delete">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--Table body-->
                            </table>
                        </div>
                        <!--Table-->





                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!--Container Main end-->

@endsection