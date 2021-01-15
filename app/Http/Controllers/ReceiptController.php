<?php

namespace App\Http\Controllers;

use App\Receipt;
use App\ReceiptItem;
use Illuminate\Http\Request;

class ReceiptController extends Controller
{
    public function index(Receipt $receipt) {

        $items = ReceiptItem::where('receipt_id', $receipt->id)->get();
        return view('receipt', compact('receipt','items'));
    }

    public function update(Receipt $receipt) {
        $receipt->update([
            'status'=>'completed'
        ]);
        return 1;
    } 
    public function cancel(Receipt $receipt) {
        $receipt->update([
            'status'=>'canceled'
        ]);
        return 1;
    } 
}
