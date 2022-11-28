@foreach ($product_lists as $product)
<div class="col-md-6 col-lg-4">
  <div class="box">
    <div class="img-box">
      <img src="{{$product->product_image}}" alt="">
    </div>
    <div class="detail-box">
      <h5>
        {{$product->product_name}}
      </h5>
      <div class="price_box">
        <h6 class="price_heading">
          <span>$</span> {{$product->product_price}}
        </h6>
        <a href="{{$product->product_link}}">
          Buy Now
        </a>
      </div>
    </div>
  </div>
</div>
@endforeach
