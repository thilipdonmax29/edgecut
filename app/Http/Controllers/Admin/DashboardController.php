<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Product;
use App\Models\User;

use \PDF;


class DashboardController extends Controller
{
    public function index()
    {
       // return 'file is working';
       return view('admin.dashboard');
    }

    public function order()
    {
       // $order=order::all();
       $order=order::orderBy('id', 'DESC')->get();

        return view('admin.order', compact('order'));

    }

    public function delivered($id)
    {

        $order=order::find($id);

        $order->delivery_status="delivered";

        $order->payment_status='Paid';

        $order->save();

        return redirect()->back();
    }

    public function printpdf($id)
    {
       $order=order::find($id);

       $pdf=PDF::loadView('admin.pdf', compact('order'));

       return $pdf->download('order_details.pdf');

    //return view('admin.pdf');

    }

    public function searchdata(Request $request )
    {
        $searchtext=$request->search;

        $order=order::where('name', 'LIKE', "%$searchtext%")->orWhere('phone', 'LIKE', "%$searchtext%")->orWhere('product_title', 'LIKE', "%$searchtext%")->get();

        return view('admin.order', compact('order'));

    }

    public function dashboard()
    {
        $total_product=product::all()->count();
        $total_order=order::all()->count();
        $total_user=user::all()->count();
        $orders=order::all();

        $total_revenue=0;

        foreach($orders as $order)
        {
            $total_revenue=$total_revenue + $order->price;
        }

        $total_delivered=order::where('delivery_status', '=', 'delivered')->get()->count();

        $total_processing=order::where('delivery_status', '=', 'Processing')->get()->count();

        return view('admin.dashboard', compact('total_product','total_order','total_user', 'total_revenue', 'total_delivered', 'total_processing'));
    }
}
