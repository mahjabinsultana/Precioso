<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class AdminController extends Controller
{
    public function admin()
    {
        return view('frontend.admin');
    }

    public function adminpost(Request $request)
    {
        $product = new product;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        //$product->image = $request->image;

        $image = $request->image;

        $imagename = time().'.'.$image->getClientOriginalExtension();
        
        $request->image->move('product', $imagename);
        $product->image = $imagename;

        $product->save();

        
        return redirect(route('admin'));

    }
    
    public function viewproducts()
    {
        $products =  product::paginate(8);
        return view('frontend.viewproducts', compact('products'));
    }

    public function addproducts()
    {
        return view('frontend.admin');
    }

    public function remove($id)
    {
        $product = product::find($id);
        $product->delete();

        return redirect()->back();
    }

    public function vieworders()
    {
        $orders =  order::paginate(8);
        return view('frontend.vieworders', compact('orders'));
    }

    public function removeorder($id)
    {
        $order = order::find($id);
        $order->delete();

        return redirect()->back();
    }
}
