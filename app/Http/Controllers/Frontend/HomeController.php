<?php

namespace App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    
    public function products()
    {
        $products = product::paginate(8);
        return view('frontend.products', compact('products'));
    }

    public function productdetails($id)
    {

        $product = product::find($id);
        $similar = product::paginate(4);
        return view('frontend.product_details', compact('product'), compact('similar'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function orders()
    {
        $id = Auth::user()->id;
        $orders =  order::where('user_id', '=', $id)->get();
        return view('frontend.orders', compact('orders'));
    }
    
}
