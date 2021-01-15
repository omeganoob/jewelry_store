<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        return view('category.create');
    }

    public function add() {
        $data = request()->validate([
            'name'=>'required'
        ]);

        Category::create([
            'name'=>$data['name']
        ]);

        return redirect('/category/list');
    }
    
    public function list() {
        $categories = Category::all();

        return view('category.index', compact('categories'));
    }
}
