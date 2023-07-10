<?php

namespace App\Http\Controllers\Frontend;
use Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use App\Models\User;
use App\Models\Order;

class CartController extends Controller
{
    public function index()
    {
        if (Auth::check()){
            $id = Auth::user()->id;
            $cart = cart::where('user_id', '=', $id)->get();
             return view('frontend.cart', compact('cart'));
        }
        //show logged in navbar
       

        else
        {
            echo '<script>alert("Please log in first!")</script>';
            return view('frontend.login');
        }
        
        
        
    }
    public function cartpost(Request $request, $id)
    {
        if(Auth::check())
        {
            $user = Auth::user();
            $product = product::find($id);

            $cart = new cart;

            $cart->user_id = $user->id;
            $cart->email = $user->email;
            
            $cart->product_id = $product->id;
            $cart->price = $product->price;
            $cart->product_title= $product->title;

            $cart->image = $product->image;

            $cart->quantity = $request->quantity;

            $cart->save();

            return redirect()->back()->with('message', 'Added to cart!');

        }
        else
        {
            echo '<script>alert("Please log in first!")</script>';
            return view('frontend.login');
        }
    }

    public function remove($id)
    {
        $cart = cart::find($id);
        $cart->delete();

        return redirect()->back();
    }


    public function cash_order()
    {

        $user = Auth::user();

        $userid = $user->id;
        
        $data = cart::where('user_id','=',$userid)->get();

        foreach($data as $data)
        {
            $order = new order;
            $order->user_id = $data->user_id;
            $order->name = $user->username;
            $order->email = $data->email;

            $order->product_id = $data->product_id;
            $order->product_title = $data->product_title;
            $order->quantity = $data->quantity;
            $order->price = $data->price;
            $order->image = $data->image;

            $order->payment_status = 'Cash on delivery';
            $order->delivery_status = 'Processing';

            $order->save();

            $cart_id = $data->id;
            $cart = cart::find($cart_id);

            $cart->delete();



        }

        return redirect()->back()->with('message', 'Order received! We will contact you soon!');

    }

}
