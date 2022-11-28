@extends('admin.layout.master')

@section('title', 'Website Admin')

@section('content')

<div class="container-fluid px-4">
    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif
    <div class="card">
        <div class="card-header">
            <h4>View Post
                <a href="{{ url('admin/add-blog') }}" class="btn btn-primary float-end">Add Post</a>
            </h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Blog Title</th>
                        <th>Blog Description</th>
                        <th>Blog Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blog as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->blog_title }}</td>
                        <td>{{ $item->blog_description }}</td>
                        <td>
                            <img src="{{ url('public/images/'. $item->blog_image) }}" width="50px" height="50px" alt="">
                        </td>
                        <td>
                            <a href="{{ url('admin/edit-blog/'.$item->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/delete-blog/'.$item->id) }}" onclick="return confirm('Are you sure this remove this post')" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
