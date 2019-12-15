<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- <link rel="icon" href="{{asset('bootstrap_assets/img/favicon.png')}}" type="image/png"> --}}
    <title>Course Registration System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/lightbox/simpleLightbox.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/nice-select/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/animate-css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/vendors/popup/magnific-popup.css')}}">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/responsive.css')}}">
  </head>

  <body>

    <!--================Header Menu Area =================-->
    <header class="header_area">
      <div class="top_menu row m0">
        <div class="container">
          <div class="float-left">
            <ul class="list header_social">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              {{-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-behance"></i></a></li> --}}
            </ul>
          </div>
          <div class="float-right">
            <a class="dn_btn" href="tel:+2348036788890">+234803-678-8890</a>
            <a class="dn_btn" href="mailto:services@courseregsys.com">services@courseregsys.com</a>
          </div>
        </div>
      </div>
      <div class="main_menu">
        @include('frontend.layout.navbar')
      </div>
    </header>
    <!--================Header Menu Area =================-->