@extends('admin.layout.master')

@section('title', 'Add Product')

@section('content')

<div class="container-fluid px-4">
    <div class="card">
        <div class="card-header">
            <h4>Add Product
                <a href="{{ url('admin/add-product') }}" class="btn btn-primary float-end">Add Product</a>
            </h4>
        </div>
        <div class="card-body">
            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
            <form action="{{ url('admin/add-product') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mt-3">
                   <label for="">Product Name</label>
                   <input type="text" name="product_name" class="form-control">
                </div>

                <div class="mt-3">
                    <label for="">Product Price</label>
                    <textarea name="product_price" rows="3" class="form-control"></textarea>
                 </div>

                 <div class="mt-3">
                    <label for="">Product Image</label>
                    <input type="file" name="product_image" class="form-control">
                 </div>

                 <div class="mt-3">
                    <label for="">Product Link</label>
                    <input type="file" name="product_link" class="form-control">
                 </div>

                 <div class="row">
                    <div class="col-md-8">
                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary">Save Product</button>
                        </div>
                    </div>
                 </div>

            </form>
        </div>
    </div>
</div>

@endsection
