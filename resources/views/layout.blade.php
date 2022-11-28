<!DOCTYPE html>
<html>
  <head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edgecut</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.css') }}">
    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />
    <!-- font awesome style -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
  </head>
  <body>
    <!-- header section strats -->
    <header class="header_section  px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container long_section">
        <a class="navbar-brand" href="/">
          <span> Edgecut </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about"> About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="furniture">Furnitures</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="blog">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('show_cart')}}">Cart</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('show_order')}}">Order</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
                <ul class="navbar-nav">
                    @guest

                    <li>
                        <a class="nav-link" href="{{ route('login') }}" > Login </a>
                    </li>
                    <li>
                        <a class="nav-link" href="{{ route('registration') }}"> Register</a>
                    </li>

                    @else
                    <li>
                        <a href="{{ route('logout') }}" class="dropdown-item"><i class="fa fa-power-off"></i> &nbsp; Logout</a>
                    </li>
                    {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="{{ route('login') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-user" aria-hidden="true"></i> &nbsp;Login </span> </a>

                    <div class="dropdown-menu dropdown-menu-right animated flipInY">
                    <a href="{{ route('registration') }}" class="dropdown-item"><i class="ti-settings"></i> <i class="fa fa-user" aria-hidden="true"></i> &nbsp; Register</a>
                    <!-- text-->
                    @else
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <a href="{{ route('logout') }}" class="dropdown-item"><i class="fa fa-power-off"></i> &nbsp; Logout</a>
                        <!-- text-->
                        </div>
                    </li> --}}

                    @endguest
                </ul>
            {{-- <a href="">
              <span> Login </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a> --}}
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                <i class="fa fa-search" aria-hidden="true"></i>
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    @yield('content')
    <!-- info section -->
    <section class="info_section ">
      <div class="container">
        <div class="contact_nav">
          <a href="">
            <i class="fa fa-phone" aria-hidden="true"></i>
            <span> Call : +01 123455678990 </span>
          </a>
          <a href="">
            <i class="fa fa-envelope" aria-hidden="true"></i>
            <span> Email : demo@gmail.com </span>
          </a>
          <a href="">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <span> Location </span>
          </a>
        </div>
        <div class="info_top ">
          <div class="row ">
            <div class="col-sm-6 col-md-4 col-lg-3">
              <div class="info_links">
                <h4> QUICK LINKS </h4>
                <div class="info_links_menu">
                  <a class="" href="/">Home <span class="sr-only">(current)</span>
                  </a>
                  <a class="" href="about"> About</a>
                  <a class="" href="furniture">Furniture</a>
                  <a class="" href="blog">Blog</a>
                  <a class="" href="contact">Contact Us</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
              <div class="info_post">
                <h5> INSTAGRAM FEEDS </h5>
                <div class="post_box">
                  <div class="img-box">
                    <img src="images/f1.png" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/f2.png" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/f3.png" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/f4.png" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/f5.png" alt="">
                  </div>
                  <div class="img-box">
                    <img src="images/f6.png" alt="">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info_form">
                <h4> SIGN UP TO OUR NEWSLETTER </h4>
                <form action="">
                  <input type="text" placeholder="Enter Your Email" />
                  <button type="submit"> Subscribe </button>
                </form>
                <div class="social_box">
                  <a href="">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
                  <a href="">
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end info_section -->
    <!-- footer section -->
    <footer class="footer_section">
      <div class="container">
        <p> &copy; <span id="displayYear"></span> All Rights Reserved </p>
      </div>
    </footer>
    <!-- footer section -->
    <!-- jQery -->
    <script src="{{url('js/jquery-3.4.1.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{url('js/bootstrap.js')}}"></script>
    <!-- custom js -->
    <script src="{{url('js/custom.js')}}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
    <!-- End Google Map -->
  </body>
</html>
