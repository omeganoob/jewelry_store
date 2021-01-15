<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Cart;

class ProductController extends Controller
{
    
    public function create() {
        $categories = Category::all();
        return view('Prod.create', compact('categories'));
    }

    public function store() {
        $data = request()->validate([
            'name'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'category'=>'required',
            'description'=>'required',
            'image'=>'required'
        ]);

        $imagePath = (request('image')->store('prodimg', 'public'));
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image->save();

        Product::create([
            'name'=>$data['name'],
            'price'=>$data['price'],
            'quantity'=>$data['quantity'],
            'category_id'=>$data['category'],
            'description'=>$data['description'],
            'image'=>$imagePath
        ]);

        return redirect('/product/add');
    }

    public function index(Request $request) {

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
        $products = Product::paginate(8);

        if($request['submit']) {
            $minprice = $request['minprice']? (int)$request['minprice'] : 0;
            $maxprice = $request['maxprice']? (int)$request['maxprice'] : 10000;
            $products = Product::where('price','>', $minprice)
                                ->where('price','<', $maxprice)
                                ->orderBy($request['sort_by'], 'desc')
                                ->paginate((int)$request['paginate']);
        }

        // dd($products);

        return view('Prod.index', compact('products','items','total'));
    }

    public function detail(Product $product) {
        $items = 0;
        $total = 0;
        if(auth()->user()) {
            $items = Cart::where('user_id', auth()->user()->id)->count();
            $cart = Cart::where('user_id', auth()->user()->id)->get();
            foreach($cart as $c) {
                $total+=$c->quantity * $c->product->price;
            }
        }

        return view('Prod.detail', compact('product','items','total'));
    }

    public function category(Category $category) {
        $category_id = $category->id;
        $products = Product::where('category_id', $category_id)->paginate(8);
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

        return view('Prod.index', compact('products','items','total'));
    }

    public function edit(Product $prod) {
        $categories = Category::all();
        return view('Prod.edit', compact('prod','categories'));
    }
    public function update(Product $prod) {
        $data = request()->validate([
            'name'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'category_id'=>'required',
            'description'=>'required',
            'image'=>''
        ]);

        if(request('image')) {
            $imagePath = request('image')->store('prodimg', 'public');

            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
            $image->save();

            $imgArr = ['image' => $imagePath];
        }

        $prod->update(array_merge(
            $data,
            $imgArr ?? []
        ));

        return redirect('manager/manageproduct');

    } 

    public function destroy(Product $prod) {
        $prod->delete();
        
        return back();
    }
 }
