@extends('admin.layout.master')

@section('title', 'Add Blog')

@section('content')

<div class="container-fluid px-4">
    <div class="card">
        <div class="card-header">
            <h4>Add Post
                <a href="{{ url('admin/add-blog') }}" class="btn btn-primary float-end">Add Post</a>
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
            <form action="{{ url('admin/add-blog') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mt-3">
                   <label for="">Blog Title</label>
                   <input type="text" name="blog_title" class="form-control">
                </div>

                <div class="mt-3">
                    <label for="">Blog Description</label>
                    <textarea name="blog_description" rows="3" class="form-control"></textarea>
                 </div>

                 <div class="mt-3">
                    <label for="">Blog Image</label>
                    <input type="file" name="blog_image" class="form-control">
                 </div>

                 <div class="row">
                    <div class="col-md-8">
                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary">Save Post</button>
                        </div>
                    </div>
                 </div>

            </form>
        </div>
    </div>
</div>

@endsection
