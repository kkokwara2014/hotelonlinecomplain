<!doctype html>
<html lang="en">
  <head>
    <title>Hotel Online Complain</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/owl.carousel.min.css')}}">

    <link rel="stylesheet" href="{{asset('bootstrap_assets/fonts/ionicons/css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/fonts/fontawesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/magnific-popup.css')}}">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('bootstrap_assets/css/style.css')}}">
  </head>
  <body>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <a class="navbar-brand" href="{{route('index')}}">HotelOnlineComplain</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="{{route('index')}}">Home</a>
              </li>
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="rooms.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Rooms</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="rooms.html">Room Videos</a>
                  <a class="dropdown-item" href="rooms.html">Presidential Room</a>
                  <a class="dropdown-item" href="rooms.html">Luxury Room</a>
                  <a class="dropdown-item" href="rooms.html">Deluxe Room</a>
                </div>

              </li> --}}
              {{-- <li class="nav-item">
                <a class="nav-link" href="blog.html">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li> --}}
              <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Login</a>
              </li>

               {{-- <li class="nav-item cta">
                <a class="nav-link" href="booknow.html"><span>Book Now</span></a>
              </li> --}}
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url({{asset('bootstrap_assets/images/big_image_1.jpg')}});">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>Welcome To The Focus Hotel</h1>
              <p>We hope to hear your complain so that we can serve you better</p>
            <p><a href="{{route('makecomplain')}}" class="btn btn-primary">Make Complain</a></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="heading-wrap text-center element-animate">
              <h4 class="sub-heading">Stay with our luxury rooms</h4>
              <h2 class="heading">Stay and Enjoy</h2>
              <p class="mb-5">We are out to serve you better. Kindly leave a complain to let us know how well we are doing.</p>
              <p><a href="#" class="btn btn-primary btn-sm">More About Us</a></p>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-7">
            <img src="{{asset('bootstrap_assets/images/f_img_1.png')}}" alt="Image placeholder" class="img-md-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
            <h4 class="sub-heading">Our Luxury Rooms</h4>
              <h2 class="heading">Featured Rooms</h2>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-7">
            <div class="media d-block room mb-0">
              <figure>
                <img src="{{asset('bootstrap_assets/images/img_1.jpg')}}" alt="Generic placeholder image" class="img-fluid">
                <div class="overlap-text">
                  <span>
                    Featured Room 
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                </div>
              </figure>
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Executive Room</a></h3>
                <ul class="room-specs">
                  <li><span class="ion-ios-people-outline"></span> 2 Guests</li>
                  <li><span class="ion-ios-crop"></span> 22 ft <sup>2</sup></li>
                </ul>
                <p>Stay in one of our rooms and feel at home to let us know what you think about us.</p>
                <p><a href="#" class="btn btn-primary btn-sm">Book Now From =N=9,000</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-5 room-thumbnail-absolute">
            <a href="#" class="media d-block room bg first-room" style="background-image: url({{asset('bootstrap_assets/images/img_2.jpg')}}); ">
              <!-- <figure> -->
                <div class="overlap-text">
                  <span>
                    Hotel Room 
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                  <span class="pricing-from">
                    from =N=7,500
                  </span>
                </div>
              <!-- </figure> -->
            </a>

            <a href="#" class="media d-block room bg second-room" style="background-image: url({{asset('bootstrap_assets/images/img_4.jpg')}}); ">
              <!-- <figure> -->
                <div class="overlap-text">
                  <span>
                    Hotel Room 
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                  <span class="pricing-from">
                    from =N=7,500
                  </span>
                </div>
              <!-- </figure> -->
            </a>
            
          </div>
        </div>
      </div>
    </section>

   
    
    {{-- <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url({{asset('bootstrap_assets/images/img_5.jpg')}});">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-9 text-center element-animate">
            <h2>Relax and Enjoy your Holiday</h2>
            <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem tempore expedita facere facilis, dolores!</p>
            <div class="btn-play-wrap"><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn-play popup-vimeo "><span class="ion-ios-play"></span></a></div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- END section -->
    
    {{-- <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
            <h4 class="sub-heading">Our Blog</h4>
              <h2 class="heading">Our Recent Blog</h2>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-4">
            <div class="post-entry">
              <img src="images/img_3.jpg" alt="Image placeholder" class="img-fluid">
              <div class="body-text">
                <div class="category">Rooms</div>
                <h3 class="mb-3"><a href="#">New Rooms</a></h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum deserunt illo quis similique dolore voluptatem culpa voluptas rerum, dolor totam.</p>
                <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <img src="images/img_6.jpg" alt="Image placeholder" class="img-fluid">
              <div class="body-text">
                <div class="category">News</div>
                <h3 class="mb-3"><a href="#">New Staff Added</a></h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum deserunt illo quis similique dolore voluptatem culpa voluptas rerum, dolor totam.</p>
                <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <img src="images/img_5.jpg" alt="Image placeholder" class="img-fluid">
              <div class="body-text">
                <div class="category">New Rooms</div>
                <h3 class="mb-3"><a href="#">Big Rooms for All</a></h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum deserunt illo quis similique dolore voluptatem culpa voluptas rerum, dolor totam.</p>
                <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    <!-- END section -->
   
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>Phone Support</h3>
            <p>24/7 Call us now.</p>
            <p class="lead"><a href="tel://">+234816-096-0141</a></p>
          </div>
          <div class="col-md-4">
            <h3>Connect With Us</h3>
            <p>We are socialized. Follow us</p>
            <p>
              <a href="#" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
              <a href="#" class="p-3"><span class="fa fa-twitter"></span></a>
              {{-- <a href="#" class="p-3"><span class="fa fa-instagram"></span></a>
              <a href="#" class="p-3"><span class="fa fa-vimeo"></span></a>
              <a href="#" class="p-3"><span class="fa fa-youtube-play"></span></a> --}}
            </p>
          </div>
          <div class="col-md-4">
            {{-- <h3>Connect With Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.</p>
            <form action="#" class="subscribe">
              <div class="form-group">
                <button type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              
            </form> --}}
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            &copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy; hotelonlinecomplain <script>document.write(new Date().getFullYear());</script> All rights reserved
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="{{asset('bootstrap_assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('bootstrap_assets/js/jquery-migrate-3.0.0.js')}}"></script>
    <script src="{{asset('bootstrap_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('bootstrap_assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('bootstrap_assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('bootstrap_assets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('bootstrap_assets/js/jquery.stellar.min.js')}}"></script>

    <script src="{{asset('bootstrap_assets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('bootstrap_assets/js/magnific-popup-options.js')}}"></script>

    <script src="{{asset('bootstrap_assets/js/main.js')}}"></script>
  </body>
</html>