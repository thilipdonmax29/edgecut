@extends('admin.layout.master')

@section('title', 'Website Admin')

@section('content')

<div class="container-fluid px-4">
    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="card">
        <div class="card-header">
            <h4>View Product
                <a href="{{ url('admin/add-product') }}" class="btn btn-primary float-end">Add Product</a>
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product Title</th>
                        <th>Product Price</th>
                        <th>Product Quantity</th>
                        <th>Product Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($product as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->product_price }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>
                            <img src="{{ url('public/images/'. $item->product_image) }}" width="50px" height="50px" alt="">
                        </td>
                        <td>
                            <a href="{{ url('admin/edit-product/'.$item->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/delete-product/'.$item->id) }}" onclick="return confirm('Are you sure this remove this product')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
