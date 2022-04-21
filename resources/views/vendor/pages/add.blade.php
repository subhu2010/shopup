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
                            <h5>Add Courses</h5>
                        </div>
                    </div>
                    <div class="content__body ">
                        <div class="form">
                            

                            <form action="">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group first">
                                            <label for="">First Name</label>
                                            <input class="form-input " type="text" placeholder="First-Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group second">
                                            <label for="">Last Name</label>
                                            <input class="form-input " type="text" placeholder="Last-Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group second">
                                            <label for="">Image</label>
                                            <input class="form-input " type="file" value="Add Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group fourth">
                                            <label for="">Contact</label>
                                            <input class="form-input " type="text" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group third">
                                            <label for="">Email</label>
                                            <input class="form-input " type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group third">
                                            <label for="">Github URL</label>
                                            <input type="text" id="_tutor_profile_github" value=""
                                                placeholder="https://github.com/username">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group third">
                                            <label for="">Website URL</label>
                                            <input type="text" id="_tutor_profile_github" value=""
                                                placeholder="https://github.com/username">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group third">
                                            <label for="">Facebook URL</label>
                                            <input type="text" id="_tutor_profile_facebook"
                                                name="_tutor_profile_facebook" value=""
                                                placeholder="https://facebook.com/username">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group third">
                                            <label for="">Twitter URL</label>
                                            <input type="text" id="_tutor_profile_twitter" name="_tutor_profile_twitter"
                                                value="" placeholder="https://twitter.com/username">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="form-group third">
                                            <label for="">Linkedin URL</label>
                                            <input type="text" id="_tutor_profile_linkedin"
                                                name="_tutor_profile_linkedin" value=""
                                                placeholder="https://linkedin.com/username">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="buttons-group m-0 all-button">
                                            <button class="site-button all-button" role="button">Update
                                            </button>
                                            <button class="site-button all-button cancel" role="button">cancel
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<!--Container Main end-->


@endsection