<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\ProductFormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{

    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', compact('product'));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    public function store(ProductFormRequest $request)
    {
        //return view('admin.blog.store');
        $data = $request->validated();

        $product = new Product;
        $product->product_name = $data['product_name'];
        $product->product_price = $data['product_price'];
        $product->quantity = $data['quantity'];


        if($request->hasFile('product_image')) {
            $file = $request->file('product_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/', $filename);
            $product->product_image = $filename;
        }
        //$blog->blog_title = $data['blog_title'];

        $product->save();

        return redirect('admin/product')->with('message', 'Product Added Successfully');

    }

    public function edit($product_id)
    {
        $product = Product::find($product_id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(ProductFormRequest $request, $product_id)
    {
        //return view('admin.blog.store');
        $data = $request->validated();

        $product = Product::find($product_id);
        $product->product_name = $data['product_name'];
        $product->product_price = $data['product_price'];
        $product->quantity = $data['quantity'];

        if($request->hasFile('product_image')) {

            $destination = 'public/images/'.$product->product_image;

            if(File::exists($destination)){
                File::delete($destination);
            }

            $file = $request->file('product_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('public/images/', $filename);
            $product->product_image = $filename;
        }
        //$blog->blog_title = $data['blog_title'];

        $product->update();

        return redirect('admin/product')->with('message', 'Product Updated Successfully');
    }

    public function delete($product_id)
    {
        $product = Product::find($product_id);
        if($product)
        {
            $destination = 'public/images/'.$product->product_image;

            if(File::exists($destination)){
                File::delete($destination);
            }
            $product->delete();
            return redirect('admin/product')->with('message', 'Product Deleted Successfully');
        }
        else
        {
            return redirect('admin/product')->with('message', 'No Product Found');
        }
    }
}
