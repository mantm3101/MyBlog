<!DOCTYPE html>
<html lang="en">

<head>
  <title>SodaHotGa's Blog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/fonts/user/icomoon/style.css">

  <link rel="stylesheet" href="/css/user/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="/css/jquery-ui.css"> -->
  <link rel="stylesheet" href="/css/user/owl.carousel.min.css">
  <link rel="stylesheet" href="/css/user/owl.theme.default.min.css">
  <link rel="stylesheet" href="/css/user/owl.theme.default.min.css">

  <link rel="stylesheet" href="/css/user/jquery.fancybox.min.css">

  <link rel="stylesheet" href="/css/user/bootstrap-datepicker.css">

  <link rel="stylesheet" href="/fonts/user/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="/css/user/aos.css">
  <link href="/css/user/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="/css/user/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    @include('user.layouts.header')

    <div class="site-section">
        <div class="container">
            @yield('content')
        </div>
    </div>

    @include('user.layouts.footer')

  </div>

  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#ff5e15" /></svg></div>

  <script src="/js/user/jquery-3.3.1.min.js"></script>
  <script src="/js/user/jquery-migrate-3.0.1.min.js"></script>
  <script src="/js/user/jquery-ui.js"></script>
  <script src="/js/user/popper.min.js"></script>
  <script src="/js/user/bootstrap.min.js"></script>
  <script src="/js/user/owl.carousel.min.js"></script>
  <script src="/js/user/jquery.stellar.min.js"></script>
  <script src="/js/user/jquery.countdown.min.js"></script>
  <script src="/js/user/bootstrap-datepicker.min.js"></script>
  <script src="/js/user/jquery.easing.1.3.js"></script>
  <script src="/js/user/aos.js"></script>
  <script src="/js/user/jquery.fancybox.min.js"></script>
  <script src="/js/user/jquery.sticky.js"></script>
  <script src="/js/user/jquery.mb.YTPlayer.min.js"></script>




  <script src="/js/user/main.js"></script>

</body>

</html>