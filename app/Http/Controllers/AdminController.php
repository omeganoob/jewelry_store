<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Receipt;
use App\Redeem;
use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        $products = Product::all();
        $products_count = $products->count();
        $users = User::all()->count();

        return view('admin.index', compact('products', 'products_count','users'));
    }

    public function managecategory() {
        $categories = Category::all();

        return view('admin.category', compact('categories'));
    }

    public function promote(Request $r) {
        $user = User::find($r->userid);

        $user->update([
            'permission' => 1
        ]);

        return response('ok');
    }

    public function manageproduct() {
        $products = Product::all();

        return view('admin.product', compact('products'));
    }

    public function managereceipt() {
        $receipts= Receipt::all();

        return view('admin.receipt', compact('receipts'));
    }

    public function manageuser() {
        $users = User::all();

        return view('admin.account', compact('users'));
    }

    public function managecode() {
        $codes = Redeem::all();

        return view('admin.code', compact('codes'));
    }

    public function addcode() {
        return view('admin.createcode');
    }

    public function storecode() {
        $data = request()->validate([
            'code'=>'required',
            'discount'=>'required',
        ]);

        Redeem::create($data);
        
        return redirect('/manager/code');
    }

    public function deletecode(Redeem $code) {
        $code->delete();

        return back();
    }
}
