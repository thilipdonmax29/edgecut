@extends('layout')
@section('content')
<div class="container px-4 my-5">
    {{-- @if (session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
        {{session()->get('message')}}
    </div>
    @endif --}}
    <div class="card">
        <div class="card-header">
            <h4>Your Orders</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Product Title</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Product Image</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                        <th>Cancel Order</th>
                    </tr>
                </thead>
                <tbody>
                    <?php //$totalprice = 0; ?>
                    @foreach ($order as $item)
                    <tr>
                        <td>{{ $item->product_title }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>
                            <img src="{{ url('public/images/'. $item->image) }}" width="50px" height="50px" alt="">
                        </td>
                        <td>{{$item->payment_status}}</td>
                        <td>{{$item->delivery_status}}</td>
                        <td>
                            @if ($item->delivery_status == 'Processing')
                            <a href="{{url('cancel_order', $item->id)}}" onclick="return confirm('Are you sure to Cancel this Order!!!')" class="btn btn-danger">Cancel Order</a>
                            @else
                            <a href="#" class="btn btn-secondary" disabled>Cancel Order</a>
                            @endif
                        </td>

                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
