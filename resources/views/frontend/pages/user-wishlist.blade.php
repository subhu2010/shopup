@extends("frontend.layout.layout")

@section("page_title", "Shopup")

@section("content")

<section class="breadcrumb-wrap list-wrap">
    @include('frontend.includes.homepage.breadcrumb',['title' => 'Wishlist'])

    <div class="user-dashboard ">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <div class="user-sidebar">
                        @include('frontend.includes.user-dashboard-sidebar')
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12">
                    @include('frontend.includes.cart-product',['title' => 'Wishlist'])
                </div>
            </div>
        </div>
    </div>
</section>


@endsection