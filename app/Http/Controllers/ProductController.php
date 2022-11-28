<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;

use Illuminate\Support\Facades\DB;

use Session;

use Stripe;

class ProductController extends Controller
{
    //
    public function index() {
        //$product_lists = DB::select('select * FROM product');
       // return view('furniture', ['product_lists'=>$product_lists]);
        $product = Product::paginate(3);
        return view('furniture', compact('product'));
    }

    public function add_cart(Request $request, $product_id)
    {
        if(Auth::id())
        {
            //return redirect()->back();

            $user = Auth::user();
            $product = Product::find($product_id);

            $cart = new cart;

            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->user_id = $user->id;

            $cart->product_title = $product->product_name;
            $cart->price = $product->product_price * $request->quantity;
            $cart->image = $product->product_image;
            $cart->Product_id = $product->id;

            $cart->quantity = $request->quantity;

            $cart->save();


            return redirect()->back();


           // dd($product);
        }

        else
        {
            return redirect('login');
        }

    }

    public function show_cart()
    {
        if(Auth::id())
        {

            $id = Auth::user()->id;

            $cart = cart::where('user_id', '=', $id)->get();

            //dd($cart);

            return view('showcart', compact('cart'));
        }
        else
        {
            return redirect('login');
        }
      //echo "Page is working";
    }

    public function show_order(){

        if(Auth::id())
        {

            $id = Auth::user()->id;

            $order = order::where('user_id', '=', $id)->get();

            //dd($cart);

            return view('showorder', compact('order'));
        }
        else
        {
            return redirect('login');
        }
    }

    public function cancel_order($id)
    {
        $order=order::find($id);

        $order->delivery_status = 'You Cancelled the order';

        $order->save();

        return redirect()->back();

    }

    public function remove_cart($cart_id)
    {
        $cart = cart::find($cart_id);

        $cart->delete();

        return redirect()->back();
    }

    public function cash_order()
    {
        $user = Auth::user();

        $userid = $user->id;

        $datas = cart::where('user_id', '=', $userid)->get();

        foreach( $datas as $data)
        {
            $order = new Order;

            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->product_title = $data->product_title;
            $order->quantity = $data->quantity;
            $order->price = $data->price;
            $order->image = $data->image;
            $order->product_id = $data->Product_id;

            $order->payment_status = 'Cash On Delivery';
            $order->delivery_status = 'Processing';

            $order->save();

            $cart_id = $data->id;

            $cart = cart::find($cart_id);

            $cart->delete();


        }

        return redirect()->back()->with('message', 'We have Received Your Order. We will connect soon...');


    }

    public function stripe($totalprice)
    {
        return view('stripe', compact('totalprice'));
    }

    public function stripePost(Request $request, $totalprice)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
                "amount" => $totalprice * 100,
                "currency" => "usd",
                "source" => $request->stripeToken,
                "description" => "Thanks for Payment."
        ]);


        $user = Auth::user();

        $userid = $user->id;

        $datas = cart::where('user_id', '=', $userid)->get();

        foreach( $datas as $data)
        {
            $order = new Order;

            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;
            $order->product_title = $data->product_title;
            $order->quantity = $data->quantity;
            $order->price = $data->price;
            $order->image = $data->image;
            $order->product_id = $data->Product_id;

            $order->payment_status = 'Paid';
            $order->delivery_status = 'Processing';

            $order->save();

            $cart_id = $data->id;

            $cart = cart::find($cart_id);

            $cart->delete();


        }


        Session::flash('success', 'Payment successful!');

        return back();
    }

    // public function cart_count()
    // {
    //     $id = Auth::user()->id;

    //     $cart = cart::where('user_id', '=', $id)->get();

    // }
}


