<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::paginate(10)->sortByDesc('created_at');
        $items = 0;
        $total = 0;
        if(auth()->user()) {
            $items = Cart::where('user_id', auth()->user()->id)->count();
            $cart = Cart::where('user_id', auth()->user()->id)->get();
            $total = 0;
            foreach($cart as $c) {
                $total+=$c->quantity * $c->product->price;
            }
        }
        return view('home', compact('products','items','total'));
    }
}
