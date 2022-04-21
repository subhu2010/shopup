<!doctype html>
<html lang="en">

<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shophab</title>

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap cdn CSS -->
    <link href="{{asset('vendor/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- line-awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{asset('vendor/css/line-awesome.min.css')}}">

    <!-- font-family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">



    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

    <!-- dataTable -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">

    <!-- datatable-date -->
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.1.1/css/dataTables.dateTime.min.css">

    <!-- css-link -->
    <link rel="stylesheet" href="{{asset('vendor/css/vendor.css')}}">
</head>

<body id="body-pd">

@include('vendor.includes.header')


@yield("content")


@include('vendor.includes.footer')

<!-- library -->
<script src="{{asset('vendor/js/jquery.min.js')}}"></script>
<script src="{{asset('vendor/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('vendor/js/progressbar.min.js')}}"></script>

<!-- datatable -->
<script src="{{asset('vendor/js/jquery.dataTables.min.js')}}"></script>

<!-- date-moment-min.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

<!-- date-time-min.js -->
<script src="https://cdn.datatables.net/datetime/1.1.1/js/dataTables.dateTime.min.js"></script>


<!-- pickadate -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.6.4/picker.js"></script>

<!-- ckeditor-v-4 -->
<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

<script src="{{asset('vendor/js/chart.min.js')}}"></script>
<script src="{{asset('vendor/js/script.js')}}"></script>
</body>


</html>