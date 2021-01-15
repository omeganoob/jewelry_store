<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request) {
        $request->validate([
            'body'=>'required'
        ]);

        $data = $request->all();
        $data['user_id'] = auth()->user()->id;

        Comment::create($data);

        return back();
    }
}
