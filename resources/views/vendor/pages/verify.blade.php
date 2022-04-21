@extends("vendor.layout.vendor-layout")

@section("page_title", "Shopup")

@section("content")


<!--Container Main start-->
<main class=" content">
    @include('vendor.includes.breadcrumb',['title' => 'Verify Corporate'])
    <section class="content-wrap">
        <div class="site-header">
            <h5>Verify Corporate File</h5>
        </div>

        <div class="vendor-block">
            <div class="site-header">
                <h5>Verify Corporate File</h5>
            </div>
            <div class="custom-block">
                <form action="">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group"><label for="">Legal Name / Business Owner Name<sup>*</sup></label>
                                <input type="text" placeholder="" value="" /></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group"><label for="">Business Registration No (PAN /
                                    VAT)<sup>*</sup></label> <input type="text" placeholder="" value="" /></div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="form-group"><label for="">Upload Business Document<sup>*</sup></label> <input
                                    type="file" placeholder="" value="" /></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="product-send">
            <button class="site-button">Cancel</button>
            <button class="site-button">Submit</button>
        </div>
    </section>
</main>
<!--Container Main end-->

@endsection