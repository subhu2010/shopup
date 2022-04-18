<!doctype html>
<html lang="en">

<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Shophab</title>

    <!-- Bootstrap cdn CSS -->
    <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- line-awesome -->
    <link rel="stylesheet" href="{{asset('frontend/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- font-family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- fancy-box -->
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}">

    <!-- sweetalert DEMO-->

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

    <!-- owl-slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}" />

    <!-- progressJS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/progress.js/0.1.0/progressjs.min.css" />

    <!-- datatable -->
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.dataTables.min.css')}}" />

    <!-- css-link -->
    <link rel="stylesheet" href="{{asset('frontend/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/xzoom.css')}}">

</head>

<body>

    @include('frontend.includes.header')


    @yield("content")


    @include('frontend.includes.footer')


    <!-- library -->
    <script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>

    <script src="{{asset('frontend/js/jquery.fancybox.min.js')}}"></script>

    <!-- carousel -->
    <script type="text/javascript" src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/custom-carousel.js')}}"></script>

    <!-- easytimer -->
    <script src="{{asset('frontend/js/easytimer.min.js')}}"></script>

    <!-- data-table -->
    <script src="{{asset('frontend/js/jquery.dataTables.min.js')}}"></script>

    <script src="{{asset('frontend/js/xzoom.min.js')}}"></script>
    <script src="{{asset('frontend/js/setup.js')}}"></script>

    <!-- progressJS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/progress.js/0.1.0/progress.min.js"></script>


    <!-- <script src="{{asset('frontend/js/sweetalert.min.js')}}"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

    <!-- lazyload -->
    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script>

    <!-- imageupload  -->
    <script src="{{asset('frontend/js/image-uploader.min.js')}}"></script>

    <script src="{{asset('frontend/js/script.js')}}"></script>


    <script>
    // onscroll-sidebar
    var btn = $('#left-sidebar');
    var first = document.querySelector("#start").offsetTop;
    var last = document.querySelector("#end").offsetTop;

    $(window).scroll(function() {
        if ($(window).scrollTop() > first && $(window).scrollTop() <= last) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
    });



    // document.querySelector("#msgpopup").addEventListener('click', function() {
    //     Swal.fire("Our First Alert");
    // });
    // 
    </script>
</body>

</html>