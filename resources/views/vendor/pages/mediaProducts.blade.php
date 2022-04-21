@extends("vendor.layout.vendor-layout")

@section("page_title", "Shopup")

@section("content")


<!--Container Main start-->
<main class=" content">
    @include('vendor.includes.breadcrumb',['title' => 'Add Products'])

    <section class="content-wrap">
        <div class="site-header">
            <h5>Add Products</h5>
        </div>
        <!-- Tab panes -->
        <div class="vendor-block add-products">
            <div class="site-header">
                <h5>Basic Information</h5>
            </div>
            <div class="custom-block">
                <form action="">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group"><label for="">Product Name<sup>*</sup></label> <input type="text"
                                    placeholder="Ex. Nikon Coolpix A300 Digital Camera" value="" />
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group "><label for="">Category<sup>*</sup></label> <input type="text"
                                    name="category" id="category" placeholder="" value="" /></div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="custom-menu example">
                <div class="menu-wrap">
                    <div class="menu-block">
                        <form action="">
                            <div class="search">
                                <input type="text" class="searchTerm" placeholder="Keyword">
                                <button type="submit" class="searchButton">
                                    <i class="las la-search"></i>
                                </button>
                            </div>
                        </form>
                        <ul class="addClick">
                            <li>Mobile & Tablets</li>
                            <li class="dropdown">Computer & Laptops</li>
                            <li>Tv.Audio / Video Gaming</li>
                            <li class="dropdown">Cameras</li>
                            <li>Home Appliances</li>
                            <li>Health & Beauty</li>
                        </ul>
                    </div>
                    <div class="menu-block child" id="child">
                        <form action="">
                            <div class="search">
                                <input type="text" class="searchTerm" placeholder="Keyword">
                                <button type="submit" class="searchButton">
                                    <i class="las la-search"></i>
                                </button>
                            </div>
                        </form>
                        <ul class="addClick">
                            <li>Mobile & Tablets</li>
                            <li>Computer & Laptops</li>
                            <li>Tv.Audio / Video Gaming</li>
                            <li class="dropdown">Cameras</li>
                            <li>Home Appliances</li>
                            <li>Health & Beauty</li>
                        </ul>
                    </div>
                </div>
                <div class="current-path">
                    <ul>
                        <li class="current">Current selection</li>
                        <li><a href="#">Tv audio</a></li>
                        <li><a href="#">Video Gaming</a></li>
                        <li><a href="#">Smart Watches</a></li>
                    </ul>
                </div>
                <div class="form-group mt-3">
                    <button class="site-button">Confirm</button>
                    <button class="site-button clear">Cancel</button>
                    <button class="site-button clear">Clear</button>
                </div>
            </div>

            <div class="custom-menu example">
                <div class="menu-wrap">
                    <div class="menu-block">
                        <form action="">
                            <div class="search">
                                <input type="text" class="searchTerm" placeholder="Keyword">
                                <button type="submit" class="searchButton">
                                    <i class="las la-search"></i>
                                </button>
                            </div>
                        </form>
                        <ul class="addClick">
                            <li>Mobile & Tablets</li>
                            <li class="dropdown">Computer & Laptops</li>
                            <li>Tv.Audio / Video Gaming</li>
                            <li class="dropdown">Cameras</li>
                            <li>Home Appliances</li>
                            <li>Health & Beauty</li>
                        </ul>
                    </div>
                    <div class="menu-block child" id="child">
                        <form action="">
                            <div class="search">
                                <input type="text" class="searchTerm" placeholder="Keyword">
                                <button type="submit" class="searchButton">
                                    <i class="las la-search"></i>
                                </button>
                            </div>
                        </form>
                        <ul class="addClick">
                            <li>Mobile & Tablets</li>
                            <li>Computer & Laptops</li>
                            <li>Tv.Audio / Video Gaming</li>
                            <li class="dropdown">Cameras</li>
                            <li>Home Appliances</li>
                            <li>Health & Beauty</li>
                        </ul>
                    </div>
                </div>
                <div class="current-path">
                    <ul>
                        <li class="current">Current selection</li>
                        <li><a href="#">Tv audio</a></li>
                        <li><a href="#">Video Gaming</a></li>
                        <li><a href="#">Smart Watches</a></li>
                    </ul>
                </div>
                <div class="form-group mt-3">
                    <button class="site-button">Confirm</button>
                    <button class="site-button clear">Cancel</button>
                    <button class="site-button clear">Clear</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="vendor-block">
            <!-- Detailed Description -->
            <div class="site-header">
                <h5>Detailed Description</h5>
            </div>
            <div class="custom-block">
                <form action="">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <textarea name="editor1"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="form-group">
                                <label for="">What's in the box <sup>*</sup></label>
                                <input type="text">
                            </div>
                        </div>
                        
                    </div>
                    
                </form>
            </div>
        </div>

        <hr>

        <div class="vendor-block">
            <!-- service & Delivery -->
            <div class="site-header">
                <h5>Service</h5>
            </div>
            <div class="custom-block">
                <form action="">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Warranty Type<sup>*</sup></label>
                                <select class="inputbox">
                                    <option value="">No Warranty</option>
                                    <option value="">Brand Warranty</option>
                                    <option value="">Seller Warranty</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Warranty Period</label>
                                <select class="inputbox">
                                    <option value="">1 month</option>
                                    <option value="">2 months</option>
                                    <option value="">3 months</option>
                                    <option value="">4 months</option>
                                    <option value="">5 months</option>
                                    <option value="">6 months</option>
                                    <option value="">7 months</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Warranty Policy<sup>*</sup></label>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <hr>
            <!-- service & Delivery -->
            <div class="site-header">
                <h5>Delivery</h5>
            </div>
            <div class="custom-block">
                <form action="">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group">
                                <label for="">Package Weight (kg)<sup>*</sup></label>
                                <input type="number" name="" id="">
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-6">
                            <div class="form-group">
                                <label for="">Package Dimensions (cm)</label>
                                <div class="number d-flex">
                                    <input type="number" name="" id="" placeholder="length(cm)">
                                    <input type="number" name="" id="" placeholder="width(cm)">
                                    <input type="number" name="" id="" placeholder="height(cm)">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <hr>
        </div>

        <div class="product-send">
            <button class="site-button">Save Drafts</button>
            <button class="site-button">Submit</button>
        </div>

    </section>

</main>
<!--Container Main end-->

@endsection