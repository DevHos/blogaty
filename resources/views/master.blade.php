<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ======= Meta Tags ======= -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- ======= Title ======= -->
    <title>BLOGATY</title>
    <!-- ======= Favicon Icon ======= -->
    <link rel="icon" href="images/Favicon.png">
    <!-- ======= Fonts ======= -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="Stylesheet" type="text/css">
    <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">
    <!-- ======= Stylesheets ======= -->
    <link rel="Stylesheet" href="/css/bootstrap/bootstrap.min.css">
    <link rel="Stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/slick/slick.css" />
    <link rel="stylesheet" href="/css/slick/slick-theme.css" />
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/styles-responsive.css">
</head>

<body>

    <!-- ======= Preloader ======= -->

    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
                <div class="object"></div>
            </div>
        </div>
    </div>

    <!-- ======= Main content ======= -->

    <div class="main">
        <!-- ======= Mobile side-meu ======= -->
        @include('nav.mobile')

        <!-- ======= Header ======= -->
        @include('nav.top')
        <header>
            @include('nav.main-header')
        </header>

        <!-- ======= Search ======= -->

        @include('nav.search')

        <!-- ======= Login Popup ======= -->

        @include('nav.login')

        <!-- ======= Signup Popup ======= -->

        @include('nav.signup')

        <!-- ======= Banner ======= -->

        @include('nav.banner-slider')

        <!-- ======= Posts ======= -->

        <section class="posts-slider">
            <div class="container">
                <div class="col-sm-8">
                    @yield('content')
                </div>
                <div class="col-sm-4 sidebar">
                    @include('layouts.sidebar')
                </div>
            </div>
        </section>

        <!-- ======= Instagram ======= -->

        <section class="instagram">
            @include('layouts.instagram')
        </section>

        <!-- ======= Footer ======= -->

        <footer class="overflow">
            @include('layouts.footer')
        </footer>
    </div>


    <!-- ======= Scripts ======= -->

    <script src="/js/jquery-1.12.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/jquery.countTo.js"></script>
    <script src="/js/functions.js"></script>
</body>

</html>