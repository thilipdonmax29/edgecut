<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    {{-- <link rel="stylesheet" href="{{ url('css/app.css') }}"> --}}
    <style>
        .footer_section p,
        .info_section .info_links .info_links_menu a,
        .info_section .contact_nav a,
        #navbarSupportedContent ul li a {
            font-size: 16px;
        }

        .info_section h4 { font-size: 24px;}
        .info_post h5{ font-size: 20px;}
    </style>
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

<div class="container">

    <h1 class="text-center">Pay Using  Your Card -- Total Price : $ {{$totalprice}}</h1>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                        <h3 class="panel-title" >Payment Details</h3>
                </div>
                <div class="panel-body">

                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif

                    <form
                            role="form"
                            action="{{ route('stripe.post', $totalprice) }}"
                            method="post"
                            class="require-validation"
                            data-cc-on-file="false"
                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                            id="payment-form">
                        @csrf

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group required'>
                                <label class='control-label'>Name on Card</label> <input
                                    class='form-control' size='4' type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 form-group card required'>
                                <label class='control-label'>Card Number</label> <input
                                    autocomplete='off' class='form-control card-number' size='20'
                                    type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Month</label> <input
                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                    type='text'>
                            </div>
                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                <label class='control-label'>Expiration Year</label> <input
                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                    type='text'>
                            </div>
                        </div>

                        <div class='form-row row'>
                            <div class='col-md-12 error form-group hide'>
                                <div class='alert-danger alert'>Please correct the errors and try
                                    again.</div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

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
                      <img src="/images/f1.png" alt="">
                    </div>
                    <div class="img-box">
                      <img src="/images/f2.png" alt="">
                    </div>
                    <div class="img-box">
                      <img src="/images/f3.png" alt="">
                    </div>
                    <div class="img-box">
                      <img src="/images/f4.png" alt="">
                    </div>
                    <div class="img-box">
                      <img src="/images/f5.png" alt="">
                    </div>
                    <div class="img-box">
                      <img src="/images/f6.png" alt="">
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
    {{-- <script src="{{url('js/custom.js')}}"></script> --}}
    <!-- Google Map -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script> --}}
    <!-- End Google Map -->


<script type="text/javascript" src="https://js.stripe.com/v2/"></script>

<script type="text/javascript">

$(function() {

    /*------------------------------------------
    --------------------------------------------
    Stripe Payment Code
    --------------------------------------------
    --------------------------------------------*/

    var $form = $(".require-validation");

    $('form.require-validation').bind('submit', function(e) {
        var $form = $(".require-validation"),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid = true;
        $errorMessage.addClass('hide');

        $('.has-error').removeClass('has-error');
        $inputs.each(function(i, el) {
          var $input = $(el);
          if ($input.val() === '') {
            $input.parent().addClass('has-error');
            $errorMessage.removeClass('hide');
            e.preventDefault();
          }
        });

        if (!$form.data('cc-on-file')) {
          e.preventDefault();
          Stripe.setPublishableKey($form.data('stripe-publishable-key'));
          Stripe.createToken({
            number: $('.card-number').val(),
            cvc: $('.card-cvc').val(),
            exp_month: $('.card-expiry-month').val(),
            exp_year: $('.card-expiry-year').val()
          }, stripeResponseHandler);
        }

    });

    /*------------------------------------------
    --------------------------------------------
    Stripe Response Handler
    --------------------------------------------
    --------------------------------------------*/
    function stripeResponseHandler(status, response) {
        if (response.error) {
            $('.error')
                .removeClass('hide')
                .find('.alert')
                .text(response.error.message);
        } else {
            /* token contains id, last4, and card type */
            var token = response['id'];

            $form.find('input[type=text]').empty();
            $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
            $form.get(0).submit();
        }
    }

});
</script>
</body>
</html>
