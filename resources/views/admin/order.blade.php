@extends('admin.layout.master')

@section('title', 'Website Admin')

@section('content')

<div class="container-fluid px-4">
    <div class="card mt-5">
        <div class="card-header">
            <h4>All Orders</h4>
        </div>
        <div class="text-center py-3 mt-3">
            <form action="{{ url('admin/search/') }}" method="get">
                @csrf
                <input type="text" class="form-control" name="search" placeholder="Search For Order" style="
    display: inline-block;
    width: auto;
">
                <input type="submit" value="Search" class="btn btn-success">
            </form>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Product Title</th>
                        <th>Price</th>
                        <th>Quanity</th>
                        <th>Payment Status</th>
                        <th>Delivery Status</th>
                        <th>Image</th>
                        <th>Delivered</th>
                        <th>Print PDF</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($order as $item)
                    <tr>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->address }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->product_title }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->payment_status }}</td>
                        <td>{{ $item->delivery_status }}</td>
                        <td>
                            <img src="{{ url('public/images/'. $item->image) }}" width="50px" height="50px" alt="">
                        </td>
                        <td>
                            @if($item->delivery_status=='Processing')
                            <a href="{{ url('admin/delivered/'.$item->id) }}" onclick="return confirm('Are you sure this product is delivered !!!')" class="btn btn-success">Delivered</a>
                            @else
                            <a href="#" class="btn btn-secondary" disabled>Delivered</a>
                            @endif
                        </td>
                        <td>
                            <a href="{{ url('admin/printpdf/'.$item->id) }}" class="btn btn-success">Print PDF</a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="16" style="text-align: center;">No data found</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
