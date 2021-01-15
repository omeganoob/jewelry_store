<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Cart;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $items = Cart::where('user_id', auth()->user()->id)->count();
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        $total = 0;
        foreach($cart as $c) {
            $total+=$c->quantity * $c->product->price;
        }
        return view('cart.index', compact('cart','items','total'));
    }

    public function store(Product $prod) {

        $item = Cart::where('user_id', auth()->user()->id)->where('product_id', $prod->id)->first();
        if($item) {
            $item->update([
                'quantity'=> $item->quantity + 1
            ]);
        } else {
        auth()->user()->cart()->create([
            'product_id'=> $prod->id
        ]);
        }

        return back();
    }

    public function destroy(Cart $item) {
        $item->delete();
        return redirect("/cart/view");
    }

    public function update($item) {
        $cart = Cart::find($item);
        $cart->update([
            'quantity'=>request('quantity')
        ]);
        return redirect('/cart/view');

    }
}
