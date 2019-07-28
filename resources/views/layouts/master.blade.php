<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from leggoo.netlify.com/index-rtl.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jun 2019 17:42:42 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="Responsive ,HTML5 ,CSS3 ,One Page ,Animations,leggoo,corporate,business">
  <meta name="author" content="M.ABOZAID">
  <title> ملاحظاتي </title>
  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.css')}}"><!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.css')}}" /><!-- font-awesome CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome-animation.css')}}" />
  <!-- font-awesome-animation CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}"><!-- animate CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/hover.css')}}"><!-- hover CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/magnific-popup.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}"><!-- Main Style CSS -->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/css/rtl.css')}}"><!--  RTL Style CSS -->
  @stack('style')
</head>

<body data-spy="scroll" data-target="#navbar-leggoo">
  @stack('header')
  @include('includes.navbar')
    @yield('content')
  @include('includes.footer')

  <!--========= LINK TO TOP ================-->
  <div class="back-to-top leggoo-nav">
    <a href="#HOME"> <span><i class="fa fa-angle-up"></i></span> </a>
  </div>
  <!--========= LOADER ================-->
  <div class="leggoo-loader"></div>
  <!--=================================================================-->
  <!--============================== jQuery ==============================-->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
  <script type="text/javascript" src="assets/js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.imagesloaded.js"></script>
  <script type="text/javascript" src="assets/js/jquery.magnific-popup.js"></script>
  <script type="text/javascript" src="assets/js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="assets/js/owl.carousel.js"></script>
  <script type="text/javascript" src="assets/js/jquery.countTo.js"></script>
  <script type="text/javascript" src="assets/js/wow.min.js"></script>
  <script> new WOW().init();</script>
  <script src="assets/js/custom.js"></script>
  <script type="text/javascript">

  </script>

</body>

<!-- Mirrored from leggoo.netlify.com/index-rtl.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 09 Jun 2019 17:43:01 GMT -->

</html>