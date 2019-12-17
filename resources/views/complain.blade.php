<!doctype html>
<html lang="en">

    <head>
        <title>Hotel Online Complain</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700"
            rel="stylesheet">

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
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05"
                        aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                        <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('index')}}">Home</a>
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
                <a class="nav-link " href="about.html">About</a>
              </li> --}}
                            <li class="nav-item">
                                <a class="nav-link active" href="{{route('login')}}">Login</a>
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

        <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5"
            style="background-image: url({{asset('bootstrap_assets/images/big_image_1.jpg')}});">
            <div class="container">
                <div class="row align-items-center site-hero-inner justify-content-center">
                    <div class="col-md-12 text-center">

                        <div class="mb-5 element-animate">
                            <h1>Make Complain</h1>
                            <p>Discover our world's #1 Luxury Room For VIP.</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END section -->

        <section class="site-section">
            <div class="container">
                <p style="text-align: justify">
                    <strong class="mb-5">Dear Guest,</strong> <br>
                    <div>
                        Thank you for staying at THE FOCUS HOTEL. We aim to provide you with the ultimate in
                        comfort and services, and your valuable feedback will assit us in achieving
                        this goal.
                        After completing this questionaire, we shall ensure that your contribution
                        counts. All of us at THE FOCUS HOTEL appreciate your time and we assure you that your comments
                        will receieve our attention.
                        <br>
                        Thank you.
                    </div>
                </p>
                <div class="row">
                    <div class="col-md-12">
                        {{-- <h2 class="mb-5">Complain Form</h2> --}}
                        {{-- for messages --}}
                        @if (session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                        @endif
                        <form action="{{route('savecomplain')}}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <h3>Your Arrival</h3>
                                    <hr>
                                    <div>
                                        Staff friendliness at check-in
                                        <input type="radio" name="stafffriendliness" value="Poor"> 1
                                        <input type="radio" name="stafffriendliness" value="Satisfactory"> 2
                                        <input type="radio" name="stafffriendliness" value="Good"> 3
                                        <input type="radio" name="stafffriendliness" value="Very Good"> 4
                                        <input type="radio" name="stafffriendliness" value="Outstanding"> 5
                                        <br>
                                        Speed/Efficiency at check-in
                                        <input type="radio" name="efficiency" value="Poor"> 1
                                        <input type="radio" name="efficiency" value="Satisfactory"> 2
                                        <input type="radio" name="efficiency" value="Good"> 3
                                        <input type="radio" name="efficiency" value="Very Good"> 4
                                        <input type="radio" name="efficiency" value="Outstanding"> 5
                                        <br>
                                        Secure Environment
                                        <input type="radio" name="securenviron" value="Poor"> 1
                                        <input type="radio" name="securenviron" value="Satisfactory"> 2
                                        <input type="radio" name="securenviron" value="Good"> 3
                                        <input type="radio" name="securenviron" value="Very Good"> 4
                                        <input type="radio" name="securenviron" value="Outstanding"> 5
                                        <hr>
                                        <br>
                                    </div>
                                    <h3>Your Room</h3>
                                    <hr>
                                    <div>
                                        Cleanliness
                                        <input type="radio" name="cleanliness" value="Poor"> 1
                                        <input type="radio" name="cleanliness" value="Satisfactory"> 2
                                        <input type="radio" name="cleanliness" value="Good"> 3
                                        <input type="radio" name="cleanliness" value="Very Good"> 4
                                        <input type="radio" name="cleanliness" value="Outstanding"> 5
                                        <br>
                                        Comfortable
                                        <input type="radio" name="comfortable" value="Poor"> 1
                                        <input type="radio" name="comfortable" value="Satisfactory"> 2
                                        <input type="radio" name="comfortable" value="Good"> 3
                                        <input type="radio" name="comfortable" value="Very Good"> 4
                                        <input type="radio" name="comfortable" value="Outstanding"> 5
                                        <br>
                                        Amenities and guest supply
                                        <input type="radio" name="amenities" value="Poor"> 1
                                        <input type="radio" name="amenities" value="Satisfactory"> 2
                                        <input type="radio" name="amenities" value="Good"> 3
                                        <input type="radio" name="amenities" value="Very Good"> 4
                                        <input type="radio" name="amenities" value="Outstanding"> 5
                                        <br>
                                        Working condition in the room/bathrooms
                                        <input type="radio" name="workingcondition" value="Poor"> 1
                                        <input type="radio" name="workingcondition" value="Satisfactory"> 2
                                        <input type="radio" name="workingcondition" value="Good"> 3
                                        <input type="radio" name="workingcondition" value="Very Good"> 4
                                        <input type="radio" name="workingcondition" value="Outstanding"> 5
                                        <hr>
                                        <br>
                                    </div>
                                    <div>
                                        <h3>Food and Beverages</h3>
                                        <hr>
                                        <div>
                                            Room Service
                                            <input type="radio" name="roomservice" value="Poor"> 1
                                            <input type="radio" name="roomservice" value="Satisfactory"> 2
                                            <input type="radio" name="roomservice" value="Good"> 3
                                            <input type="radio" name="roomservice" value="Very Good"> 4
                                            <input type="radio" name="roomservice" value="Outstanding"> 5
                                            <br>
                                            Restaurant
                                            <input type="radio" name="restaurant" value="Poor"> 1
                                            <input type="radio" name="restaurant" value="Satisfactory"> 2
                                            <input type="radio" name="restaurant" value="Good"> 3
                                            <input type="radio" name="restaurant" value="Very Good"> 4
                                            <input type="radio" name="restaurant" value="Outstanding"> 5
                                            <br>
                                            Bar
                                            <input type="radio" name="bar" value="Poor"> 1
                                            <input type="radio" name="bar" value="Satisfactory"> 2
                                            <input type="radio" name="bar" value="Good"> 3
                                            <input type="radio" name="bar" value="Very Good"> 4
                                            <input type="radio" name="bar" value="Outstanding"> 5
                                            <br>
                                            Quality of Food
                                            <input type="radio" name="foodquality" value="Poor"> 1
                                            <input type="radio" name="foodquality" value="Satisfactory"> 2
                                            <input type="radio" name="foodquality" value="Good"> 3
                                            <input type="radio" name="foodquality" value="Very Good"> 4
                                            <input type="radio" name="foodquality" value="Outstanding"> 5
                                            <hr>
                                            <br>
                                        </div>
                                    </div>
                                    <h3>Other Services</h3>
                                    <hr>
                                    <div>
                                        Telephone
                                        <input type="radio" name="telephone" value="Poor"> 1
                                        <input type="radio" name="telephone" value="Satisfactory"> 2
                                        <input type="radio" name="telephone" value="Good"> 3
                                        <input type="radio" name="telephone" value="Very Good"> 4
                                        <input type="radio" name="telephone" value="Outstanding"> 5
                                        <br>
                                        Laundry
                                        <input type="radio" name="laundry" value="Poor"> 1
                                        <input type="radio" name="laundry" value="Satisfactory"> 2
                                        <input type="radio" name="laundry" value="Good"> 3
                                        <input type="radio" name="laundry" value="Very Good"> 4
                                        <input type="radio" name="laundry" value="Outstanding"> 5
                                        <br>
                                        Internet Access
                                        <input type="radio" name="internet" value="Poor"> 1
                                        <input type="radio" name="internet" value="Satisfactory"> 2
                                        <input type="radio" name="internet" value="Good"> 3
                                        <input type="radio" name="internet" value="Very Good"> 4
                                        <input type="radio" name="internet" value="Outstanding"> 5
                                        <br>
                                        Meeting Room
                                        <input type="radio" name="meetingroom" value="Poor"> 1
                                        <input type="radio" name="meetingroom" value="Satisfactory"> 2
                                        <input type="radio" name="meetingroom" value="Good"> 3
                                        <input type="radio" name="meetingroom" value="Very Good"> 4
                                        <input type="radio" name="meetingroom" value="Outstanding"> 5
                                        <hr>
                                        <br>
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <h3>Overall Opinion</h3>
                                    <hr>
                                    <div>
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="fullname" name="fullname" class="form-control"
                                                placeholder="Full Name">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control"
                                                placeholder="Email Address">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Phone Number</label>
                                            <input type="tel" id="phone" name="phone" class="form-control"
                                                placeholder="Phone Number" maxlength="11">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Comment</label>
                                            <textarea class="form-control" name="comment" id="" cols="30" rows="10"
                                                placeholder="Your Comment"></textarea>
                                        </div>
                                        <div class="form-group">
                                            Would you visit us again?
                                            <input type="radio" name="visitagain" value="Yes"> Yes
                                            <input type="radio" name="visitagain" value="No"> No
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            Would you recommend us to a friend?
                                            <input type="radio" name="tellafriend" value="Yes"> Yes
                                            <input type="radio" name="tellafriend" value="No"> No
                                        </div>
                                        <hr>
                                        <div class="form-group">
                                            <b style="font-weight: 900">
                                                Feel free to rate our services
                                            </b>
                                            <br>
                                            <input type="radio" name="rateus" value="Poor"> Poor
                                            <input type="radio" name="rateus" value="Satisfactory"> Satisfactory
                                            <input type="radio" name="rateus" value="Good"> Good
                                            <input type="radio" name="rateus" value="Very Good"> Very Good
                                            <input type="radio" name="rateus" value="Outstanding"> Outstanding
                                            <hr>
                                        </div>

                                    </div>

                                </div>


                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="submit" value="Send Complain" class="btn btn-primary">
                        </div>
                    </div>
                    </form>
                </div>
                {{-- <div class="col-md-1"></div> --}}
                {{-- <div class="col-md-5">
                <h3 class="mb-5">Paragraph</h3>
                <p class="mb-5"><img src="{{asset('bootstrap_assets/images/img_4.jpg')}}" alt="" class="img-fluid"></p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae labore aspernatur cumque
                    inventore voluptatibus odit doloribus! Ducimus, animi perferendis repellat. Ducimus harum alias
                    quas, quibusdam provident ea sed, sapiente quo.</p>
                <p>Ullam cumque eveniet, fugiat quas maiores, non modi eos deleniti minima, nesciunt assumenda sequi
                    vitae culpa labore nulla! Cumque vero, magnam ab optio quidem debitis dignissimos nihil nesciunt
                    vitae impedit!</p>
            </div> --}}
            </div>
            </div>
        </section>
        <!-- END section -->





        <section class="section-cover" data-stellar-background-ratio="0.5"
            style="background-image: url({{asset('bootstrap_asset/images/img_5.jpg')}});">
            <div class="container">
                <div class="row justify-content-center align-items-center intro">
                    <div class="col-md-9 text-center element-animate">
                        <h2>Relax and Enjoy your Holiday</h2>
                        <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem
                            tempore expedita facere facilis, dolores!</p>
                        <div class="btn-play-wrap"><a href="https://vimeo.com/channels/staffpicks/93951774"
                                class="btn-play popup-vimeo "><span class="ion-ios-play"></span></a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END section -->

        <footer class="site-footer">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4">
                        <h3>Phone Support</h3>
                        <p>24/7 Call us now.</p>
                        <p class="lead"><a href="tel://">+ 1 332 3093 323</a></p>
                    </div>
                    <div class="col-md-4">
                        <h3>Connect With Us</h3>
                        <p>We are socialized. Follow us</p>
                        <p>
                            <a href="#" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
                            <a href="#" class="p-3"><span class="fa fa-twitter"></span></a>

                        </p>
                    </div>
                    <div class="col-md-4">
                        {{-- <h3>Connect With Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.</p> --}}
                        {{-- <form action="#" class="subscribe">
              <div class="form-group">
                <button type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              
            </form> --}}
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center">
                        &copy;
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy; hotelonlinecomplain <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                </div>
            </div>
        </footer>
        <!-- END footer -->

        <!-- loader -->
        <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                    stroke="#f4b214" /></svg></div>

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