@extends('layout')
@section('content')
<div class="container px-4 my-5">
    @if (session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
        {{session()->get('message')}}
    </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h4>View Cart</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product Title</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Product Image</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $totalprice = 0; ?>
                    @foreach ($cart as $item)
                    <tr>
                        <td>{{ $item->product_title }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        {{-- <td>{{ $item->image }}</td> --}}
                        <td>
                            <img src="{{ url('public/images/'. $item->image) }}" width="50px" height="50px" alt="">
                        </td>
                        <td>
                            <a href="{{ url('remove_cart/'.$item->id) }}" onclick="return confirm('Are you sure to remove this product')" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>
                    <?php $totalprice = $totalprice + $item->price;  ?>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-12">
                    <h4><strong>Total Price :</strong> {{$totalprice}}</h4>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 my-5">
            <a href="{{ url('cash_order') }}" class="btn btn-primary">Cash on Delivery</a>
            <a href="{{ url('stripe', $totalprice)}}" class="btn btn-primary">Pay Using Card</a>
        </div>
    </div>
</div>
@endsection
