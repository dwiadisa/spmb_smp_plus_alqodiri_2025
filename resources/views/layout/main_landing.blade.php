<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    {!! seo($SEOData) !!}
    <!--<title>@yield('title', 'Sistem Penerimaan Siswa Baru SMP Plus Al-Qodiri Jember')</title>-->
    <!-- MDB icon -->
    <link rel="icon" href="{{ asset('landing-page/img/logo-smp.png') }}" type="image/x-icon" />
    <!-- Font Awesome -->
<meta name="google-site-verification" content="LtlIfkFl6pQzi1JcY7_FR3R_LLv1OhM9Vt1T-a40BPY" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="{{ asset('landing-page/') }}/css/mdb.min.css" />

    {{-- my style --}}
    <link rel="stylesheet" href="{{ asset('landing-page/') }}/style.css" />
</head>

<body>

    @yield('content');



    <!-- MDB -->
    <script type="text/javascript" src="{{ asset('landing-page/') }}/js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>