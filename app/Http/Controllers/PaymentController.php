<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Receipt;
use App\ReceiptItem;
use App\Redeem;

class PaymentController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function create() {
        $items = Cart::where('user_id', auth()->user()->id)->count();
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        $total = 0;
        foreach($cart as $c) {
            $total+=$c->quantity * $c->product->price;
        }
        return view('purchase.checkout',compact('items', 'cart', 'total'));
    }
    public function store() {
        $data = request()->validate([
            'address'=>'required',
            'province'=>'required',
            'cardnumber'=>'required|min:9',
            'redeemcode'=>''
        ]);
        $cart = Cart::where('user_id', auth()->user()->id)->get();
        $total = 0;
        foreach($cart as $c) {
            $total+=$c->quantity * $c->product->price;
        }
        if( $data['redeemcode']) {
            if($code = Redeem::where('code',$data['redeemcode'])->first()) {
                $total=$total - $total*$code->discount;
            }
        }

        $receipt = Receipt::create([
            'user_id'=>auth()->user()->id,
            'address'=>$data['address'] .", ". $data['province'],
            'card_number'=>$data['cardnumber'],
            'total'=>$total
        ]);

        
        foreach($cart as $c) {
            ReceiptItem::create([
                'receipt_id'=>$receipt->id,
                'product_id'=>$c->product->id,
                'amount'=>$c->quantity
            ]);
        }
    
        return view('purchase.complete',compact('total'));
    }
}
