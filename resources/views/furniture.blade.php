@extends('layout')
@section('title')
    Furniture
@endsection
@section('content')
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
        <div class="my-5">
            {!! $product->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
        {{-- <div class="col-md-6 col-lg-4">
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
        </div> --}}
      </div>
    </div>
  </section>

  <!-- end furniture section -->
@endsection
