@extends('layout')
@section('content')
<div class="hero_area">

    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      For All Your <br>
                      Furniture Needs
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="{{url('images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      For All Your <br>
                      Furniture Needs
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="{{url('images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      For All Your <br>
                      Furniture Needs
                    </h1>
                    <p>
                      Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus quidem maiores perspiciatis, illo maxime voluptatem a itaque suscipit.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="{{url('images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel" data-slide-to="1"></li>
          <li data-target="#customCarousel" data-slide-to="2"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>

    <!-- furniture section -->

    <section class="furniture_section layout_padding">
        <div class="container">
          <div class="heading_container">
            <h2>
              Our Furniture
            </h2>
            <p>
              which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't an
            </p>
          </div>
          {{-- <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="box">
                <div class="img-box">
                  <img src="images/f1.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    brown Chair Design
                  </h5>
                  <div class="price_box">
                    <h6 class="price_heading">
                      <span>$</span> 100.00
                    </h6>
                    <a href="">
                      Buy Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box">
                <div class="img-box">
                  <img src="images/f2.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Double Bed Design
                  </h5>
                  <div class="price_box">
                    <h6 class="price_heading">
                      <span>$</span> 200.00
                    </h6>
                    <a href="">
                      Buy Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box">
                <div class="img-box">
                  <img src="images/f3.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    House Chair Design
                  </h5>
                  <div class="price_box">
                    <h6 class="price_heading">
                      <span>$</span> 200.00
                    </h6>
                    <a href="">
                      Buy Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box">
                <div class="img-box">
                  <img src="images/f4.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    brown Table Design
                  </h5>
                  <div class="price_box">
                    <h6 class="price_heading">
                      <span>$</span> 100.00
                    </h6>
                    <a href="">
                      Buy Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box">
                <div class="img-box">
                  <img src="images/f5.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Blue Chair Design
                  </h5>
                  <div class="price_box">
                    <h6 class="price_heading">
                      <span>$</span> 200.00
                    </h6>
                    <a href="">
                      Buy Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="box">
                <div class="img-box">
                  <img src="images/f6.png" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Brown Table Design
                  </h5>
                  <div class="price_box">
                    <h6 class="price_heading">
                      <span>$</span> 200.00
                    </h6>
                    <a href="">
                      Buy Now
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}


          <div class="row">
            @foreach ($product as $item)
            <div class="col-md-6 col-lg-4">
              <div class="box">
                <div class="img-box">
                  <img src="{{ url('public/images/'. $item->product_image) }}" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    {{$item->product_name}}
                  </h5>
                  <div class="price_box">
                    <h6 class="price_heading">
                      <span>$</span> {{$item->product_price}}
                    </h6>
                    {{-- <a href="{{$item->product_link}}">
                      Add to Cart
                    </a> --}}
                  </div>
                  <form action="{{ url('add-cart', $item->id) }}" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-6 mt-3">
                        <input type="number" name="quantity" value="1" min="1" id="" style="width: 100px;">
                      </div>
                      <div class="col-md-6 mt-3">
                        <input class="btn btn-primary" type="submit" value="Add to Cart">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            @endforeach
          </div>

        </div>
      </section>

      <!-- end furniture section -->


      <!-- about section -->

      <section class="about_section layout_padding">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="img-box">
                <img src="images/about-img.png" alt="">
              </div>
            </div>
            <div class="col-md-6">
              <div class="detail-box">
                <div class="heading_container">
                  <h2>
                    About Us
                  </h2>
                </div>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti dolorem eum consequuntur ipsam repellat dolor soluta aliquid laborum, eius odit consectetur vel quasi in quidem, eveniet ab est corporis tempore.
                </p>
                <a href="">
                  Read More
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- end about section -->

      <!-- blog section -->

      <section class="blog_section layout_padding">
        <div class="container">
          <div class="heading_container">
            <h2>
              Latest Blog
            </h2>
          </div>

          <div class="row">
            @foreach ($blogs->take(3) as $blog)
            <div class="col-md-6 col-lg-4 mx-auto">
              <div class="box">
                <div class="img-box">
                  <img src="{{ url('public/images/'. $blog->blog_image) }}" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                      {{$blog->blog_title}}
                  </h5>
                  <p>
                      {{$blog->blog_description}}
                  </p>
                  <a href="">
                    Read More
                  </a>
                </div>
              </div>
            </div>
            @endforeach
        </div>

          {{-- <div class="row">
            <div class="col-md-6 col-lg-4 mx-auto">
              <div class="box">
                <div class="img-box">
                  <img src="images/b1.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Look even slightly believable. If you are
                  </h5>
                  <p>
                    alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                  </p>
                  <a href="">
                    Read More
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mx-auto">
              <div class="box">
                <div class="img-box">
                  <img src="images/b2.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Anything embarrassing hidden in the middle
                  </h5>
                  <p>
                    alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                  </p>
                  <a href="">
                    Read More
                  </a>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mx-auto">
              <div class="box">
                <div class="img-box">
                  <img src="images/b3.jpg" alt="">
                </div>
                <div class="detail-box">
                  <h5>
                    Molestias magni natus dolores odio commodi. Quaerat!
                  </h5>
                  <p>
                    alteration in some form, by injected humour, or randomised words which don't look even slightly believable.
                  </p>
                  <a href="">
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div> --}}

        </div>
      </section>

      <!-- end blog section -->

      <!-- client section -->

      <section class="client_section layout_padding-bottom">
        <div class="container">
          <div class="heading_container">
            <h2>
              Testimonial
            </h2>
          </div>
          <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-md-11 col-lg-10 mx-auto">
                    <div class="box">
                      <div class="img-box">
                        <img src="images/client.jpg" alt="" />
                      </div>
                      <div class="detail-box">
                        <div class="name">
                          <i class="fa fa-quote-left" aria-hidden="true"></i>
                          <h6>
                            Siaalya
                          </h6>
                        </div>
                        <p>
                          It is a long established fact that a reader will be
                          distracted by the readable cIt is a long established fact
                          that a reader will be distracted by the readable c
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-11 col-lg-10 mx-auto">
                    <div class="box">
                      <div class="img-box">
                        <img src="images/client.jpg" alt="" />
                      </div>
                      <div class="detail-box">
                        <div class="name">
                          <i class="fa fa-quote-left" aria-hidden="true"></i>
                          <h6>
                            Siaalya
                          </h6>
                        </div>
                        <p>
                          It is a long established fact that a reader will be
                          distracted by the readable cIt is a long established fact
                          that a reader will be distracted by the readable c
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-md-11 col-lg-10 mx-auto">
                    <div class="box">
                      <div class="img-box">
                        <img src="images/client.jpg" alt="" />
                      </div>
                      <div class="detail-box">
                        <div class="name">
                          <i class="fa fa-quote-left" aria-hidden="true"></i>
                          <h6>
                            Siaalya
                          </h6>
                        </div>
                        <p>
                          It is a long established fact that a reader will be
                          distracted by the readable cIt is a long established fact
                          that a reader will be distracted by the readable c
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel_btn-container">
              <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
                <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- end client section -->

      <!-- contact section -->
      <section class="contact_section">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="form_container">
                <div class="heading_container">
                  <h2>
                    Contact Us
                  </h2>
                </div>
                <form action="">
                  <div>
                    <input type="text" placeholder="Your Name" />
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email" />
                  </div>
                  <div>
                    <input type="text" class="message-box" placeholder="Message" />
                  </div>
                  <div class="btn_box">
                    <button>
                      SEND
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="col-md-6">
              <div class="map_container">
                <div class="map">
                  <div id="googleMap"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end contact section -->
@endsection
