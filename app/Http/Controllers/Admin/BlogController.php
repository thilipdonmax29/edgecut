<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\BlogFormRequest;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        return view('admin.blog.index', compact('blog'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(BlogFormRequest $request)
    {
        //return view('admin.blog.store');
        $data = $request->validated();

        $blog = new Blog;
        $blog->blog_title = $data['blog_title'];
        $blog->blog_description = $data['blog_description'];

        if($request->hasFile('blog_image')) {
            $file = $request->file('blog_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/', $filename);
            $blog->blog_image = $filename;
        }
        //$blog->blog_title = $data['blog_title'];

        $blog->save();

        return redirect('admin/blog')->with('message', 'Blog Post Added Successfully');

    }

    public function edit($blog_id)
    {
        $blog = Blog::find($blog_id);
        return view('admin.blog.edit', compact('blog'));
    }

    public function update(BlogFormRequest $request, $blog_id)
    {
        //return view('admin.blog.store');
        $data = $request->validated();

        $blog = Blog::find($blog_id);
        $blog->blog_title = $data['blog_title'];
        $blog->blog_description = $data['blog_description'];

        if($request->hasFile('blog_image')) {

            $destination = 'public/images/'.$blog->blog_image;

            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('blog_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/', $filename);
            $blog->blog_image = $filename;
        }
        //$blog->blog_title = $data['blog_title'];

        $blog->update();

        return redirect('admin/blog')->with('message', 'Blog Post Added Successfully');
    }

    public function delete($blog_id)
    {
        $blog = Blog::find($blog_id);
        if($blog)
        {
            $destination = 'public/images/'.$blog->blog_image;

            if(File::exists($destination)){
                File::delete($destination);
            }
            $blog->delete();
            return redirect('admin/blog')->with('message', 'Blog Post Deleted Successfully');
        }
        else
        {
            return redirect('admin/blog')->with('message', 'No Blog Post Found');
        }
    }

}
