<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;

use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    //
    public function index() {
        $blogs = Blog::all();
        return view('blog', compact('blogs'));
    }
}
