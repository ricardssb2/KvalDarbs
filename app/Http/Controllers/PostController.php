<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\CreatePost;

class PostController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('post');
    }

    public function create_posts(Request $request)
    {   
        
        $post = new CreatePost;
        $post->product_name = $request->product_name;
        $post->product_price = $request->product_price;
        $post->product_description = $request->product_description;
        $post->save();
        return redirect('feed')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}